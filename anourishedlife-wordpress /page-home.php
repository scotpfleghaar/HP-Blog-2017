<?php
/*
    Template Name: Home Page
*/

get_header(); ?>
<div class="py-5">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">

                <?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <div class="carousel-item">
      <a href='<?php the_permalink(); ?>'>
                        <img class="d-block carousal-img-small" style="height: 550px; object-fit: cover;"  data-holder-rendered="true" width="100%" src=" <?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'full' ); ?>" >
                        <div class="carousel-caption">
                            <h3 class="text-dark" style="background: rgba(255,255,255,0.5); border-radius: 5px; padding: 2%;"> <?php the_title(); ?></h3>
                            <!--<p class="text-dark"><?php the_excerpt(); ?></p>-->
                        </div>
</a>
                    </div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>
<!--
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" data-holder-rendered="true">
                        <div class="carousel-caption">
                            <h3>First slide label</h3>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" data-holder-rendered="true">
                        <div class="carousel-caption">
                            <h3>Second slide label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" data-holder-rendered="true">
                        <div class="carousel-caption">
                            <h3>Third slide label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>-->
                </div>
            </div>
            <!--
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
-->
        </div>

    </div>
</div>
</div>
<!-- Populate these below tiles with blogs 4-10 -->
<div class="py-5">
<div class="container">
    <div class="row">


    <?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 6,
      'offset' => 3
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

    <!--
        <div class="col-md-4 my-3">
            <img class="img-fluid d-block mb-4" src="https://pingendo.github.io/templates/sections/assets/features_mac.jpg">
            <h5><b>Features #1: minimal design</b></h5>
            <p class="mt-1">You are working with plain HTML and SASS files on your computer, so extending and integrating Javascript is a breeze.</p>
        </div>
        <div class="col-md-4 my-3">
            <img class="img-fluid d-block mb-4" src="https://pingendo.github.io/templates/sections/assets/features_strawberry.jpg">
            <h5><b>Features#2: strawberries</b></h5>
            <p class="mt-1">Integrate it in your toolset. Use Pingendo alongside your favourite code editor, Git client, etc.</p>
        </div>
        <div class="col-md-4 my-3">
            <img class="img-fluid d-block mb-4" src="https://pingendo.github.io/templates/sections/assets/features_bluetable.jpg">
            <h5><b>Features#3: blue palette</b></h5>
            <p class="mt-1">Just quality vanilla Bootstrap 4 code. No messy dependencies. For nerds peace of mind.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 my-3">
            <img class="img-fluid d-block mb-4" src="https://pingendo.github.io/templates/sections/assets/work_6.jpg">
            <h5><b>Features#4: hands on code</b></h5>
            <p class="mt-1">Get a fluid web page working on all devices with the Bootstrap 4 grid system.</p>
        </div>
        <div class="col-md-4 my-3">
            <img class="img-fluid d-block mb-4" src="https://pingendo.github.io/templates/sections/assets/work_2.jpg">
            <h5><b>Features#5: heavy duty</b></h5>
            <p class="mt-1">Responsive design made intuitive and effective with Pingendo.</p>
        </div>
        <div class="col-md-4 my-3">
            <img class="img-fluid d-block mb-4" src="https://pingendo.github.io/templates/sections/assets/work_5.jpg">
            <h5><b>Features#6: think big</b></h5>
            <p class="mt-1">Modify colors, fonts and grid setting without opening any CSS file.</p>
        </div>-->
    </div>
</div>
</div>

<?php

get_footer();
