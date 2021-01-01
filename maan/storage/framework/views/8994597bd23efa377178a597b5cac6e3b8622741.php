<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Title Of Site -->
<title><?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode'))); ?> <?php if(ucfirst(Request::segment(1)) != ""): ?>
| <?php echo e(ucfirst(Request::segment(1))); ?>

<?php endif; ?></title>
<meta name="keywords" content="<?php echo e(GeneralSiteSettings("site_meta_keywords_" . trans('frontend.boxCode'))); ?>" />
<meta name="description" content="<?php echo e(GeneralSiteSettings("site_meta_description_" . trans('frontend.boxCode'))); ?>" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<meta name="author" content="<?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode'))); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Fav and Touch Icons -->
<meta name="format-detection" content="telephone=no">
<meta property="og:url" content="https://www.maantour61.com/">
<meta property="og:site_name" content="<?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode'))); ?>">

 
<meta property="fb:app_id" content="290943455212632" />
<meta property="og:type" content="website" />

<meta property="og:title"
    content="<?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode')) . " | "  . ucfirst(Request::segment(1))); ?>">
<meta property="og:image"
    content="<?php echo e(URL('uploads/settings/'. GeneralSiteSettings("site_logo_".trans('frontend.boxCode')))); ?>">
<meta name="twitter:image"
    content="<?php echo e(URL('uploads/settings/'. GeneralSiteSettings("site_logo_".trans('frontend.boxCode')))); ?>">
<meta name="twitter:title" content="<?php echo e(GeneralSiteSettings("site_title_" . trans('frontend.boxCode'))); ?>">
<meta property="og:description"
    content="<?php echo e(GeneralSiteSettings("site_meta_description_" . trans('frontend.boxCode'))); ?>">
<meta name="twitter:description"
    content="<?php echo e(GeneralSiteSettings("site_meta_description_" . trans('frontend.boxCode'))); ?>">

<link rel="shortcut icon" href="<?php echo e(URL('uploads/settings/'.GeneralSiteSettings("site_icon_" . trans('frontend.boxCode')))); ?>">

<!-- Font face -->
<link
    href="https://fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
    rel="stylesheet">

<!-- CSS -->
<link href="<?php echo e(asset('frontend/css/font-icons.css')); ?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontend/bootstrap/css/bootstrap.min.css')); ?>" media="screen">
<link href="<?php echo e(asset('frontend/css/animate.html')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('frontend/css/main.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('frontend/css/plugin.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('frontend/css/style.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('frontend/css/your-style.css')); ?>" rel="stylesheet">





<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
