<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$dbh = new PDO('mysql:host=localhost;dbname=gokart', 'root', '');

$stmt = $dbh->prepare("INSERT INTO users(name, email, passwd) VALUES(?, ?, ?)");

//sql injection  

if($stmt->execute([$name, $email, $password]) == 1){
    echo 'Registered successfully.';
}else{
    echo 'REgistration failed. Please try again.';
}

//close
$stmt = null;
$dbh = null;

