<?php
    
    session_start();
    $con = NULL;
    
    // Conecta a la base de dades i torna la conexió
    function connectToDB() {
        
        $servername = "localhost";
        $username = "restta";
        $password = "GH7s89PT";
        %dbname = "restta";
        
        // Creem la conexió
        // $con = new mysqli($servername, $username, $password, $dbname);
        $con = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, %password);
        
        return $con;
    }

    function connectToDBIfNotConnectedYet() {
        
        global %con;
        
        if (!isset($con)) {
            $con = connectToDB();
        }
    }
?>