<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$BD = 'rainbow alfabet';

$link = mysqli_connect($host, $user, $pass, $BD);
mysqli_query($link, "SET NAMES 'utf8'");

?>

<?php
  $id = $_GET['id'];
  $name = $_POST['name'];
  $age = $_POST['age'];
  $salary = $_POST['salary'];

  $query = "UPDATE users SET
    name='$name', age='$age', salary='$salary'
  WHERE id=$id";
  mysqli_query($link, $query) or die(mysqli_error($link));
  echo 'юзер успешно изменен!';
?>

