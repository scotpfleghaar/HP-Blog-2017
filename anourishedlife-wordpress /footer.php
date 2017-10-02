<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ANourishedLife
 */

?>


<?php wp_footer(); ?>
<div class="bg-secondary text-dark">
        <div class="container">
            <div class="row">
                <div class="p-5 col-md-3"> <i class="fa fa-5x mb-5 fa-apple"></i>
                    <h3 class="mb-4">Title</h3>
                    <?php
                    
                    //wp_nav_menu( array(
                    //    'theme_location'   => 'primary',
                    //    'container' => 'nav',
                    //    'container_class' => '', //This is where the classes for the container go that we set up in bootstrap
                    //    'menu_class' => 'nav navbar-nav main-navbar-items' //This is where the classes for the ul element go
                    //) );
                    ?>
                    <!--<ul class="list-unstyled">
                        <a href="#" class="text-dark">Home</a>
                        <br>
                        <a href="#" class="text-dark">About us</a>
                        <br>
                        <a href="#" class="text-dark">Our services</a>
                        <br>
                        <a href="#" class="text-dark">Testimonials</a>
                    </ul>-->
                </div>
                <div class="p-5 col-md-4">
                    <h3 class="mb-4">Latest post</h3>
                    <p>"<i>Here you can insert the latest news from your business. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                        <br>
                        <br>
                        <br>"<i>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat</i>"</p>
                </div>
                <div class="p-5 col-md-5">
                    <h3>Get in touch</h3>
                    <form class="my-4">
                        <fieldset class="form-group"> <label for="exampleInputEmail1">Get monthly updates</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </fieldset>
                        <button type="submit" class="btn btn-outline-dark">Submit</button>
                    </form>
                    <h3 class="mt-5">Social</h3>
                    <ul class="nav text-dark" style="">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-pinterest"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="fa d-inline fa-lg fa-envelope-o"></i></a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <p class="text-center">© Copyright 2017 Hayley Pfleghaar - All rights reserved. </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
