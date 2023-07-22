<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$BD = 'rainbow alfabet';

$link = mysqli_connect($host, $user, $pass, $BD);
mysqli_query($link, "SET NAMES 'utf8'");

?>


<form action="" method="POST">
  <input name="name">
  <input name="age">
  <input name="salary">
  <input type="submit">
</form>

<?php
  if (!empty($_POST)) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $query = "INSERT INTO users SET name='$name', age='$age',salary='$salary'";
    mysqli_query($link, $query) or die(mysqli_error($link));
  }
?>

