<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="./style.css">

</head>
<body>

<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$BD = 'rainbow alfabet';

$link = mysqli_connect($host, $user, $pass, $BD);
mysqli_query($link, "SET NAMES 'utf8'");
?>

<form class='forma' action="" method="POST">
  <input name="login">
  <input name="password" type="password">
  <input type="submit">
</form>







<?php

if (!empty($_POST['password']) && !empty($_POST['login'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        $query = "SELECT * FROM avto WHERE username='$login' AND password='$password'";
        $res = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($res);
        
        if (!empty($user)) { ?>
            <style>
                .forma {
                    display: none;
                }
            </style>
            
            <?php
            session_start();
            $_SESSION['auth'] = true;

          echo 'Вы успешно вошли'; // прошел авторизацию
          $addr = 'page1.php';
        header("Location: $addr");  
        } else {
            echo 'Вы НЕуспешно вошли';// неверно ввел логин или пароль
        }
      }
    

      ?>




