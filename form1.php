<?php

$registration_form=[
"<thead>"=> ["FULL NAME", "MOTHER'S NAME","FATHER'S NAME", "email","number"],
"<tbody>"=>[
    [
    "FULLNAME"=>"abc",
    "MOTHER'S NAME"=> "sita",
    "FATHER'S NAME"=> "kishan",
    "email"=> "abs@gmail.com",
    "number"=> "5346762336"
],
[
    "FULLNAME"=>"def",
    "MOTHER'S NAME"=> "rita",
    "FATHER'S NAME"=> "raju",
    "email"=> "def@gmail.com",
    "number"=> "5547666786" 
],
[
    "FULLNAME"=>"ghi",
    "MOTHER'S NAME"=> "anita",
    "FATHER'S NAME"=> "gopal",
    "email"=> "ghi@gmail.com",
    "number"=> "51113445586" 
],
],
];
echo json_encode($registration_form);
print_r($_GET);