<?php
/*Template Name: 404 */

get_header('development');

?>
<div class="container text-center" style="margin-top: 12%;">
<?php while( have_posts() ) : the_post();
                        $more = 1; // отображаем полностью всё содержимое поста
                        the_content(); // выводим контент
                    endwhile; ?>
</div>
<?php get_footer('development') ?>