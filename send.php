<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 13/05/23 -->
<!-- задание 1 -->
Число 1  - <?php echo $_GET['num1'];?> <br>
Число 2  - <?php echo $_GET['num2'];?><br>
Число 3  - <?php echo $_GET['num3'];?> <br>
Сумма  - <?php echo $_GET['num1'] + $_GET['num2'] + $_GET['num3'];?> <br>

<!-- задание 2 -->
<br>

Ваш пароль  - <?php echo $_GET['pass'];?> <br>

<?php 
if ($_GET['pass'] == '12345') :
    echo  'правильный';
else :
    echo  'неправильный';
endif;
?>

<br>
<!-- задание 4 -->
<br>
Ваш отзыв  - <?php echo $_GET['text'];?> <br>


<br>
<!-- задание 5 -->
<br>
Ваш отзыв  - <?php echo $_GET['text'];?> <br>

<?php 
setcookie("test", "12345"); 
?>




</body>
</html>