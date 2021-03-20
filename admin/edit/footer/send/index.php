<?php 


$link=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");
  $text1 = $_POST['text1'];
  $text2 = $_POST['text2'];
  // $date = date('m/d/Y h:i:s a', time());
  print_r("<h1>".$footer. " ". $text1." ".$text2. "</h1>");
  mysqli_query($link, "UPDATE footer SET `text1`='".$text2."', `text2`='".$text2."'");
?>