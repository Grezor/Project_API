<?php
// header de la reponse, avec la propriete
header('Content-Type:application/json;  charset=utf-8');

$color1 = [
    "name" => "red",
    "hexa" => "#F00000"
];

$color2 = [
    "name" => "yellow",
    "hexa" => "#f1c40f"
];

$content =  [$color1, $color2];

$json = json_encode($content);

echo($json);

?>