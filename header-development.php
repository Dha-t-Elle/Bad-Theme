<?php

/* Главная страница - Хедер */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
    $locale = get_locale();
  
  if ($locale == 'en_US') {
  
  
  ?>
    <title>IT WORLDS - DIGITAL AGENCY | Website development, applications and SEO</title>
<?
  }
  
  else{
?>
   <title>IT WORLDS - DIGITAL AGENCY | Создание сайтов, приложений и сео продвижение</title>
  <?
  }
    ?>
    <meta name="yandex-verification" content="cb3b2fb9996e5296" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<?php
    $locale = get_locale();
	
	if ($locale == 'en_US') {
	
	
	?>
	 <meta name="description" content="IT WORLDS - DIGTAL AGENCY | We have collected the best professionals, our branches are located in Russia, the USA and England"/>
    <meta name="keywords" content="seo promotion, seo website promotion, order seo promotion, seo promotion new york, order seo website promotion, seo price promotion, internet marketing, social media promotion, seo, seo promotion, seo website, seo website promotion, message sending, correction reviews, cheat likes, cheat subscribers, instagram promotion, cheat instagrams, cheat followers, trends, lead to top, SEO, application development, mobile application development, application creation, order application development, application development settings for android, iOS, developing android applications, developing applications for iPhone, developing a site, ordering a landing page, ordering a site, ordering a landing page, ordering a turnkey website, creating a website, creating websites, turnkey website, creating a website price, creating a website from scratch , creation of an online store, Create a one-page website, turnkey website development, the cost of creating a website, creating a business card website, developing web sites, order creating a website."/>
<?
	}
	
	else{
?>
	
	 <meta name="description" content="IT WORLDS - DIGTAL AGENCY | У нас собраны лучшие профессионалы, наши филиалы расположены в России, США и Англии!"/>
    <meta name="keywords" content="сео продвижение, сео продвижение сайта, заказать сео продвижение, сео продвижение москва, заказать сео продвижение сайта, сео продвижение цена, интернет-маркетинг, продвижение в социальных сетях, seo, seo продвижение , seo сайта, seo продвижение сайтов, рассылка сообщений, исправление отзывов, накрутка лайков, накрутка подписчиков, инстаграм продвижение, накрутка инстаграм, накрутить подписчиков, тренды, вывод в топ, сео, разработка приложений, разработка мобильных приложений, создание приложений, заказать разработку приложения, разработка приложений для android, iOS, разработка андроид приложений, разработка приложений на айфон,разработка сайта, заказать лендинг, заказать сайт, заказать лендинг, заказать сайт под ключ, создание сайта, создание сайтов, сайт под ключ, создание сайта цена, создание сайта с нуля, создание интернет-магазина, Создать одностраничный сайт, разработка сайта под ключ, стоимость создания сайта,  создание сайта визитки, разработка веб сайтов, заказать создание сайта.
"/>
	<?
	}
    ?>
     <meta name="description" content="<?php
    global $post;
$my_descr = get_post_meta($post->ID, "_aioseop_description", true);
if ($my_descr){
echo  $my_descr;
}
else echo  "";
?>"/>
    <meta name="keywords" content="<?php
    global $post;
$my_descr = get_post_meta($post->ID, "_aioseop_keywords", true);
if ($my_descr){
echo  $my_descr;
}
else echo  "";
?>"/>
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <title><?php wp_title('|'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet/development.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
<body class="page_development">
<?php

if (get_locale() == 'ru_RU') {
?>
    <style>
   @font-face {
    font-family: Magistral; /* Имя шрифта */
    src: url(<?php echo get_template_directory_uri(); ?>/fonts/ofont.ru_Magistral.ttf); /* Путь к файлу со шрифтом */
   }
   body {
    font-family: Magistral !important;
   }
   .order_btn.smaller {
	display: inline-block;
	font-size: 22px;
	width: 320px;
	text-transform: uppercase;
}
.order_btn:not(.similar) {
	margin-top: 0;
}
.title-text p {
    margin-bottom: 25px;
}
.img_center {
    position: relative;
}
.img_center {
    display: block;
    width: 100%;
    text-align: center;
    margin: 0 auto;
}
  </style>
  
  
  <?php

if (get_locale() == 'ru_RU') {
?>
    <style>
   @font-face {
    font-family: Magistral; /* Имя шрифта */
    src: url(<?php echo get_template_directory_uri(); ?>/fonts/ofont.ru_Magistral.ttf); /* Путь к файлу со шрифтом */
   }
   body {
    font-family: Magistral !important;
   }
  .order_btn:not(.similar) {
	margin-top: 0;
}
.navbar-expand-md .navbar-nav {
  margin-right: 7px !important;
}

  </style>
<?php
}else{
?>


<?

}

?>



<?php
}

?>
<style>
.navbar-collapse .ml-auto.order-0 {
    margin-left: 0px !important;
    padding: 0 !important;
}
section .order_btn {
    margin: 0;
    margin-top: 0px;
}
.order_btn:not(.similar) {
    font-size: 14px !important;
}
header {
    background: #000000cf;
}
.navbar-expand-md .navbar-nav {
  margin-right: 7px !important;
}
@media (max-width: 500px){
.ml-auto.order-0 {
    text-align: center !important;
}

.img_center img {
  width: 100% !important;
    height: 62%;
    margin: 20px 0;
    float: right;
}
}
a.order_btn.smaller{
 font-size: 19px !important;
}
</style>
	<section id="ut-hero" >
        <div class="fullscreen-bg">
            <div class="overlay">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas" width="100%" height="100%"></canvas>
                </div>
                <header>
        <nav class="navbar  navbar-expand-md navbar-dark bg-dark  ">
            <div class="navbar-collapse w-100 order-0 order-md-0">
				<?php
				
				/* Языковое меню */
				pll_the_languages();
				
				?>
            </div>
             <div class="navbar-collapse w-100 order-3">
				<?php
				
				/* Блок контактов */
				echo get_contacts_block();
				
				?>
            </div>
            <div class="ml-auto order-0">
                <ul class="navbar-nav socil-net">
                    <li class="nav-item social">
                         <a href="https://www.instagram.com/itworldscom/"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg"></a>
                    </li>
                    <li class="nav-item social">
                        <a href="https://www.facebook.com/itworldscom/"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg"></a>
                    </li>
                    <li class="nav-item social">
                        <a href="https://vk.com/public140036605"><img src="<?php echo get_template_directory_uri(); ?>/images/vk.svg"></a>
                    </li>
                </ul>
            </div>
           
        </nav>
</header>
