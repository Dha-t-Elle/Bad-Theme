<?php

/*Template Name:Портфолио*/
get_header('portfolio');

?>
<style>
.tlp-portfolio .layout1 .tlp-portfolio-thum {
    background: #ccc;
    overflow: hidden;
    position: relative;
    width: 100%;
    height: 300px;
}
</style>

<section class="title container">
<h1 class="w-75 wow fadeInLeft movLeft" style="visibility: visible; animation-name: fadeInLeft;"><span>IT WORLDS | </span><?php

if (get_locale() == 'ru_RU') {
echo "ПОРТФОЛИО";
}else{
echo "PORTFOLIO";
}
?></h1>

<div class="title-text w-75 ">
<div class="col-md-7 col-md-offset-1 text-list"></div>
</div>

<div class="col-lg-7 bg-title photo wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;"></div>
</section><section class="portfolio container" >
<div class="container">
<div class="row">
<?php  echo do_shortcode( '[tlpportfolio id="342" title=""]' );?>
<div class="col-12">



<div style="clear: both; display: block;">
<a href="<?=get_locale()=="ru_RU" ? '/ru/':'' ?>/order" title="Оформить заявку" class="order_btn smaller" style="display: inline-block !important; padding: 15px 30px !important;"><?=get_locale()=="ru_RU" ? 'Оформить заявку':'Order now' ?></a>
</div>
</div>
</div>
<div class="title-text w-75 ">
<p class="movLeft wow fadeInLeft movLeft-delay animated" style="margin: 50px 0px; visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight; opacity: 1;" data-wow-delay="0.5s"></p>
</div>
</div>
</section>

 
<section class=" container">
<h1 class="w-75 wow fadeInLeft movLeft" style="visibility: visible; animation-name: fadeInLeft;"><span>IT WORLDS | </span><?php

if (get_locale() == 'ru_RU') {
echo "НАШИ НАГРАДЫ";
}else{
echo "OUR REWARD";
}
?></h1>

<div class="title-text w-75 ">
<div class="col-md-7 col-md-offset-1 text-list"></div>
</div>

<div class="col-lg-7 bg-title photo wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;"></div>
</section><section class="portfolio container" >
<div class="container">
<div class="row">
<?php  echo do_shortcode( '[tlpportfolio id="400" title=""]' );?>
<div class="col-12">



<div style="clear: both; display: block;">
<a href="<?=get_locale()=="ru_RU" ? '/ru/':'' ?>/order" title="Оформить заявку" class="order_btn smaller" style="display: inline-block !important; padding: 15px 30px !important;"><?=get_locale()=="ru_RU" ? 'Оформить заявку':'Order now' ?></a>
</div>
</div>
</div>
<div class="title-text w-75 ">
<p class="movLeft wow fadeInLeft movLeft-delay animated" style="margin: 50px 0px; visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight; opacity: 1;" data-wow-delay="0.5s"></p>
</div>
</div>
</section>
 <?php
 
get_footer('portfolio');
