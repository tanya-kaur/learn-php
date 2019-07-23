<?php
$email = $_POST['email'];
$password = $_POST['password'];
$dbh = new PDO('mysql:host=localhost;dbname=gokart', 'root', '');

$stmt = $dbh->prepare("SELECT name FROM users WHERE email=? AND passwd=?");

$stmt->execute([$email, $password]);

if(empty($stmt->fetchAll())){
    echo 'Invalid email or password';
}else{
    echo 'login successful';
    session_start();
    $_SESSION['email'] = $email;
}