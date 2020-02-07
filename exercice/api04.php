<?php
// header de la reponse, avec la propriete
header('Content-Type:application/json;  charset=utf-8');

// $tableau = [];

    $colors = [
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
            "hex" => "#8e44ad"
        ]

    ];

    $color03 = [
        "color" => "green",
        "category" => "hue",
        "type" => "secondary",
        "code" => [
          "rgba" => [0,255,0,1],
          "hex" => "#0F0"
        ]
    ];



$color =  [$colors, $color01, $color03];
$content = [
    "colors" => $color
];



$json = json_encode($content);

echo($json);

?>