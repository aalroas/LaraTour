<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <?php echo $__env->make('admin.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"
        type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all"
        rel="stylesheet" type="text/css" />

    <style type="text/css">

        .main-sectionx {
   margin:0 auto;
    padding: 20px;
    margin-top: 100px;
    background-color: #fff;
    box-shadow: 0px 0px 20px #c1c1c1;
        }
        .fileinput-remove,
        .fileinput-upload {
            display: none;
        }
    </style>

  </head>

  <body class="theme-black font-montserrat <?php echo e(trans('backend.direction')); ?> light_version">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
        </div>
    </div>
<!-- Theme Setting -->
<div class="themesetting">
    <a href="javascript:void(0);" class="theme_btn"><i class="icon-magic-wand"></i></a>
    <div class="card theme_color">
        <div class="header">
            <h2><?php echo e(trans('backend.color')); ?></h2>
        </div>
        <ul class="choose-skin list-unstyled mb-0">
            <li data-theme="green">
                <div class="green"></div>
            </li>
            <li data-theme="black">
                <div class="black"></div>
            </li>
            <li data-theme="orange">
                <div class="orange"></div>
            </li>
            <li data-theme="blush">
                <div class="blush"></div>
            </li>
            <li data-theme="cyan" class="active">
                <div class="cyan"></div>
            </li>
            <li data-theme="indigo">
                <div class="indigo"></div>
            </li>
            <li data-theme="red">
                <div class="red"></div>
            </li>
        </ul>
    </div>

    <div class="card setting_switch">
        <div class="header">
            <h2><?php echo e(trans('backend.settings')); ?></h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <?php echo e(trans('backend.light_version')); ?>

                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="lv-btn" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
              <?php echo e(trans('backend.rtl_version')); ?>

                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="rtl-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                <?php echo e(trans('backend.horizontal_menu')); ?>

                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="hmenu-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
               <?php echo e(trans('backend.mini_sidebar')); ?>

                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="mini-sidebar-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
        </ul>
    </div>

</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar top-navbar">
        <div class="container-fluid">

            <div  style="
    padding-right: 18px;
" class="navbar-left">
                <div class="navbar-btn">
                <a href="<?php echo e(URL('admin/dashboard')); ?>"><img src="<?php echo e(URL('uploads/settings/'.GeneralSiteSettings('site_logo_'.trans('backend.boxCode')))); ?>" alt="<?php echo e(GeneralSiteSettings('site_title_'.trans('backend.boxCode'))); ?>"
                            class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <ul class="nav navbar-nav">

                 <li class="dropdown language-menu">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="fa fa-language"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pt-2 pb-2" href="<?php echo e(URL::to('lang/ar')); ?>"><img src="<?php echo e(asset('backend/assets/images/flag/arabia.svg')); ?>"
                                    class="w20 mr-2 rounded-circle"> Arabic</a>
                            <a class="dropdown-item pt-2 pb-2" href="<?php echo e(URL::to('lang/en')); ?>"><img src="<?php echo e(asset('backend/assets/images/flag/us.svg')); ?>"
                                    class="w20 mr-2 rounded-circle"> English</a>
                            <a class="dropdown-item pt-2 pb-2" href="<?php echo e(URL::to('lang/tr')); ?>"><img src="<?php echo e(asset('backend/assets/images/flag/tr.svg')); ?>"
                                    class="w20 mr-2 rounded-circle">Turkish</a>

                        </div>
                    </li>

                <li class="p_news"><a href="<?php echo e(URL('/')); ?>" class="news icon-menu"  ><?php echo e(trans('backend.website')); ?></a></li>

                </ul>
            </div>

            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">



                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();" class="icon-menu"><i class="icon-power"></i>
                            <?php echo e(trans('backend.logout')); ?> </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>


                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </nav>








  <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php $__env->startSection('main-content'); ?>
    <?php echo $__env->yieldSection(); ?>


</div>

  <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  </body>
</html>
