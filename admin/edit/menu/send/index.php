<?php 
// mysql_close();

$db=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");
// $id = $_POST['id'];
  // $date = date('m/d/Y h:i:s a', time());
  // mysqli_query($link, "SELECT * FROM body");
for($i = 0; $i < 5; $i++){
  $text = $_POST['text'.$i];
  $link = $_POST['link'.$i];
  mysqli_query($db, "UPDATE menu SET link='".$link."', `text`='".$text."' WHERE id=".$i);
};
  print_r("<script type=\"text/javascript\">
	window.location.replace('/');
</script>");
  exit();
?>