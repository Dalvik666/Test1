

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Тестовое задание</title>

</head>

<body>
<center><div id="div1">
<?php
echo '<h3>'."Подсчет чисел в диапазоне".'</h3>';
echo "Все числа - ";
for($i = 10;$i <= 53;$i++){

echo $i.' ';

}
echo '<br />';
echo "Простые - ";
for($i = 10; $i <=53; $i++){
	if ($i%2==1)
    if ($i%3 >=1)
		if ($i%5 >=1)
			if ($i%7 >=1)
     echo $i." ";
}
echo '<hr />';
?>

<?php
echo '<h3>'."Функция возведения в степень".'</h3>';
function func($m, $st){
	$sum2 = 1;
	for($i = 0; $i < $st; $i++){
	$sum2 = $sum2*$m;
	}
	return $sum2;
}
echo "Число в степени = ".func(3,3);
echo '<hr />';
?>



<?php
echo '<h3>'."Создание двумерного массива".'</h3>';
$arr = array(array('a' => 14, 'b' =>17,'c' => 21), array('a' => 15,'b' => 18,'c' => 22), array('a' => 11,'b' => 17,'c' => 20));
    foreach($arr as $base_key => $base_value){
		foreach($base_value as $key => $value){
			echo $value, ' ';
			
		}
		echo '<br />';
		
	}
echo '<hr />';
?>

<?php
echo '<h3>'."Посчитать площадь трапеции".'</h3>';

for($i = 0; $i <count($arr); $i++){
	
	$s1 = 0.5*$arr[$i]['c']*($arr[$i]['a']+$arr[$i]['b']);
		$arr[$i]['s'] = $s1;	
		echo "Площадь".$i." - ой трапеции = ".$arr[$i]['s'].'<br />';
}
echo '<hr />';
?>

<?php
echo '<h3>'."Минимальное число в массиве".'</h3>';
function minimum(){
//$arrmin()
}
	

echo '<hr />';
?>

<?php
echo '<h3>'."Формула".'</h3>';
function functf($a, $b, $c){
$ac = $a/$c;	
$f=($a*pow($b, $c)+pow((pow($ac, $b)%3), minimum($a, $b, $c)));
return $f;
}
echo functf(11, 17, 20);

echo '<hr />';
?>


<?php

echo '<h3>'."Трапеции с нечетной площадью".'</h3>';

for ($i = 0; $i < count($arr); $i++){
	if ($arr[$i]['s'] % 2 == 1) echo $arr[$i]['s'].', ';
}

echo '<hr />';
?>
<h3>Таблица</h3>
<table border="3px solid silver" width="100%" height="140px">
<tr>
<th>a</th>
<th>b</th>
<th>c</th>
<th>s</th>
<th>f</th>
</tr>
<tr><td>14</td><td>17</td><td>21</td><td>325.5</td><td>9.6728</td></tr>
<tr><td>15</td><td>18</td><td>22</td><td>363</td><td>6.1956</td></tr>
<tr><td>11</td><td>17</td><td>20</td><td>280</td><td>4.4706</td></tr>

</table>

</div></center>
</body>

</html>