<?php
session_start();
if(!isset($_SESSION['email'])){
    exit('You are tresspassing'); //die()
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
<a href="logout.php">Logout</a>
    Dashboard
</body>
</html>