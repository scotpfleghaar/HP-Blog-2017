<?php
/*
    Template Name: Recipes
*/

get_header(); ?>
<div class="py-5">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="container">
                <div class="row">
                <?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => -1,
      
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <div class="col-md-4 my-3">
            <img class="img-fluid d-block mb-4" style=" height: 125px; object-fit: cover;" width="100%" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'full' ); ?>">
            <h5><b> <?php the_title(); ?></b></h5>
            <p class="mt-1"><?php the_excerpt(); ?></p>
            <a href='<?php the_permalink(); ?>'><button style="font-size: 12px;" class="btn btn-secondary">Keep Reading ↠</button></a>
        </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>

                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
</div>
<?php get_footer(); ?>