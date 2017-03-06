<!DOCTYPE HTML>
<html lang="ukr">
<head>
    <meta charset="utf-8">
    <title>Прийняте замовлення</title>
</head>
<body>
<?php

$x1 = $_GET["X1"];
$x2 = $_GET["X2"];
$val = 7.34*$x1+11.50*$x2;
echo<<<END
<h2>Підсумок</h2>
<table border='1' cellpadding='10'cellspacing='0'>
<tr>
    <td>Кекс(7.34 грн)</td><td>$x1 шт.</td>
</tr>
<tr>
    <td>Кава(11.50 грн)</td><td>$x2 шт.</td>
</tr>
<tr>
    <td>Вартість</td><td>$val грн.</td>
</tr>
</table>
<br><a href="Les1.php">Назад</a>
END;
?>
</body>