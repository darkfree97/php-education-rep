<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ForTeen</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
</head>
<body>
<div id="logo"><img src="img_cite/logo.png"></div>
<div id="wrapper">
    <div class="user-icon"></div>
    <div class="pass-icon"></div>

    <form name="login-form" class="login-form" action="index.html" method="post">

        <div class="header">
            <h1>Авторизація</h1>
            <span>Введіть ваші реєстраційні данні для входу у ваш акаунт. </span>
        </div>

        <div class="content">
            <input name="username" type="text" class="input username" value="Логін" onfocus="this.value=''" />
            <input name="password" type="password" class="input password" value="Пароль" onfocus="this.value=''" />
        </div>

        <div class="footer">
            <input type="submit" name="submit" value="УВІЙТИ" class="button" />
            <input type="submit" name="submit" value="Реєстрація" class="register" />
        </div>

    </form>
</div>
<div class="gradient"></div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".username").focus(function() {
            $(".user-icon").css("left","-48px");
        });
        $(".username").blur(function() {
            $(".user-icon").css("left","0px");
        });

        $(".password").focus(function() {
            $(".pass-icon").css("left","-48px");
        });
        $(".password").blur(function() {
            $(".pass-icon").css("left","0px");
        });
    });
</script>
<?php

?>
</body>
</html>