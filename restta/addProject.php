<?php
    require_once("databaseManager.php");

    global $con;    
    $con = connectToDBIfNotConnectedYet();

    $project_name = strip_tags($_POST['projectName']);

    // Insert into DB
    $stmt = $con->prepare("INSERT INTO projects(name) VALUES(:field1)");
    $stmt->execute(':field1' => $project_name);
    
?>
