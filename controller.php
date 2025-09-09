<?php
include "model.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $users = getUserById($id); 
} else {
    $users = getUsers();
}
?>
