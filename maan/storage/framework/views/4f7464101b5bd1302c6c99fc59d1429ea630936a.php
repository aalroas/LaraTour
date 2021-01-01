<title><?php echo e(GeneralSiteSettings("site_title_" . trans('backend.boxCode')) . " | "  . ucfirst(Request::segment(2))); ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="<?php echo e(GeneralSiteSettings("site_meta_description_" . trans('backend.boxCode'))); ?>">
<meta name="keywords"   content="<?php echo e(GeneralSiteSettings("site_meta_keywords_" . trans('backend.boxCode'))); ?>">
<meta name="author" content="<?php echo e(GeneralSiteSettings("site_title_" . trans('backend.boxCode'))); ?>">

<link rel="icon" href="<?php echo e(URL('uploads/settings/'. GeneralSiteSettings("site_icon_" . trans('backend.boxCode')))); ?>" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/font-awesome/css/font-awesome.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/animate-css/vivify.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/multi-select/css/multi-select.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/nouislider/nouislider.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/c3/c3.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/dropify/css/dropify.min.css')); ?>">


<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css')); ?>">



<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo e(asset('backend/html/assets/css/site.min.css')); ?>">

<?php if( trans('frontend.direction')=="rtl"): ?>
<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=cocon-next-arabic" />
<style>
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
        font-family: 'cocon-next-arabic' !important;

    }
</style>
<?php endif; ?>
