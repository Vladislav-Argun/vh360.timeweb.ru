<?
// Скрипт проверки

// Соединямся с БД
$link=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");

    $query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);
	setcookie('isLoggedIn', 'true');
	setcookie('id', $userdata['user_id']);
	// setcookie('name', $userdata['user_login']);
	// setcookie('email', $userdata['user_email']);
 //    setcookie('admin', $userdata['user_root']);
 //    setcookie('data', $userdata['user_data']);
    print_r("<!DOCTYPE html>
<html>
<head>
	<meta charset= \"utf-8\">
	<title>Registration</title>
</head>
<body style='text-align: -webkit-center;'>
<style>
.loading:after {
    content: '.';
    animation: loading 1s ease alternate infinite;
}

@keyframes loading {
    60%  { text-shadow: 0.35em 0 0 currentColor; }
    100% { text-shadow: 0.35em 0 0 currentColor, 0.75em 0 0 currentColor; }
}


/* Reset & demo styles */

body {
    background: linear-gradient(to right, #ff9966, #ff5e62);
    font: 125px Unlock, Arial, sans-serif;
    text-align: center;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 90%;
    height: 100%;
    margin-block-start: -8px;
    min-height: 100vh;
}

</style>
<div class='loading'>Вход</div>
</body>
<script type='text/javascript'>
	setTimeout(function(){
		window.location.replace('http://localhost/');
	}, 4000);
</script>
</html>");
?>
