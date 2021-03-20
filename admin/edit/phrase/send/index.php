<?php 


$link=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");

  $phrase = $_POST['phrase'];
  // $date = date('m/d/Y h:i:s a', time());
  mysqli_query($link, "UPDATE phrase SET `text1`='".$phrase."'");
  print_r('<h1>'.$phrase.'</h1>');
?>