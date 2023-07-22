<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$BD = 'rainbow alfabet';

$link = mysqli_connect($host, $user, $pass, $BD);
mysqli_query($link, "SET NAMES 'utf8'");

  $del = $_GET['del'];
  $query = "DELETE FROM users WHERE id=$del";
  mysqli_query($link, $query) or die(mysqli_error($link));
?>
