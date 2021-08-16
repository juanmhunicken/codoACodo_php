<?php

class connection {

    private $host;
    private $user;
    private $pass;
    private $database;
    private $conn;

    public function __construct(){
        $this->user='root';
        $this->password='';
        $this->database='final_project';
        $this->host='localhost';

    }

    public function connect(){
        //creates and returns a db connection
        $this->conn= new mysqli($this->host, $this->user, $this->pass, $this->database);

        if($this->conn->connect_errno){
            die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
        }
    }

    public function closedb(){
        //closes a connection to the db
        $this->conn->close();
    }

    public function execute($sql) {
        //execute sql commands
        return $this->conn->query($sql);
    }

    public function num_lines(){
        return $this->conn->affected_rows;
    }


}


?>