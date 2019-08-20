<!-- The purpose of this page is to read validated lend requests and -->
<!-- submit the equipment to the larger pool of available equipment -->

<?php
    $host = 'localhost:3306';
    $db = 'equipmentPool';

    $dsn = "mysql:host=$hostname;dbname=$db";

    try {
        // PHP Data Objects (PDO's) require a dsn, username, and password
        $db = new PDO($dsn, "mydb", "");
        echo 'Connected to database!';
    }

    catch(PDOException $ex) {
        // Shouts the error message if there is one connecting to the database
        $error = $ex->message;
        echo 'Connection failure: $error';
    }
?>