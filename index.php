<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" href="jquery.peekABar-1.0.1/dist/css/jquery.peekabar.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-smp.css">
<style>
  .div1{
   <?php if(mt_rand(0,1)==1):?>
         background-image: url(../img/background2.png);
   <?php else:?>
         background-image: url(../img/background2.png);
   <?php endif ?>}
</style>
<script src="jquery.peekABar-1.0.1/dist/js/jquery.peekabar.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                auto: true,
            });
            $('#prof').fadeIn();
<?php if ($_GET['thanks']): ?>
        var bar = new $.peekABar({autohide: true});
        bar.show({
    html: 'Thanks'
});
<?php endif ?>
        // bar.hide();
        });

</script>
    <title>DAIKON</title>
</head>
<body class="bk">
<div class="div1">
<div class="center"><img class="logo2" src="img/logo2.png"></div>
  <div class="center"><img class="logo" src="img/logo.png"></div>

    <div class="menu_center">
    <ul class="menu">
     <li class="nav"><a href="#prof">PROFILE</a></li>
     <li class="nav"><a href="#work">WORKS</a></li>
     <li class="nav"><a href="#contact">CONTACT</a></li>
     <li class="nav"><a href="http://konnodaichi.com/wordpress" target="_blank">BLOG</a></li>
    </ul>
  </div>
</div>
<div class="div2" id="prof" //style="display:none">
  <div class="center"><img src="img/face.png" class="face"></div>
  <h1><a class="name"><div class="center>">KONNO DAICHI</div></a></h1>
  <div class="center"><a class="subtitle">GRAPHIC DESIGNER</a></div>
    <div class="hello"><a class="hello">Hi my name is Daichi.<br>
        I was born and raised in Japan.</a></div>
    <div class="snsBox">
    <ul class="snsMenu">
      <li class="button"><a href="https://www.facebook.com/diech.konno" target="_blank"><img src="img/fbButton.png"></a></li>
      <li class="button"><a href="https://www.instagram.com/diech88/" target="_blank"><img src="img/instglmButton.png"></a></li>
      <li class="button"><a href="https://twitter.com/Diech88" target="_blank"><img src="img/twtButton.png"></a></li>
      <li class="button"><a href="https://github.com/DaichKonno" target="_blank"><img src="img/ghButton.png"></a></li>
    </ul>
    </div>
</div>

<div class="center">
<div class="bxslider" id="work">
  <li><img src="img/laCatrina.png" /><figcaption><h3>La Catrina</h3><p>bisCard,postCard,shopCard </p></figcaption></li>
  <li><img src="img/laCatrinaPc.png" /><figcaption><h3>Post Card</h3><p>Invitation</p></figcaption></li>
  <li><img src="img/laCarrinaSc.png" /><figcaption><h3>Shop Card</h3><p></p></figcaption></li>
</div>
 <a class="portfolio" href="portfolio.html" target="_blank">Do you wanna see more?</a>
</div>

<div class="div4" id="contact">

<form action="coment.php" method="post">
    <dt class="table" >Your name</dt>
    <dd><input class="input1" type="text" name="name"></input></dd>
    <dt class="table">Your e-mail</dt>
    <dd><input class="input2" type="text" name="email"></input></dd>
    <dt class="table">Your message</dt>
    <dd><textarea class="input3" type="text" name="coments"></textarea></dd>
    <dd><input class="input" type="submit" value="send"></dd>
</form>
  </div>
</div>

<?php require_once("googleAnalytics.php") ?>
</body>
</html>
