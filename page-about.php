<?php

/*Template Name: Страница О нас*/
get_header('about');

global $post;

/* Контент */
echo apply_filters('the_content', $post->post_content);

get_footer('about');

?>