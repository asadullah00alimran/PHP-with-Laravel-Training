<?php

    $connection = new mysqli("localhost","root","","aai");
    $id = $GET["uid"];
    $result = $this->connection->query("DELETE FROM tbl_person WHERE id = '$id'");
    return $result;

?>