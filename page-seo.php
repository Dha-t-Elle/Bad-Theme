<?php

/*Template Name:Страница SEO*/
get_header('seo');

global $post;
echo $post->post_content;

get_footer('seo');