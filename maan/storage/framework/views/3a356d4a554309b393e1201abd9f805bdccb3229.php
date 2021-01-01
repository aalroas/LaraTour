<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(trans('frontend.direction')); ?>">

<head>

    <?php echo $__env->make('frontend/layouts/head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script src="<?php echo e(asset('frontend/ajax/jquery-2.2.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/ajax/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/ajax/jquery-plugin-collection.js')); ?>"></script>
    <?php if( trans('frontend.direction')=="rtl"): ?>
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <style>


[dir='rtl'] .slick-prev {

right: auto !important;
}


.product-grid-item .content {

text-align: right;
}





.menu-horizontal-02 ul li a {

    line-height: 1;

}

@media (min-width: 768px){
.menu-horizontal-02 ul li a {
    font-size: 13px;
    letter-spacing: 0.5px;
    padding: 7px 5px;
}
}

        @media  only screen and (max-width: 991px){
        .header-main.header-mobile-menu .main-menu-nav .main-nav > li > a {
        text-align: right;
        }}

       .detail-header {
        text-align: right;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        ul,
        li,
        p,
        a,
        td {
            font-family: 'Tajawal', sans-serif !important;

        }







        .header-main .main-nav>li {
            float: right;
        }

        .header-logo {
            float: right;
        }

        .header-main .header-top .mini-menu>ul {
            float: left;
        }

        .dropdown-item {

            text-align: right;
        }

        .row {

            text-align: right;
        }

        .form-icon-left .form-control {
            padding-right: 50px;
        }

        .page-title-02 h2 {

            text-align: right;
        }

        ul.post-small-list li .content {
            margin-right: 100px;
        }

        ul.post-small-list li .image {

            float: right;

        }

        .header-main .dropdown-language>.btn img {
            float: left;

            margin-right: 6px;
        }
    </style>
    <?php endif; ?>


    <style>
html,body,.with-waypoint-sticky{overflow-x: hidden !important;
width: 100% !important;
}



        .header-main .btn.btn-toggle.collapsed:before {
            content: "\f394";
            color: #191919;
        }

        .btn-text-inherit {


            background-color: #3e51b5;

        }

        .bg-primary {
            background: #FF5252 !important;
            color: #FFF;
        }

        .header-main .header-top {
            padding: 0px 0;
            background-color: #ffffff;


        }

        .header-main .header-top .header-logo img {
            height: 100px;
            width: auto;
            margin-top: 0;
        }




        .testvideo {
            width: 465px;
            height: 315px;
        }

        /* Extra small devices (phones, less than 768px) */
        /* No media query since this is the default in Bootstrap */

        /* Small devices (tablets, 768px and up) */
        @media (max-width: 767px) {
            .testvideo {
                width: 320px;
                height: 315px;
            }
        }
    </style>
</head>

<!-- start Body -->

<body   class="with-waypoint-sticky">
 
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/<?php echo e(trans('frontend.local_code')); ?>/sdk.js#xfbml=1&version=v6.0&appId=290943455212632&autoLogAppEvents=1"></script>
<?php
   $rtl ="";
   if (trans('frontend.direction')=="rtl") {
       $rtl ="true";
   } else {
      $rtl ="false";
   }


?>


    <!-- start Body Inner -->
    <div class="body-inner">
        <?php echo $__env->make('frontend/layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- start Main Wrapper -->
        <div class="main-wrapper scrollspy-action">
            <?php $__env->startSection('main-content'); ?>

            <?php echo $__env->yieldSection(); ?>

        </div>

        <?php echo $__env->make('frontend/layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
    <!-- end Body Inner -->



    <?php echo $__env->make('frontend/layouts/js', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>





<script type="text/javascript">



$('.slick-hero-slider').slick({
dots: true,
    rtl: <?php echo e($rtl); ?>,
infinite: true,
speed: 500,
slidesToShow: 1,
slidesToScroll: 1,
centerMode: true,
infinite: true,
centerPadding: '0',
focusOnSelect: true,
adaptiveHeight: true,
autoplay: true,
autoplaySpeed: 4500,
pauseOnHover: true,
});

$(".slick-hero-slider-02").slick({
dots: true,
    rtl: <?php echo e($rtl); ?>,
infinite: true,
speed: 500,
slidesToShow: 1,
slidesToScroll: 1,
centerMode: true,
infinite: true,
centerPadding: "0",
focusOnSelect: true,
adaptiveHeight: true,
autoplay: true,
autoplaySpeed: 4500,
pauseOnHover: true
});

$('#slick-testimonial-long-slideshow').slick({
slidesToShow: 1,
    rtl: <?php echo e($rtl); ?>,
slidesToScroll: 1,
speed: 500,
arrows: false,
fade: true,
adaptiveHeight: true,
asNavFor: '#slick-testimonial-long-nav'
});

$('#slick-testimonial-long-nav').slick({
slidesToShow: 3,
slidesToScroll: 1,
    rtl: <?php echo e($rtl); ?>,
speed: 500,
asNavFor: '#slick-testimonial-long-slideshow',
dots: false,
arrows: false,
centerMode: true,
focusOnSelect: true,
infinite: true,
centerPadding: '0',
responsive: [,
{
breakpoint: 767,
settings: {
slidesToShow: 2,
arrows: false,
}
},
{
breakpoint: 575,
settings: {
slidesToShow: 1,
arrows: false
}
}
]
});


$('.slick-product-item').slick({
infinite: false,
slidesToShow: 3,
slidesToScroll: 1,
dots: true,
  rtl: <?php echo e($rtl); ?>,
responsive: [
{
breakpoint: 991,
settings: {
slidesToShow: 2,
arrows: false,
}
},
{
breakpoint: 575,
settings: {
slidesToShow: 1,
arrows: false,
}
}
]
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function() {
$($(this).attr('href')).find('.slick-product-item-in-tab').slick({
infinite: false,
slidesToShow: 3,
slidesToScroll: 1,
  rtl: <?php echo e($rtl); ?>,
dots: true,
responsive: [
{
breakpoint: 991,
settings: {
slidesToShow: 2,
arrows: false,
}
},
{
breakpoint: 575,
settings: {
slidesToShow: 1,
arrows: false,
}
}
]
})
}).first().trigger('shown.bs.tab');

$('a[data-toggle="tab"]').on('shown.bs.tab', function() {
$($(this).attr('href')).find('.slick-product-item-in-tab-col-4').slick({
infinite: false,
slidesToShow: 4,
slidesToScroll: 1,
dots: true,
  rtl: <?php echo e($rtl); ?>,
responsive: [
{
breakpoint: 991,
settings: {
slidesToShow: 2,
arrows: false,
}
},
{
breakpoint: 575,
settings: {
slidesToShow: 1,
arrows: false,
}
}
]
})
}).first().trigger('shown.bs.tab');

$('.slick-product-item-col-1').slick({
infinite: false,
slidesToShow: 1,
  rtl: <?php echo e($rtl); ?>,
slidesToScroll: 1,
dots: true,
adaptiveHeight: true,
});

$('.gallery-slideshow').slick({
slidesToShow: 1,
slidesToScroll: 1,
speed: 500,
arrows: true,
  rtl: <?php echo e($rtl); ?>,
fade: true,
asNavFor: '.gallery-nav'
});

$('.gallery-nav').slick({
slidesToShow: 7,
slidesToScroll: 1,
speed: 500,
asNavFor: '.gallery-slideshow',
dots: false,
  rtl: <?php echo e($rtl); ?>,
centerMode: true,
focusOnSelect: true,
infinite: true,
responsive: [
{
breakpoint: 1199,
settings: {
slidesToShow: 7,
}
},
{
breakpoint: 991,
settings: {
slidesToShow: 5,
}
},
{
breakpoint: 767,
settings: {
slidesToShow: 5,
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 3,
}
}
]
});






</script>




</body>


</html>
