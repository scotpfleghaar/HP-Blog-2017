$(document).ready(function () {

    $('.main-navbar-items li').addClass('nav-item');
    $('.main-navbar-items li a').addClass('nav-link');

    $('.navbar-nav ul').addClass('navbar-nav  mr-auto main-navbar-items');
    //$('.header-image-home').css('width', '50%');
    $(".carousel-item").first().addClass("active");
    $('.search-field').addClass('form-control');
    $('.search-submit').addClass('btn btn-secondary');
    $('.submit').addClass('btn btn-secondary');
    // $('.widget ul').addClass('list-group');
    // $('.widget li').addClass('list-group-item');
    $('.widget-title').css('font-size', '24px');
    $('.search-bar-search').css('-webkit-appearance', 'none');
    $('.widget ul').addClass('list-unstyled px-2');
    //Search button show-hide
    $('.hidden-search').hide();
    $('.search-to-reveal').on('click', function () {
        $('.search-to-reveal').hide();
        $('.hidden-search').show();
    });
    $('.search-submit').hide();


    $('.post-navigation').addClass('col-sm-12 text-center');
    $('.post-navigation .nav-links').addClass('row p-3');
    $('.nav-previous').addClass('col-sm-6');
    $('.post-next').addClass('col-sm-6');

    $('.comment-list .comment-body').addClass('p-3');

    $(".comment-form-comment").wrap("<div class='container'></div>");
    $(".comment-form-comment").wrap("<div class='row'></div>");
    $(".comment-form-comment label").wrap("<div class='col-sm-12'></div>");
    $(".comment-form-comment textarea").wrap("<div class='col-sm-12'></div>");

    /* navigation sub-menu display */
    $('.menu-item-object-children a').css('border', 'red 1px solid');
    $('.sub-menu').css('border', 'red 1px solid');

    $('.sub-menu').parent().append(' &#9660');




});