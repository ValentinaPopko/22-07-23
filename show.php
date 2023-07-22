<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">


</head>
<body>
    
<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$BD = 'rainbow alfabet';

$link = mysqli_connect($host, $user, $pass, $BD);
mysqli_query($link, "SET NAMES 'utf8'");

  $id = $_GET['id'];
  $query = "SELECT * FROM users WHERE id=$id";
  $res = mysqli_query($link, $query) or die(mysqli_error($link));
  $user = mysqli_fetch_assoc($res);
?>

<!-- <div>
  <h1><?= $user['name'] ?></h1>
  <p>
    age: <span class="age"><?= $user['age'] ?></span>,
    salary: <span class="salary"><?= $user['salary'] ?></span>
  </p>
</div> -->

<div class='menu'>
    <p class='profil'>Профиль пользователя</p>
</div>

<div class='user'>
    <p> <span class="nameTitle">Имя:</span> <span class="name"><?= $user['name'] ?></span> </p>
    <p> <span class="nameTitle">Возраст:</span> <span class="age"><?= $user['age'] ?></span> </p>
    <p> <span class="nameTitle">Зарплата:</span> <span class="salary"><?= $user['salary'] ?></span></p>
</div>




</body>
</html>



