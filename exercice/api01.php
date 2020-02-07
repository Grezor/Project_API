<?php
// header de la reponse, avec la propriete
header('Content-Type:application/json;  charset=utf-8');

$color = [
    "name" => "red",
    "hexa" => "#F00000"
];

$json = json_encode($color);

echo($json);

?>