<?php
    require_once './config/database.php';
    class Database {
        public $dbname = DB_NAME;
        public $host = DB_HOST;
        public $password = DB_PASSWORD;
        public $username = DB_USER;
        public $conn;

        function __construct()
        {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

        function select($query){
            $result = $this->conn->query($query);
            if ($result->num_rows > 0) {
                $data = array();
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            } else {
                return false;
            }
        }

        public function insert($table, $data) {    
            $columns = implode(",", array_keys($data));
            $values = implode("','", array_values($data));
            $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
            if ($this->conn->query($sql)) {
                return true;
            } else {
                return false;
            }
        }

        public function update($table, $data, $where) {
            $set = '';
            foreach ($data as $column => $value) {
                $set .= "$column = '$value',";
            }
            $set = rtrim($set, ',');
            $sql = "UPDATE $table SET $set WHERE $where";
            if ($this->conn->query($sql)) {
                return true;
            } else {
                return false;
            }
        }

        public function delete($table, $where) {
            $sql = "DELETE FROM $table WHERE $where";
            if ($this->conn->query($sql)) {
                return true;
            } else {
                return false;
            }
        }
    
    
    }
?>