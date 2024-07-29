<?php
class ClearanceApplication {
    private $conn;
    private $table_name = "applyclearance";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function approveApplication($id) {
        $query = "UPDATE " . $this->table_name . " SET LibrarianStatus = 'Approved' WHERE id = ?";
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
        $query = "UPDATE " . $this->table_name . " SET LibrarianStatus = 'Reject' WHERE id = ?";
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
        $query = "SELECT * FROM " . $this->table_name . " WHERE LibrarianStatus = 'pending'";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getApprovedApplications() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE LibrarianStatus = 'Approved'";
        $result = $this->conn->query($query);
        return $result;
    }

    public function getRejectedApplications() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE LibrarianStatus = 'Reject'";
        $result = $this->conn->query($query);
        return $result;
    }
}
?>
