<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employee";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_errno){
        die("Connection Failed" .$conn->connect_errno);
    }
?>