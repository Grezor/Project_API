<?php
try {

    $mysqli = new mysqli("localhost", "root", "", "choptaphoto");
    // $statement = $mysqli->prepare("SELECT id, name, description FROM product");
    $result = $mysqli->query("SELECT id, name, description, price, quantity, ref, is_location, created_at FROM product");
    // je crée un tableau
    $dbdata = array();
    // boucle while
    while ($row = $result->fetch_assoc()) {
        $dbdata[] = $row;
    }
    echo json_encode($dbdata);
// si il y a une erreur 
} catch (mysqli_sql_exception $e) {
    echo "MySQLi Error Code: " . $e->getCode() . "<br />";
    echo "Exception Msg: " . $e->getMessage();
    exit();
}

$mysqli->close();
