
<!-- Backend page to establish connection to the SQL database -->
<!-- To do: setup privacy -->

<?php
    $host = 'localhost';
    $port = 3306;
    $dbname = 'equipmentpool';
    $username = 'root';
    $pass = '';

    $dsn = "mysql:hostname=$host;port=$port;dbname=$dbname";

    try {
        // PHP Data Objects (PDO's) require a dsn, username, and password
        $db = new PDO($dsn, $username, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Connected to database!';
    }

    catch(PDOException $ex) {
        // Shouts the error message if there is one connecting to the database
        $error = $ex->getMessage();
        echo "Error: " . $error . "<br>";
        die("...Connection terminated");
    }
?>