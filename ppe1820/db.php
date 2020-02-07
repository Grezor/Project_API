<?php
try {

    $mysqli = new mysqli("localhost", "root", "", "choptaphoto");
    // $statement = $mysqli->prepare("SELECT id, name, description FROM product");

// si il y a une erreur 
} catch (mysqli_sql_exception $e) {
    echo "MySQLi Error Code: " . $e->getCode() . "<br />";
    echo "Exception Msg: " . $e->getMessage();
    exit();
}

$mysqli->close();