<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__form">
        <div class="logo">
            <img height="90" src="images/logo.png"/>
        </div>
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" placeholder="Нэвтрэх нэр"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" placeholder="Нууц үг"/>
        </div>
        <button type="button" class="login__submit" onclick="window.location.href='index.html'">НЭВТРЭХ</button>
        <p class="login__signup"><a>Нууц үг сэргээх</a></p>
      </div>
    </div>
  </div>
</div>
<script src="js/ligro.js"></script>
</body>
</html>