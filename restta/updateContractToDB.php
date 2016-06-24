<?php
    require_once("databaseManager");
    
    global $con;
    $con = connectToDBIfNotConnectedYet();


    $name = strip_tags($_POST['name']);
    $first_surname = strip_tags($_POST['firstSurname']);
    $second_surname = strip_tags($_POST['secondSurname']);
    $salari = strip_tags($_POST['salari']);
    $position = strip_tags($_POST['position']);
    $initial_date = strip_tags($_POST['initialDate']);
    $final_date = strip_tags($_POST['finalDate']);

    // Usar los parametros de la base de datos
    $stmt = $con->prepare("INSERT INTO projects(name, firstSurname, secondSurname, salari, position, initialDate, finalDate) VALUES(:field1, :field2, :field3, :field4, :field5, :field6, :field7)");
    $stmt->execute(array(':field1' => $name, ':field2' => $first_surname, ':field3' => $second_surname, ':field4' => $salari, ':field5' => $position, ':field6' => $initial_date, ':field7' => $final_date));

    $affected_rows = $stmt->rowCount();
?>