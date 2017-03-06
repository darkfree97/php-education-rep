<!DOCTYPE HTML>
<html lang="ukr">
<head>
    <meta charset="utf-8">
    <title>Прийняте замовлення</title>
    <link href="Lab1.css" rel="stylesheet">
</head>
<body>
<?php

$s_name = $_GET["surname"];
$name = $_GET["name"];
$f_name = $_GET["f_name"];
$born = $_GET["birth_day"];
$sex = $_GET["sex"];
$mail = $_GET["m_mail"];
$phone = $_GET["phone_num"];
$country = $_GET["country"];


echo <<<END
<h2>Користувач</h2>
<table border='1' cellpadding='10'cellspacing='0'>
    <tr>
        <td>Прізвище</td><td>$s_name</td>
    </tr>
    <tr>
        <td>Ім'я</td><td>$name</td>
    </tr>
    <tr>
        <td>По-Батькові</td><td>$f_name</td>
    </tr>
    <tr>
        <td>Дата народження</td><td>$born</td>
    </tr>
    <tr>
        <td>Стать</td><td>$sex</td>
    </tr>
    <tr>
        <td>Електронна пошта</td><td>$mail</td>
    </tr>
    <tr>
        <td>Номер телефону</td><td>$phone</td>
    </tr>
    <tr>
        <td>Країна</td><td>$country</td>
    </tr>    
</table>
<br><div style = "color : red">Вітаємо всі дані записано у файл!</div>
<br><a href="Lab1.html">Назад</a>
END;
$str = <<<END
Прізвище         - $s_name
Ім'я             - $name
По-Батькові      - $f_name
Дата натродження - $born
Стать            - $sex
Електронна пошта - $mail
Номер телефону   - $phone
Країна           - $country
END;

$file = fopen("file.txt", "w") or die("Can't open file!");
fwrite($file, $str) or die("Can't write text on file!");
fclose($file);
?>
</body>