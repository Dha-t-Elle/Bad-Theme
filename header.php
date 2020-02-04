<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta name="yandex-verification" content="cb3b2fb9996e5296" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We are an international IT company.Website development.Application development.SEO analytics. Internet marketing.Website promotion.Advertising, order a website"/>
    <meta name="keywords" content="promotion, digital marketing, SEO, turnkey website development, promotion of projects, website price, website cost, website creation prices, website creation cost, online store cost, how much the website costs, website development price, website support price, optimization cost, promotion price, promotion price, cost store development, cost of design, price of logo,"/>
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    
    <title><?php echo wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<?php
	
	if (is_home()) {
		echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/stylesheet/main.css">';
	}
	else {
		echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/stylesheet/portfolio.css">';
	}
	
	?>
	
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149681823-1"></script>
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
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152549937-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-152549937-1');
	</script>	
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-149681823-1');
    </script>
    <script src="//code.jivosite.com/widget.js" data-jv-id="65jgSwYoyd" async></script>
	<style>
	body { overflow-x: hidden !important; }
	</style>
	
</head>
<body>
	<section id="ut-hero" >
        <div class="fullscreen-bg">
            <div class="overlay">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas" width="100%" height="100%"></canvas>
                </div>
                <header>
        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark movIn">
            <div class="navbar-collapse w-100 order-0 order-md-0">
                <ul class="navbar-nav mr-auto lang">
                    <li class="nav-item active logo">
                        <a class="nav-link" href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/new-logo.png" alt="" class="logo"></a>
                    </li>
					<?php pll_the_languages();?>
                    <li class="nav-item engl langu">
                        <a class="nav-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/800px-flag_of_englandsvg-crop-u642.jpg" alt=""> ENG</a>
                    </li>
                    <li class="nav-item langu">
                        <a class="nav-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/flag_of_russia.jpg" alt=""> RUS</a>
                    </li>
                 
                </ul>
				<div class="ml-auto order-0">
					<a href="<?php echo home_url(); ?>/order" class="order_btn">Order Now</a>
				</div>
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
            <div class="navbar-collapse w-100 order-3">
                <ul class="navbar-nav ml-auto city">
                    <li class="nav-item">
                         <a class="nav-link" href="callto:+19292245002">New York<br>+1 (929) 224-50-02</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="callto:+442038079616">London<br>+44 (203) 807-96-16</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="callto:+74993468089">Moscow<br>+7 (499) 346-80-89</a>
                    </li>
                </ul>
            </div>
        </nav>
</header>
