<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ANourishedLife
 */

get_header(); ?>

<div class="py-5">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="container">
                <div class="row">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
					<!--<img class="img-fluid d-block mb-4" style=" height: 250px; object-fit: cover;" width="100%" src="<?php the_post_thumbnail_url( ); ?> ">-->
					
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						?>
						<div class="container">
							<div class="row">
						<?php
						the_post_navigation();
						?>
						 </div>
                        </div>
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div><!-- #primary -->

                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

	

<?php

get_footer();
