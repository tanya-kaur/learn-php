<?php
$students = [
    "totalEnrolled" => 200,
    "details" => [
        [
            "id" => 1,
            "name" => "Lalit",
            "phone" => [
                "work" => "468464646546",
                "home" => "46546+46+4+6",
            ],
        ],

        [
            "id" => 2,
            "name" => "Lalita",
            "phone" => [
                "work" => "4684646465464",
                "home" => "46546+46+4+6",
            ],
        ],
    ],
];

echo json_encode($students);

//JSON = JavaScript Object Notation XML, JSON 