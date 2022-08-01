<?php

class Database{

    public $db_connection;

    function __construct(){
        $this->db_connection = new mysqli("localhost","root","","loginsystem");
    }
}

?>