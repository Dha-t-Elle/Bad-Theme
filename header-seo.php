<?php

/* Главная страница - Хедер */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta name="yandex-verification" content="cb3b2fb9996e5296" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet/seo.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
	<style>
html, body {
    background: transparent url(/new/wp-content/themes/twentytwenty/img/services-technologies-banner1.jpg) repeat-y center;
    background-blend-mode: darken;
    background-color: rgba(0,0,0,0.75);
    padding: 0 0 60px 0;
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
	overflow: hidden;
}
</style>
<body class="page_seo">
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
        <nav class="navbar navbar-expand-md navbar-dark bg-dark  ">
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
