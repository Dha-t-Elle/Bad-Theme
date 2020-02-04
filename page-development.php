<?php

/*Template Name: Страница Development*/
get_header('development');

global $post;

echo apply_filters('the_content', $post->post_content);

get_footer('development');

?>