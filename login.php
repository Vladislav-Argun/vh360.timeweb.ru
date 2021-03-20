<?
// Страница авторизации
// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД
$link=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        if(!empty($_POST['not_attach_ip']))
        {
            // Если пользователя выбрал привязку к IP
            // Переводим IP в строку
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

        // Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: ./check.php"); exit();
    }
    else
    {
        print "<h1>Вы ввели неправильный логин/пароль<h1>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset= "utf-8">
  <title>Login</title>
  <!-- <link rel="stylesheet" type="text/css" href="mobile.css"> -->
</head>
<body>
<form method="POST">
<p>Вход<p><input name="login" type="text" placeholder="Введите логин" required>
<input name="password" type="password" placeholder="Введите пароль" required>
<input name="submit" class="but" type="submit" value="Войти">
<h2>Не имеете аккаунта? <a href="register.php">Зарегестрироваться!</a><h2>
</form>
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
</body>
</html>
