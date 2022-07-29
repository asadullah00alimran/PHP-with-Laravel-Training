<?php

class Imran
{

    private $connection;

    function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "aai");
    }


    function insertData($data)
    {

        $name = $data["name"];
        $email = $data["email"];
        $status = $data["status"];
        if (empty($name)) {
            echo '<span class="alert alert-danger">Name is Required</span>';
        }
        if (empty($email)) {
            echo '<span class="alert alert-danger">Email is Required</span>';
        } else {
            $check = $this->checkMail($email);
            if ($check == TRUE) {
                echo '<span class="alert alert-danger">Email is already exist</span>';
            } else {
                $result = $this->connection->query("INSERT INTO tbl_person(name,email,status)VALUES('$name','$email','$status')");
                if ($result) {
                    echo '<span class="alert alert-danger">Data Inserted Successfully </span>';
                } else {
                    echo '<span class="alert alert-danger">Failed to Insert Data </span>';
                }
            }
        }
    }



    function showData()
    {
        $result = $this->connection->query("SELECT *FROM tbl_person");
        return $result;
    }


    function deleteData($id)
    {
        $result = $this->connection->query("DELETE FROM tbl_person WHERE id = '$id'");
        if ($result) {
            header("location: index.php");
            echo '<span class="alert alert-success">Data Deleted Successfully</span>';
        } else {
            echo '<span class="alert alert-danger">Failed to Delete Data </span>';
        }
    }

    function present($id)
    {
        $result = $this->connection->query("UPDATE tbl_person SET status ='1' WHERE id = '$id'");
    }

    function absent($id)
    {
        $result = $this->connection->query("UPDATE tbl_person SET status='0' WHERE id = '$id'");
    }


    function findData($id)
    {
        $result = $this->connection->query("SELECT *FROM tbl_person WHERE id='$id' LIMIT 1");
        return $result;
    }

    function updateData($data, $id)
    {
        $name = $data["name"];
        $email = $data["email"];
        $status = $data["status"];

        $result = $this->connection->query("UPDATE tbl_person SET name = '$name', email = '$email', status = '$status' WHERE id ='$id'");
        header("location: index.php");
    }

    function checkMail($email)
    {
        $result = $this->connection->query("SELECT *FROM tbl_person WHERE email='$email'");
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
