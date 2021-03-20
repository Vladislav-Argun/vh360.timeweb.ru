<?

if($_COOKIE['isLoggedIn'] !== 'true'){
	header("Location: login.php"); exit();
}
?>
<?
  $link=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");

  $query = mysqli_query($link, "SELECT * FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
  $userdata = mysqli_fetch_assoc($query);
  $name = $userdata['user_login'];
  $email = $userdata['user_email'];
  $id = $userdata['user_id'];
  $status = $userdata['user_root'];
  $data = $userdata['user_data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Roboto+Mono:400,500" rel="stylesheet">
</head>
<body>
	<?php

	$mysqli = new mysqli("localhost", "mysql", "mysql", "db");  // создаем подключение
	$mysqli->set_charset('utf8');

	$createTable ="CREATE TABLE IF NOT EXISTS menu
	(
	    id INT NOT NULL AUTO_INCREMENT,
	    `text` VARCHAR(200) NOT NULL,
	    link VARCHAR(200) NOT NULL,
		PRIMARY KEY (id)
	)";
	if ($mysqli->query($createTable)){
		echo $mysqlli->error;
	}
	$queryMenu = "SELECT `text`, link FROM menu";

	$resultMenu = $mysqli->query($queryMenu);
	// print_r($resultMenu);
		?>
	<div class="header">
		<h1 class="sitename"><a href="">Portfolio</a></h1>
		<ul>
			<?php
			while ($row = $resultMenu->fetch_assoc()): ?>
		
		<li><a href="<?php echo $row['link']; ?>"><?php echo $row['text']; ?></a></li>
	<? endwhile;
	if ($name){
		echo '<li><a href="profile.php">'.$name.'</a></li>';
		echo '<li><a href="./logout.php">Выйти</a></li>';
	};
?> 	
		</ul>
	</div>
	<h1 class="sitename_mobile"><a href="">Portfolio</a></h1>
	<div class="header_mobile">
		<input type="checkbox" id="hmt" class="hidden-menu-ticker">
		<label class="btn-menu" for="hmt">
		    <span class="first"></span>
		    <span class="second"></span>
		    <span class="third"></span>
		</label>
		<ul class="hidden-menu">
		    <?php
	$queryMenu = "SELECT `text`, link FROM menu";
	$resultMenu = $mysqli->query($queryMenu);
		while ($row = $resultMenu->fetch_assoc()): ?>
			<li><a href="<?php echo $row['link']; ?>"><?php echo $row['text']; ?></a></li>
		<? endwhile;
		if ($name){
			echo '<li><a href="./profile.php">'.$name.'</a></li>';
			echo '<li><a href="./logout.php">Выйти</a></li>';
	};
?> 	
		</ul>
	</div>
<? 
	$phrasemenu = "SELECT `text1` FROM `phrase`";
	$phrase = mysqli_query($link, $phrasemenu);
	$row2 = $phrase->fetch_assoc();
	?>
<h2 class="phrase"><? print_r($row2['text1']) ?></h2>

	<div class="main-block">
		<?php
		$queryBody = "SELECT img, img_text, img_text2 FROM body";
	$resultMenu = $mysqli->query($queryBody);
	while ($row = $resultMenu->fetch_assoc()): ?>
	 	<div class="card">
	 		<img src="<?php echo $row['img']?>" alt="">
	 		<h2><a href="./single.html"><?php echo $row['img_text']?></a></h2>
			<h3><?php echo $row['img_text2']?></h3>
		</div>
	<? endwhile; ?>	

	</div> 	
	<div class="button">
		<a href="#">Еще</a>		
	</div>
	<? 
	$phrasemenu = "SELECT `text1`, `text2` FROM `footer`";
	$phrase = mysqli_query($link, $phrasemenu);
	$row3 = $phrase->fetch_assoc();
	?>
<div class="footer">
		<p><? print_r($row3['text1']) ?></p>
		<p><? print_r($row3['text2']) ?></p>
	</div>
</body>
</html>
