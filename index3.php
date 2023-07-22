<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<!-- задание 2 27/05/23 -->
<!-- <?php 
echo $_COOKIE["test"]; 
?> -->

<!-- задача 3 27/05/23 -->
<!-- <?php


if (!isset($_COOKIE['time_visit'])) {
    setcookie('time_visit', time());
} else {
    $timeLast = time() - $_COOKIE['time_visit'];
    echo 'С последнего захода на сайт прошло ' . $timeLast . ' секунд';
}
setcookie('time_visit', time(), time()+60*60*24*365, '/');
?>  -->

<!-- задача 4 27/05/23 -->
<?php
setcookie("test", "12345", time() + 60 * 60 * 24 *30); 
?> 

<!-- задача 5 27/05/23 -->
<?php
setcookie("test", "12345", time() + 60 * 60 * 24 * 365); 
?> 

<!-- задача 6 27/05/23 -->
<?php
setcookie("test", "12345", time() + 60 * 60 * 24 * 3650); 
?> 



    <?php
    $surname = "Karpenko ";
    $name = "Артем ";
    $secondname = "Алексеевич ";
    $bann = 5;
    $lim = 10;
    $together = $bann + $lim;
    $apples = "p";
    $fruit = "apples";

    
    echo  "<h1>Ваше имя</h1> ", $surname, $name, $secondname, "<br>", 'Количество фруктов ', $together, "<br>", 'Число яблок - ', $$fruit, "<br>";

    ?>

<!-- задача1 -->
<?php
$a=50;
if ($a > 10) : 
    $b = $a + 100;
    echo $b; 
else :
   $c=$a-30;
echo $c;
endif;          
?>

<!-- задача 2 -->
<?php
$a=525;
if ($a % 2 == 0) : 
    $a = $a / 2;
    echo $a; 
else :
   $a=$a*3;
echo $a;
endif;          
?>

<!-- задача 3 -->
<?php
$a=50;
if ($a >= 50) : 
    $a = $a ** 2;
    echo $a; 
elseif ($a > 10 && $a < 30) :
   $a=0;
echo $a;
else :
    $a= 'Ошибка';
 echo $a;
endif;          
?>

<!-- задача 4 -->
<?php
$a=2;
$b=3;

if ($a > $b) : 
    echo $a; 
else:
    echo $b;
endif;          
?>

<!-- задача 5 -->
<?php
$a=20;
$b=120;

if ($a-$b==100) : 
    echo 'Да'; 
elseif ($b-$a==100) :
    echo 'Да';
else:
    echo 'Нет';
endif;          
?>

<!-- задача 6 -->
<?php
$a=320;
$b=300;

if ($a-$b==20) : 
    echo 'Да'; 
elseif ($b-$a==20) :
    echo 'Да';
else:
    echo 'Нет';
endif;            
?>

<!-- задача 7 -->
<?php
$month = 2; 
switch($month) 
{  case 1 : echo "Январь"; break; 
   case 2 : echo "Февраль"; break; 
   case 3 : echo "Март"; break; 
   case 4 : echo "Апрель"; break; 
   case 5 : echo "Май"; break; 
   case 6 : echo "Июнь"; break; 
   case 7 : echo "Июль"; break; 
   case 8 : echo "Август"; break; 
   case 9 : echo "Сентябрь"; break; 
   case 10 : echo "Октябрь"; break; 
   case 11 : echo "Ноябрь"; break; 
   case 12 : echo "Декабрь"; break; 
   default : echo "Ошибка"; break; 
   } 

echo "<br>";
       
?>

<!-- дз -->

<!-- зад 1 -->
<?php 
$isAdmin == true;
if ($isAdmin == true):
echo "<button> Войти в панель управления </button>";
else :
echo "<span> y вас нет прав доступа </span> ";
endif;
echo "<br>";

?> 

<!-- зад2 -->
<?php 
$lang = "ru"; 
switch($lang) 
{   case "en" : echo "too lazy to come up with a text"; break;
    case "ru" : echo "лень придумывать текст"; break;
    case "de" : echo "faulheit, einen Text zu erfinden" ; break; 
    default : echo "Ошибка"; break; 
}
echo "<br>";
?>

