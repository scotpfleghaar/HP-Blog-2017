<?php
/*
    Template Name: Shop Page
*/

get_header(); ?>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="py-5 text-center  text-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 py-3">
                                <img class="img-fluid d-block mb-4" style=" height: 100px; object-fit: cover;" width="100%" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'full' ); ?>">
                                <h6 class="text-gray-dark">Rice Noodles</h6>
                                <a href='<?php the_permalink(); ?>'><button style="font-size: 12px;" class="btn btn-block btn-secondary">Buy Now</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>