<!doctype html>
<html lang="en">

<head>
<title><?php echo e(GeneralSiteSettings('site_title_'.trans('frontend.code'))); ?> | <?php echo e(trans('frontend.login')); ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content="<?php echo e(GeneralSiteSettings("site_meta_description_" . trans('frontend.boxCode'))); ?>">
<meta name="keywords" content="<?php echo e(GeneralSiteSettings("site_meta_keywords_" . trans('frontend.boxCode'))); ?>">
<meta name="author" content="<?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode'))); ?>">


<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/font-awesome/css/font-awesome.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/animate-css/vivify.min.css')); ?>">

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo e(asset('backend/html/assets/css/site.min.css')); ?>">

</head>

<body class="theme-cyan font-montserrat <?php echo e(trans('frontend.direction')); ?>">
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

<div class="auth-main2 particles_js">
    <div class="auth_div vivify fadeInTop">
        <div class="card">
            <div class="body">
                <div class="login-img">
                    <img class="img-fluid" src="<?php echo e(asset('backend/assets/images/login-img.png')); ?>" />
                </div>
                <form  method="POST" class="form-auth-small" action="<?php echo e(route('admin.login')); ?>">
                  <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <p class="lead"><?php echo e(trans('backend.login')); ?></p>
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only"><?php echo e(trans('backend.email')); ?></label>
                    <input type="email" name="email" class="form-control round" id="signin-email"  placeholder="<?php echo e(trans('backend.email')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="signin-password" class="control-label sr-only"><?php echo e(trans('backend.password')); ?></label>
                        <input type="password"  name="password" class="form-control round" id="signin-password"   placeholder="<?php echo e(trans('backend.password')); ?>">
                    </div>

                    <button type="submit" class="btn btn-primary btn-round btn-block"><?php echo e(trans('backend.login')); ?></button>

                </form>
                <div class="pattern">
                    <span class="red"></span>
                    <span class="indigo"></span>
                    <span class="blue"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->

<script src="<?php echo e(asset('backend/html/assets/bundles/libscripts.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('backend/html/assets/bundles/vendorscripts.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('backend/html/assets/bundles/mainscripts.bundle.js')); ?>"></script>
</body>
</html>