<!-- 06/05 -->

<!-- задание 1 -->
<?php 
echo "Задание 1 06/05/23", "<br>";
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum = $sum + $i;
}
echo $sum;
echo "<br>";
?>

<!-- задание 2 -->
<?php 
echo "Задание 2 06/05/23", "<br>";
for ($i = 0; $i <= 100; $i += 2) {
    echo $i . "<br>";
}
echo "<br>";
?>

<!-- задание 3 -->
<?php 
echo "Задание 3 06/05/23", "<br>";
for ($i = 1; $i <= 100; $i++) {
    echo $i . "<br>";
}
echo "<br>";
?>

<!-- задание 4 -->
<?php 
echo "Задание 4 06/05/23", "<br>";
$sum = 0;
for ($i = 0; $i <= 100; $i += 7) {
    $sum = $sum + $i;
}
echo $sum;
echo "<br>";
?>


<!-- задание 5 -->
<?php 
echo "Задание 5 06/05/23", "<br>";
$sum = 0;
for ($i = 0; $i <= 15; $i++) {
    $sum += $i * $i;
}
echo $sum;
echo "<br>";
?>

<!-- задание 6 -->
<?php 
echo "Задание 6 06/05/23", "<br>";
$sum = 0;
for ($i = 0; $i <= 15; $i++) {
    $sum += sqrt($i);
}
echo round ($sum, 2);
echo "<br>";
?>

<!-- 13/05/23 -->
<br>
<!-- задание1 -->
<form action='send.php' method='get'>
Число 1  - <input type='number' name='num1'><br>
Число 2  - <input type='number' name='num2'><br>
Число 3  - <input type='number' name='num3'><br>
    <input type='submit'>
</form>    
<br>
<!-- задание2 -->
<form action='send.php' method='get'>
    Пароль: <input type='password' name='pass'><br>
    <input type='submit'>
</form>    
<br>
<!-- задание 4 -->
<form action='send.php' method='get'>
    Оставьте отзыв: <textarea name='text'></textarea>
    <input type='submit'>
</form>

<!-- задание 5 -->
<form action='send.php' method='get'>
    Имя - <input type='text' name='namezad5'><br>
    <input type='submit'>
</form>
<br>


<!-- 20/05/23 -->
<!-- задание 1 -->
<?php 
$a = [1, 2, 3];
$result = 0;
$result1 = $a[0]**2;
$result2 = $a[1]**2;
$result3 = $a[2]**2;
$sum = 0;
$sum = $result1+$result2+$result3;
echo 'Answer ' . $sum  . '<br/>';
?>
<br>

<!-- задание 2 -->
<?php 
$a = [0, 1, 2, 3, 12];
$sum = 0;
foreach ($a as $elem) {
    if ($elem > 0 and $elem < 10) {
        $sum += $elem; 
    } 
} 
echo 'Answer ' . $sum  . '<br/>';
?>
<br>

<!-- задание3 -->
<?php 
$a = [
    [2, 1, 4, 3, 5],
    [3, 5, 2, 4, 1],
    [4, 3, 1, 5, 2],
    [4, 3, 1, 5, 2],
];
for ($i=0; $i < count($a); $i++) { 
    sort($a[$i]);
    print_r($a[$i]);
}
?>
<br>
<br>

<!-- задание 2-->
<?php 
$a = [
    [2, 1, 4, 3, 5],
    [3, 5, 2, 4, 1],
    [4, 3, 1, 5, 2],
    [4, 3, 1, 5, 2],
];
for ($i=0; $i < count($a); $i++) { 
    sort($a[$i]);
    print_r($a[$i]);
}
?>
<br> 
<br> 

<!-- 27/05/23 -->

<!-- задание ДЗ -->
<?php 
$arr = [];
    
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $arr[$i][$j] = $j + 1; 
        }
    }
    echo '<pre>';
    print_r($arr) ; 
?>

<!-- задание 1 -->
<?php
	function func($num) {
		echo $num ** 3;
	}
	func(5);
?>
<br> 


<?php
    // $name = "Tom";
    // $age = 36;
    // setcookie("name", $name);
    // setcookie("age", $age, time() + 3600); 
    // echo "Куки установлены";
?>


</body>
</html>