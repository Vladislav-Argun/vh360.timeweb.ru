<?
// Страница регистрации нового пользователя

// Соединямся с БД
$link=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");

if(isset($_POST['submit']))
{
    $err = [];

    // проверям логин
    if(!preg_match("/[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+/", $_POST['e-mail'])){
        $err[] = "Введите существующую почту в формате email@example.com";
    };
    if(!preg_match("/^[a-zA-Z0-9_-]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    };

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    };

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    };
    $query2 = mysqli_query($link, "SELECT user_id FROM users WHERE user_email='".mysqli_real_escape_string($link, $_POST['e-mail'])."'");
    if(mysqli_num_rows($query2) > 0)
    {
        $err[] = "E-mail использует кто-то другой";
    };

    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {

        $login = $_POST['login'];
        $email = $_POST['e-mail'];
        $date = date('m/d/Y h:i:s a', time());
        // Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));
        mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."', user_email='".$email."', user_data='".$date."'");
        // mysql_query($link, "INSERT INTO users SET user_data='".$date."'")
        header("Location: login.php"); exit();
    }
    else
    {
        foreach($err AS $error)
        {
            print "<h1>".$error."!</h1>";
        }
    }
};
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset= "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Регистрация</title>
  <link rel="stylesheet" type="text/css" href="mobile.css">
</head>
<body>
<form method="POST">
<p>Регистрация<p><input name="e-mail" type="e-mail" placeholder="Введите E-mail" required>
<input name="login" type="text" placeholder="Введите логин" required>
<input name="password" type="password" placeholder="Введите пароль" required>
<input class="but"name="submit" type="submit" value="Зарегистрироваться">
<h2>Имеете аккаунт? <a href="login.php">Войти!<a></h2>
<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

form {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.but {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.but:hover,.but:active,.but:focus {
  background: #43A047;
}
form {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
a {
  color: #4CAF50;
  text-decoration: none;
}
form .register-form {
  display: none;
}
form {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
form:before, form:after {
  content: "";
  display: block;
  clear: both;
}
form {
  margin: 50px auto;
  text-align: center;
}
h1 {
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: red;
  font-family: "Roboto", sans-serif;
  text-align: center;
}
form {
  color: #4d4d4d;
  font-size: 12px;
}
form a {
  color: #000000;
  text-decoration: none;
}
form .fa {
  color: #EF3B3A;
}
p {
  padding: 0;
  font-size: 20px;
  font-weight: bolder;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
@media screen and (max-width : 480px) {
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

body{
  width: 80%;
  justify-content: center;
}
form {
  width: 80%;
  padding: 8% 0 0;
  margin: auto;
  font-size: 100px;
  justify-content: center;
  align-items: center;
}
form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 80%;
  margin: 0 auto 80%;
  padding: 50px;
  /*padding-right: -15px;*/
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  /*margin: 0 0 15px;*/
  /*padding: 15px;*/
  box-sizing: border-box;
  font-size: 14px;
}
.but {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.but:hover,.but:active,.but:focus {
  background: #43A047;
}
form {
  /*margin: 15px 0 0;*/
  color: #b3b3b3;
  font-size: 12px;
}
a {
  color: #4CAF50;
  text-decoration: none;
}
form .register-form {
  display: none;
}
form {
  position: relative;
  z-index: 1;
  max-width: 80%;
  padding-left: 70px;
}
form:before, form:after {
  content: "";
  display: block;
  clear: both;
}
form {
  margin: 50px auto;
  text-align: center;
}
h1 {
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: red;
  font-family: "Roboto", sans-serif;
  text-align: center;
}
form {
  color: #4d4d4d;
  font-size: 12px;
}
form a {
  color: #000000;
  text-decoration: none;
}
form .fa {
  color: #EF3B3A;
}
p {
  padding: 0;
  font-size: 20px;
  font-weight: bolder;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
}
</style>
</form>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</body>
</html>
