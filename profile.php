<?php
  $link=mysqli_connect("localhost", "cy96144_db", "Vladislaver200710", "cy96144_db");

  $query = mysqli_query($link, "SELECT * FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
  $userdata = mysqli_fetch_assoc($query);
  $name = $userdata['user_login'];
  $email = $userdata['user_email'];
  $id = $userdata['user_id'];
  $status = $userdata['user_root'];
  $data = $userdata['user_data']
?>
<html>  
 <head>  

 <script type="text/javascript">  
 function bookmarksite(title, url)  
 {  
 if ((typeof window.sidebar == "object") && (typeof window.sidebar.addPanel == "function")) window.sidebar.addPanel (title, url, "");  
 else if (typeof window.external == "object") window.external.AddFavorite(url, title);  
 else return false;  
 return div class="container"ue;  
 }  
 </script>  

 <meta http-equiv="content-type" content="text/html; charset=UTF-8">  
 <title><? echo $name ?> - информация о пользователе</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>

 <body>  
 <div id="contanier">  

 <table border="0" cellpadding="20" cellspacing="0" width="100%"><div class="container"><div valign="top" align="center">  
 <!-- <middle> -->  
 <table border="0" cellpadding="0" cellspacing="0" width="100%">  
 <div class="container">  
 <div valign="top" style="width:200px;">  
  </h1>  

 <div valign="top" style="padding:0px 15px 0px 15px;"><!-- <body> --><html>
 <link type="text/css" rel="StyleSheet" href="http://softcomp.my1.ru/_st/my.css" />  
 <head>  
 <style>  
 </style>  
 </head>  
 <body>  

 <table class="stats">  
 <tbody>   
  <div class="header-h1" style="text-align: center;"><h1>Информация о пользователе <? echo $name ?></h1></div>
  <div class="container">  
  <div class="what" align="left"><h1>E-mail: <?echo $email?></h1></div>  
  </div>

  <div class="container">  
  <div class="what" align="left"><h1>Дата регистрации: <? echo $data ?></h1></div>  
  </div>
  <div class="container">
  <div class="what" align="left"><h1>ID пользователя: <? echo $id ?></h1></div>
  </div>  
   
  <div class="container">
  <div class="what" align="left"><h1>Статус: <?
  	if($status !== "0" && $status !== "1" && $status !== "2"){
  		print_r('Администратор '. $status . '-ого уровня');
  	} elseif ($status == "1") {
      print_r('Главный Администратор');
    } elseif ($status == "2") {
      print_r('Зам. Главного Администратора');
    } else {
  		print_r('Обычный пользователь');
  	};
  ?></h1></div></div>
 </tbody>  
 </table>  
<style type="text/css">
@media screen and (max-width : 480px) {
.header-h1 h1 {
  font-size: 200%;
}
}
@media screen and (min-width: 800px){
.header-h1 h1 {
  font-size: 270%;
}
}
@media screen and (min-width: 800px){
.header-h1 h1 {
  font-size: 300%;
}
}
.container {
  padding: 10px 5px;
  text-align: center;
}
.container h1 {
  font-family: 'Righteous', cursive;
  position: relative;
  color: #303f9f !important;
  display: inline-block;
  border-top: 2px solid;
  border-bottom: 2px solid;
  font-size: 20px;
  padding: 11px 60px;
  margin: 0; 
  line-height: 1;
}
.container h1:before, .container h1:after {
  content: ""; 
  position: absolute;
  top: 0;
  width: 30px;
  height: 100%;
  border-left: 2px solid;
  border-right: 2px solid;
  background: repeating-linear-gradient(180deg, transparent, transparent 2px, #303f9f 2px, #303f9f 4px);
}
.container h1:before {left: 0;}
.container h1:after {right: 0;}
.header-h1 {
    text-align: center;
    margin-bottom: .5rem;
  }
  .header-h1 h1 {
    display: inline-block;
    position: relative;
    background: #303f9f !important;
    color: #ffff;
    margin-bottom: 0;
    padding: .5rem 3rem;
    text-transform: uppercase;
    /*font-size: 35px;*/
    bottom: 20px;
  }
  .header-h1 h1::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    border-left: 1.5rem solid #fff;
    border-top: 3rem solid transparent; 
    border-bottom: 3rem solid transparent;      
  }
  .header-h1 h1::after {
    content: "";
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    border-right: 1.5rem solid #fff;
    border-top: 3rem solid transparent; 
    border-bottom: 3rem solid transparent;      
  }
</style>
 </body>  
 </html>  
 </h1>
 </div>  
 </body>  

 </html>