<?php
class DatabaseHandler {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insertClearanceData($email, $regno, $firstname, $intake, $phonenumber, $dept, $acdemicyr) {
        $sql = "INSERT INTO applyclearance (email, regno, firstname, intake, phonenumber, dept, acdemicyr, HODstatus, LibrarianStatus, AB_Status, AR_Status, Adjutant_Status,Final_Stats) 
                VALUES ('$email', '$regno', '$firstname', '$intake', '$phonenumber', '$dept', '$acdemicyr', 'pending', 'pending' , 'pending', 'pending', 'pending','pending')";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return $this->conn->error;
        }
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
