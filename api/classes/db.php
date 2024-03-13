<?php
class Db {
        private $host = "localhost";
        private $username = "root";
        private $pwd = "";
        private $db = "foody";
    public function Db_connection(){
        
       #establishing connection
       $conn = mysqli_connect($this->host, $this->username, $this->pwd, $this->db);
       return $conn;
    }
    public function Write_db($query)
    {
        # writting db
        $connect = $this-> Db_connection();
        $insert_data = mysqli_query($connect, $query);
        if (!$insert_data) {
            return false;
        }else {
            return true;
        }
    }
    public function Read_db($query)
    {
        # Read db
        $connect = $this-> Db_connection();
        $read_db = mysqli_query($connect, $query);
        if (!$read_db) {
            return false;
        }else
         {
            # access data if no error
            $data = false;
            while ($row = mysqli_fetch_assoc($read_db)) {
               $data[] = $row;
            }
            return $data;
        }
    }
    public function Delete_db($query)
    {
        $connect = $this-> Db_connection();
        $delete_data = mysqli_query($connect, $query);
        if (!$delete_data) {
            return false;
        }else {
            return true;
        }
    }
    public function Update_db($query)
    {
        $connect = $this-> Db_connection();
        $update_data = mysqli_query($connect, $query);
        if (!$update_data) {
            return false;
        }else {
            return true;
        }
    }
}


?>