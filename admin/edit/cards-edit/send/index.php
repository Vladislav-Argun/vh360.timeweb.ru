<?php 
// mysql_close();

$db=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");
  $id = $_POST['id'];
  // $date = date('m/d/Y h:i:s a', time());
  // mysqli_query($link, "SELECT * FROM body");
  print_r("<h1>".$text. " ".$link. "</h1>");
for($i = 0; $i < 5; $i++){
  $img = $_POST['img'];
  $img_text = $_POST['img_text'];
  $img_text2 = $_POST['img_text2'];
  mysqli_query($db, "UPDATE body SET img='".$img."', `img_text`='".$img_text."', `img_text2`='".$img_text2."' WHERE id=".$id);
};
  print_r("<h1>".$text[0]. " ".$link[0]. "</h1>");
  // mysqli_query($link, "UPDATE  SET ='".$."', link='".$link."' WHERE id = ". $id ."'");
  // header("Location: /"); exit();
?>
<!DOCTYPE html>
<html>
<head>
  <title>HELLO <?  print_r($img. " ". $img_text." ".$img_text2); ?></title>
</head>
<body>
  <h1><?  print_r("<h1>".$img. " ". $img_text." ".$img_text2. "</h1>"); ?></h1>
</body>
</html>