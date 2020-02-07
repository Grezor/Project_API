<?php
// header de la reponse, avec la propriete
header('Content-Type:application/json;  charset=utf-8');

// $tableau = [];

    $colors= [
        "name" => "black",
        "category" => "hue",
        "type" => "primary",
        "code" => [
            "rgba" => [255,255,255,1],
            "hex" => "#000"
        ]

    ];

    $color01 = [
        "color" => "white",
        "category" => "hue",
        "type" => "primary",
        "code" => [
            "rgba" => [255,255,255,1],
            "hex" => "#000"
        ]

    ];

$content =  [$colors, $color01];

$json = json_encode($content);

echo($json);

?>