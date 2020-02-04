<?php

/*Template Name: Блог */

get_header('blog');

/* Посты блога */
$args = array(
	'numberposts' => -1,
	'posts_per_page' => 1,
	'paged' => $paged

);
$posts = get_posts($args);

?>
<section class="title container">
	<h1 class="w-75 wow fadeInLeft movLeft"> <?php

if (get_locale() == 'ru_RU') {
echo "<span style='color: #00deff !important;'>IT WORLDS |</span> БЛОГ";
}else{
echo "<span style='color: #00deff !important;'>IT WORLDS |</span> BLOG";
}
?></h1>
	<style>
		.wp-pagenavi .current {
			display: none
		}
		.post_block {
			max-width: 48%;
		}
.norm_row.sfsi_wDiv {
    display: flex;
    flex-direction: row;
    position: absolute;
    justify-content: flex-end;
    bottom: 0;
    right: 1%;
}

img.sfcm.sfsi_wicon {
    width: 25px;
    height: 25px;
}

.sficn {
    width: 100%;
}

.sfsi_wicons.shuffeldiv {
    width: 25px !important;
    height: 25px !important;
}
.wp-pagenavi {
    text-align: center;
}
.pagination-list {
    width: 100%;
}
		@media (max-width: 768px) {
			.post_info {
    display: flex;
    flex-direction: column;
}

a.post_image {
    width: 100%;
    max-width: 100%;
    min-width: 100%;
    background-size: cover;
    margin-right: 0;
}

.post_data {
    margin-top: 5%;
	padding: 5%
}
		}		
		@media (max-width: 548px) {
		.col-md-6.post_block {
    max-width: 55%;
    margin: 0 auto;
}

.posts {
    width: 100%;
}
		}
	</style>
</section>
<section class="blog wow fadeInLeft movLeft" style="animation-delay: 1.5s; animation-name: fadeInLeft;" data-wow-delay="1.5s">
	<div class="container">
		<div class="row">
			<div class="posts">
			<?php
			
			/* Вывод постов */
			if ($posts) {
				foreach ($posts as $po) {
					
					echo '<div class="col-md-6 post_block">';
					
					/* Картинка */
					$img = get_the_post_thumbnail_url($po);
					
					/* Информация */
					echo '<div class="post_info" style="width: 100% !important;">';
					echo '<a href="'.get_permalink($po->ID).'" class="post_image" style="background-image: url('.$img.');      width: 30%;
    height: 30vh;
    display: block;
    margin-bottom: -10px;"></a>';
					
					echo '<div class="post_data">';
					echo '<a href="'.get_permalink($po->ID).'" title="'.$po->post_title.'" style="font-size:25px;">'.$po->post_title.'</a>';
					echo '<a class="post-date" style="margin-top:-15px;">'.get_the_date('j F Y').'</a>';
					
					echo '<a title="'.$po->post_content.'">'.$po->post_content.'</a>';
					echo do_shortcode ('[DISPLAY_ULTIMATE_SOCIAL_ICONS]');
					echo '</div>';echo '</div>';
					
					/* Соц. */
					
					echo '<div class="view">';
						echo getPostViews(get_the_ID());
						echo  setPostViews(get_the_ID());'</div>';
					echo '</div>';
					echo '</div>';
					
				}
			}
				
				?>
				</div>
			<div class="pagination-list"> 
				<?php wp_pagenavi(); ?>

</div>
		</div>
	</div>
</section>

<?php

get_footer('blog');

?>
