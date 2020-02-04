<?php

/*Template Name:Страница APPS*/
get_header('apps');

global $post;
echo $post->post_content;

get_footer('apps');