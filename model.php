<?php
include "connection.php";

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error); 
}

function getUser(){
    global $conn;
    $sql = "SELECT * FROM kolase";
    return $conn->query($sql);
}

function getUserById($id){
    global $conn;
    $sql = "SELECT * FROM kolase WHERE id=$id";
    return $conn->query($sql);
}
?>