<?php
    require_once("databaseManager.php");

    global $con;
    $con = connectToDBIfNotConnectedYet();
    $id = $_GET['id'];

    $sql = "DELETE FROM projects WHERE id = '$id'";
    $stmt = $con->prepare($sql);
    $stmt->prepare();
?>