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
mysqli_query($link, "SET NAMES 'utf8'");?>


<form action="" method="POST">
  <input name="login">
  <input name="password" type="password">
  <input type="submit">
</form>

<?php



// $query = 'SELECT * FROM users WHERE age=27 OR salary=1000';
// $query = 'SELECT * FROM users WHERE age=27 OR salary!=400';
// $query = 'SELECT * FROM users WHERE (age>=23 AND age<27) OR salary=1000';
// $query = 'SELECT * FROM users WHERE (age>=23 AND age<27) OR (salary>=400 AND salary<=1000)';
// $query = 'SELECT name,age,salary FROM users';
// $query = 'SELECT name FROM users WHERE salary>500 AND age<25 AND age>21 AND salary !=600 AND age!=24';
// $query = 'INSERT INTO users (name,age,salary) VALUES ("Человек",26,300)';
// $query = 'INSERT INTO users (name) VALUES ("Кукутики")';
// $query = 'UPDATE users SET age=35 WHERE id=4';
// $query = 'UPDATE users SET salary=700 WHERE salary=500';
// $query = 'UPDATE users SET age=23 WHERE id>2 AND id<=5';
// $query = 'DELETE FROM users WHERE id=1';
// $query = 'DELETE FROM users WHERE age=23';
// $query = 'DELETE FROM users WHERE 1';
// $query = 'SELECT * FROM users ORDER BY salary';
// $query = 'SELECT * FROM users ORDER BY salary DESC';
// $query = 'SELECT * FROM users ORDER BY name';

// $query = 'SELECT * FROM users LIMIT 4';
// $query = 'SELECT * FROM users LIMIT 2,3';
// $query = 'SELECT * FROM users ORDER BY salary LIMIT 3';
// $query = 'SELECT * FROM users ORDER BY salary DESC LIMIT 3';

// $query = 'SELECT COUNT(*) as count FROM users WHERE salary=300';
// $query = 'SELECT COUNT(*) as count FROM users WHERE salary=300 OR age=23';

// $query = 'SELECT * FROM users WHERE name NOT BETWEEN 15 AND 99';
// $query = 'SELECT * FROM users WHERE name IN ("Алексей","Иван")';
// $query = 'SELECT * FROM users WHERE name LIKE "Б%я"';
// $query = 'SELECT MAX(salary) FROM users WHERE age>30';
// $query = 'SELECT MIN(age) FROM users WHERE salary>50000';
// $query = 'SELECT AVG(salary) FROM users WHERE name LIKE "%Б"';
// $query = 'SELECT SUM(salary) FROM users WHERE age BETWEEN 25 AND 35';

// create database school(
//     create table students(
//         email_address VARCHAR(50) 
//     );
//     create table teachers();
// );

// $query = "CREATE TABLE `students` (
// ALTER TABLE students ADD COLUMN email_address VARCHAR(50)
// )";




// $query = "SELECT * FROM dishes";
// $result = mysqli_query($link, $query) or die(mysqli_error($link));
// for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


// if (isset( $_GET['del'])) {
//     $del = $_GET['del'];
//     $query = "DELETE FROM dishes WHERE id=$del";
// mysqli_query($link, $query) or die(mysqli_error($link));
// }

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//   $name = $_POST['name'];
//   $age = $_POST['age'];
//   $salary = $_POST['salary'];

//   $query = "UPDATE dishes SET
//     name='$name', age='$age', salary='$salary'
//   WHERE id=$id";
//   mysqli_query($link, $query) or die(mysqli_error($link));
//   echo 'юзер успешно изменен!';
// }
// ?>

<!-- <h2>Меню</h2>

<?php foreach ($data as $elem){ ?>
<div>


<h2><?= $elem['name'] ?></h2>
<p>
<?= $elem['age'] ?>,
<b><?= $elem['salary'] ?></b>
<a href="/papka/delete.php?del=<?=$elem['id']?>">Удалить</a>
<a href="/papka/show.php?id=<?=$elem['id']?>">Посмотреть</a>
<a href="/papka/new.php?id=<?=$elem['id']?>">Добавить</a>
<a href="/papka/edit.php?id=<?=$elem['id']?>">Редактировать</a>

</p>

</div> -->




<!-- <table>
<tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>salary</th>
    <th>delete</th>
    <th><a href="/papka/new.php?id=<?=$elem['id']?>">Добавить</a></th>
</tr>
<tr>
    <td><?= $elem['id'] ?></td>
    <td><?= $elem['name'] ?></td>
    <td><?= $elem['age'] ?></td>
    <td><?= $elem['salary'] ?></td>
    <td><a href="/papka/index.php?del=<?=$elem['id']?>">delete</td>
</tr>
</table> -->

<!-- <tr><a href="/papka/new.php?id=<?=$elem['id']?>">Добавить</a></tr> -->

<!-- <ul>
    <li><?= $elem['name'] ?></li>
</ul> -->

<!-- <?php }  -->


    

// $res = mysqli_query($link, $query) or die (mysqli_error($link));
// $row = mysqli_fetch_all($res);

// echo '<pre>';
// print_r($row);
// echo '<pre>';


// echo $row[0][1];
// echo '<pre>';
// echo $row[1][1];
// echo $row[1][2];
// echo '<pre>';
// echo $row[1][1];
// echo $row[1][2];
// echo $row[1][3];
// echo '<pre>';





// for ($i=0; $i< count($row); $i++){
//     for ($j=0; $j< count($row[$i]); $j++){
//         echo $row[$j][1];
//     }
// }


?>










</body>
</html>