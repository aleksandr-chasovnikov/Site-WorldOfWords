<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<title>Главная</title>
<link rel="stylesheet" href="/template/css/screen.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div class="wrapper">
      <header class="header"><!-- HEADER ============= -->

        <div class="header__logo logo">
          <a href="/">
            <img src="/template/images/home/logo.jpg" alt="logo">
          </a>
        </div>
        
        <nav class="header__nav nav">
          <a href="/cart" class="nav__link active">Закладки</a>
        <?php if (User::isGuest()): ?>
          <a href="/user/login/" class="nav__link"><i class="fa fa-"></i> Вход</a>
          <a href="/user/register/" class="nav__link"><i class="fa fa-"></i> Регистрация</a>
        <?php else: ?>
          <a href="/cabinet/" class="nav__link"><i class="fa fa-user"></i> Аккаунт</a>
          <a href="/user/logout/" class="nav__link"><i class="fa fa-unlock"></i> Выход</a>
        <?php endif; ?>
      </nav>

    </header><!-- HEADER END ============ --> 