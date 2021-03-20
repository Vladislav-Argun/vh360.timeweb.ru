<?
// Страница разавторизации

// Удаляем куки
setcookie('name', "");
setcookie('isLoggedIn', "false");
setcookie('email', "");
setcookie('id', "");

// Переадресовываем браузер на страницу проверки нашего скрипта
header("Location: /"); exit();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<title>Logout</title>
</head>
<body>
<form method="POST">
<p>Вход<p><input name="login" type="text" required>
<input name="password" type="password" required>
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

</style>
</body>
</html>