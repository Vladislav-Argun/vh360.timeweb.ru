<?php
  $link=mysqli_connect("localhost", "mysql", "mysql", "db");
  $query = mysqli_query($link, "SELECT * FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
  $userdata = mysqli_fetch_assoc($query);
  $status = $userdata['user_root'];
if ($status < 1){
  print_r("<script type=\"text/javascript\">
  window.location.replace('../login.php');
</script>");
} else {
  $name = $userdata['user_login'];
  $email = $userdata['user_email'];
  $id = $userdata['user_id'];
  $data = $userdata['user_data'];
};
?>
<html><head>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
</head>

<body>

  <ul id="slide-out" class="side-nav fixed z-depth-2" style="transform: translateX(0%);">
    <li class="center no-padding">
      <div class="indigo darken-2 white-text" style="height: 140px;">
        <div class="row">
          <i style="margin-top: 5%; width: 100px; height: 100px; color: #ffff !important; user-select: none;" class="indigo-text text-lighten-1 large material-icons">person</i>
        </div>
      </div>
    </li>
    <ul class="collapsible" data-collapsible="accordion">
      <li id="dash_users" class="">
        <div id="dash_users_header" class="collapsible-header waves-effect"><b>Мой аккаунт</b></div>
        <div id="dash_users_body" class="collapsible-body" style="display: none;">
          <ul>
            <li id="users_seller">
              
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="../profile.php"><? print_r($name); ?></a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="../profile.php">Информация</a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="../logout.php">Выйти</a>
            </li>
          </ul>
        </div>
      </li>
      <li id="dash_users" class="">
        <div id="dash_users_header" class="collapsible-header waves-effect"><b>Изменение данных</b></div>
        <div id="dash_users_body" class="collapsible-body" style="display: none;">
          <ul>
            <li id="users_seller">
              
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="./edit/cards-edit">Карточки</a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="./edit/cards-add">Изменить карточки</a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="./edit/menu">Меню</a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="./edit/phrase">Фраза</a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="./edit/footer">Подвал</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_products" class="">
        
        <div id="dash_products_body" class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
        </div>
      </li>

      <li id="dash_categories" class="">
        <div id="dash_categories_header" class="collapsible-header waves-effect"><b>Категории</b></div>
        <div id="dash_categories_body" class="collapsible-body" style="display: none;">
          <ul>
            <li id="categories_category">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Редактирование блоков</a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="#!">База данных</a>
            </li>
            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Главная</a>
            </li>
            <li id="categories_sub_category">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Сайт</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </ul>

  <header>
    

    

    <nav>
      <div class="nav-wrapper indigo darken-2">
        <a style="margin-left: 20px;" class="breadcrumb" href="">Панель управления</a>
        <a class="breadcrumb" href="">Администратор</a>

        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
      </div>
    </nav>
  </header>

  <main>
    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Пользователи</b>
            </div>
          </div>

          <div class="row">
            <a href="../profile.php">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">person</i>
                <span class="indigo-text text-lighten-1"><h5>Я</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">people</i>
                <span class="indigo-text text-lighten-1"><h5>Помошники</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Панель</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">store</i>
                <span class="indigo-text text-lighten-1"><h5>На сайт</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                <span class="indigo-text text-lighten-1"><h5>Данные</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s6">
        
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Категория управления</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                <span class="indigo-text text-lighten-1"><h5>Категория</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                <span class="truncate indigo-text text-lighten-1"><h5>База</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    
  </main>
<!-- 
  <footer class="indigo page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">Админ панель</h5>
          <ul id="credits">
            
            
          </ul>
        </div>
      </div>
    </div>
    
  </footer> -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

  <script type="text/javascript">
  	$(document).ready(function() {
  		$('.button-collapse').sideNav();
		$('.collapsible').collapsible();
		$('select').material_select();
  	});
  </script>


<div class="hiddendiv common"></div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
<style type="text/css">
    header,
  main,
  footer {
    padding-left: 240px;
  }

  body {
    backgroud: white;
  }
  body, *, html {
    -webkit-touch-callout: none;
    -webkit-user-select: none;  
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  @media only screen and (max-width: 992px) {
    header,
    main,
    footer {
      padding-left: 0;
    }
  }

  #credits li,
  #credits li a {
    color: white;
  }

  #credits li a {
    font-weight: bold;
  }

  .footer-copyright .container,
  .footer-copyright .container a {
    color: #BCC2E2;
  }
  footer.page-footer {
    padding-bottom: 5px;
  }

  .fab-tip {
    position: fixed;
    right: 85px;
    padding: 0px 0.5rem;
    text-align: right;
    background-color: #323232;
    border-radius: 2px;
    color: #FFF;
    width: auto;
  }
  </style>
</body></html>
