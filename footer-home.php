<?php

/* Главная страница - футер */

?>
<section class="title movLeft wow fadeInLeft movLeft-delay animated">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
				<?php
				
				if (get_locale() == 'ru_RU') {
					
				?>
                <div class="carousel-item active">
                    <h1>IT WORLDS - <span>DIGITAL AGENCY</span></h1>
                </div>
                <div class="carousel-item">
                    <h1>ТВОРИМ УНИКАЛЬНЫЙ <span>ДИЗАЙН</span></h1>
                </div>
                <div class="carousel-item">
                    <h1>СОЗДАНИЕ <span>САЙТОВ</span></h1>
                </div>
                <div class="carousel-item">
                    <h2>SEO <span>ПРОДВИЖЕНИЕ</span></h2>
                </div>
                <div class="carousel-item">
                    <h2><span>ИНЕТРНЕТ-<span>МАРКЕТИНГ</span></h2>
                </div>
                <div class="carousel-item">
                    <h2>РАЗРАБОТКА <span>ПРИЛОЖЕНИЙ</span></h2>
                </div>
				<?php
				
				}
				else {
					
				?>
                <div class="carousel-item active">
                    <h1>IT TECHNOLOGIES <span>FOR YOU</span></h1>
                </div>
                <div class="carousel-item">
                    <h1>WE CREATE A UNIQUE  <span>DESIGN</span></h1>
                </div>
                <div class="carousel-item">
                    <h1>WE CREATE  <span>WEBSITES</span></h1>
                </div>
                <div class="carousel-item">
                    <h2>WE DEVELOP <span>APPLICATIONS</span></h2>
                </div>
                <div class="carousel-item">
                    <h2>WE WILL INTRODUCE   <span>THE IT WORLD</span></h2>
                </div>
                <div class="carousel-item">
                    <h2>WE ARE   <span>IT WORLDS - DIGITAL AGENCY</span></h2>
                </div>
				<?php
				
				}
				
				?>
            </div>
        </div>
        <div class="services   movIn animated zoomIn">
			<?php
			
			/* Меню футера */
			echo get_footer_menu();
			
			?>
        </div>
    </div>
</section>
<footer class="navbar-fixed-bottom">
    <!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <p style="text-align: center;"><?php the_field('copyright' ,'option');?>
                <br><?php the_field('developer','option');?></p>
        </div>
    </div>
</footer>
<!--/Footer-->
</div>
<video playsinline autoplay muted loop poster="https://it-worlds.com/assets/video/Words.jpg"  class="fullscreen-bg__video" > 
               <source src="https://it-worlds.com/assets/Words.webm" type="video/webm">
                <source src="https://it-worlds.com/assets/Words.mp4" type="video/mp4">
               <source src="https://it-worlds.com/assets/Words.ogv" type="video/ogg">
               
               
               Тег video не поддерживается вашим браузером. 
            </video>
</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.carousel').carousel({
        interval: 4000
    });
</script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $('.lazy').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 10000,
        });
    });
</script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/animate-css.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/anim.js"></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
	   ym(56232154, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/56232154" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152549937-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-152549937-1');
	</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149681823-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-149681823-1');
    </script>
    <script src="//code.jivosite.com/widget.js" data-jv-id="65jgSwYoyd" async></script>
</body>
</html>
