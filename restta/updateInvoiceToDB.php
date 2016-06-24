<?php
    require_once("databaseManager");
    
    global $con;
    $con = connectToDBIfNotConnectedYet();


    $motiu = strip_tags($_POST['motiu']);
    $cost = strip_tags($_POST['cost']);
    $date = strip_tags($_POST['date']);

    // Usar los parametros de la base de datos
    $stmt = $con->prepare("INSERT INTO projects(motiu, cost, date) VALUES(:field1, :field2, :field3)");
    $stmt->execute(array(':field1' => $motiu, ':field2' => $cost, ':field3' => $date));

    $affected_rows = $stmt->rowCount();
?>