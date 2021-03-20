<?php 


$link=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");

// $id = $_POST['id'];
  $img = $_POST['img'];
  $img_text = $_POST['img_text'];
  $img_text2 = $_POST['img_text2'];
  // $date = date('m/d/Y h:i:s a', time());
  // mysqli_query($link, "SELECT * FROM body");
  print_r("<h1>".$img. " ". $img_text." ".$img_text2. "</h1>");
  mysqli_query($link, "INSERT INTO body SET `img`='".$img."', `img_text`='".$img_text2."', `img_text2`='".$img_text2."'");
  // mysqli_query($link,"UPDATE img, img_text, img_text2 FROM body SET img='".$img."', img_text='".$img_text2."', img_text2='".$img_text2."' WHERE id='".$id."'");
  // mysqli_query($link, "UPDATE img_text SET img_text='".$img_text."', img_text2='".$img_text2."' WHERE id = ". $id ."'");
  header("Location: ./"); exit();
?>