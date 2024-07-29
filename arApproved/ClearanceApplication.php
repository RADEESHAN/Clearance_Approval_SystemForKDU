<?php
class ClearanceApplication {
    private $conn;
    private $table_name = "applyclearance";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function approveApplication($id) {
        $query = "UPDATE " . $this->table_name . " SET 	AR_Status = 'Approved' WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error updating record: " . $stmt->error;
            return false;
        }
    }

    public function rejectApplication($id) {
        $query = "UPDATE " . $this->table_name . " SET 	AR_Status = 'Reject' WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error updating record: " . $stmt->error;
            return false;
        }
    }

    public function getPendingApplications() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE 	AR_Status = 'pending'";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getApprovedApplications() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE 	AR_Status = 'Approved'";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getRejectedApplications() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE 	AR_Status = 'Reject'";
        $result = $this->conn->query($query);
        return $result;
    }
}
?>
