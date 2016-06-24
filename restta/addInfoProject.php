<?php
    
    require_once("databaseManager");
    
    global $con;
    $con = connectToDBIfNotConnectedYet();

    $data_inicial = strip_tags($_POST['initialDate']);
    $data_final = strip_tags($_POST['finalDate']);
    $pressupost = strip_tags($_POST['pressupost']);

    // Usar los parametros de la base de datos
    $stmt = $con->prepare("INSERT INTO projects(initialDate, finalDate, pressupost) VALUES(:field1, :field2, :field3)");
    $stmt->execute(array(':field1' => $data_inicial, ':field2' => $data_final, ':field3' => $pressupost));

    $affected_rows = $stmt->rowCount();

?>