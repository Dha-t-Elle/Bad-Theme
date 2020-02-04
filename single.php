<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package healthcenter
 */


get_header('blog');
?>
<style>
	textarea,input {
		color: black;
	}
@media (max-width: 768px){
.wp-post-image {
    width: 100%;
    height: auto;
}
}
</style>
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
    justify-content: flex-end;
	position: absolute;
	right: 0
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
    position: absolute;
    bottom: -10%;
    left: 49%;
}
.wpulike.wpulike-animated-heart {
	display: none}
.content-post-thumbnail {
    width: 100%;
}
#comment {
    height: 150px;
    width: 100%;
}
.content-post-thumbnail img {
    width: 100%;
    height: 100%;
    max-width: 100%;
    max-height: 400px;
    object-fit: contain;
}


.soc-list {
    position: relative;
}

header.entry-header {
    line-height: normal;
}

h1.entry-title {
    margin-bottom: 0;
}
	h3#reply-title {
    margin-left: 285px;
    width: max-content;
}

h3.comment-reply-title {
    margin-top: -25px;
}

.heateor_sc_social_comments {
    padding-left: 0 !important;
    padding-top: 5% !important;
}
	h3#reply-title {
    position: absolute;
    right: 0;
    top: -5%;
}

div#respond {
    position: relative;
}

h3.comment-reply-title {
    position: absolute;
    top: 16%;
}

.heateor_sc_social_comments {
    position: relative;
}
</style>
		<div id="primary" class="container content-area">
			<main id="main" class="site-main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="blog-post">
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<div class="dez-separator"></div>
						<div class="entry-meta">
							

						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->
					<div class="content-post-thumbnail mb-3">
					<?php the_post_thumbnail(); ?>

					</div>
					<div class="container">
		<div class="row">
		<div class="entry-content">
						<?php the_content(); comments_template(‘’, true);?>
						<div class="soc-list">
							<?php echo do_shortcode ('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
			</div>
					</div><!-- .entry-content -->
		</div>
		</div>
					
				

				</article>
				

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer('blog');
