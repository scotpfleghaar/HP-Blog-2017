<?php
/*
    Template Name: Contact Page
*/

get_header(); ?>
<div class="py-5">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="py-5  text-dark">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h1 class="text-gray-dark">Contact form</h1>
                    <p class="lead mb-4">Complete all the fields below to send us a message</p>
                    <form class="text-left">
                        <div class="form-group row">
                        <div class="col-md-6"> <label for="InputName">Name</label>
                            <input type="text" class="form-control" id="InputName"> </div>
                        <div class="col-md-6"> <label for="InputEmail">Email</label>
                            <input type="email" class="form-control" id="InputEmail"> </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-md-12"> <label for="Textarea">Message</label> <textarea class="form-control" id="Textarea" rows="3"></textarea>
                            <button type="submit" class="btn mt-4 btn-block btn-secondary text-dark">Send</button>
                        </div>
                        </div>
                    </form>
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