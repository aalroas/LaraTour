<?php $__env->startSection('main-content'); ?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.site_settings')); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><?php echo e(trans('backend.dashboard')); ?></a></li>

                            <li class="breadcrumb-item active" aria-current="page">Basic Form Elements</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">

                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">


                <form role="form" action="<?php echo e(route('setting.UpdateSiteInfo')); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.logo')); ?> AR</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/settings', $Setting->site_logo_ar)); ?>"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="site_logo_ar">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.logo')); ?> EN</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/settings', $Setting->site_logo_tr)); ?>"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="site_logo_en">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.logo')); ?> TR</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/settings', $Setting->site_logo_tr)); ?>"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="site_logo_tr">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.icon')); ?> AR</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/settings', $Setting->site_icon_ar)); ?>"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="site_icon_ar">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.icon')); ?> EN</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/settings', $Setting->site_icon_en)); ?>"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="site_icon_en">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.icon')); ?> TR</h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/settings', $Setting->site_icon_tr)); ?>"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="site_icon_tr">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.site_title')); ?> AR</h2>
                                </div>
                                <div class="body">
                             <input type="text" class="form-control" name="site_title_ar" value="<?php echo e($Setting->site_title_ar); ?>"   aria-required="true">
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.site_title')); ?> EN</h2>
                                </div>
                                <div class="body">

                                <input type="text" class="form-control" name="site_title_en"  value="<?php echo e($Setting->site_title_en); ?>"  aria-required="true">
                                </div>
                            </div>
                        </div>

                       <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.site_title')); ?> TR</h2>
                                </div>
                                <div class="body">
                         <input type="text" class="form-control" name="site_title_tr"  value="<?php echo e($Setting->site_title_tr); ?>"  aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.site_url')); ?></h2>
                                </div>
                                <div class="body">
                                    <input type="text" class="form-control" name="site_url" value="<?php echo e($Setting->site_url); ?>"
                                        aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.site_email')); ?></h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" name="site_email" value="<?php echo e($Setting->site_email); ?>"
                                        aria-required="true">
                                </div>
                            </div>
                        </div>


                    </div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_meta_description')); ?> AR</h2>
            </div>
            <div class="body">
                <textarea   type="text" class="form-control" name="site_meta_description_ar" ><?php echo e($Setting->site_meta_description_ar); ?>

                    </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_meta_description')); ?> EN</h2>
            </div>
            <div class="body">

                <textarea   type="text" class="form-control" name="site_meta_description_en" ><?php echo e($Setting->site_meta_description_en); ?>

                    </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_meta_description')); ?> TR</h2>
            </div>
            <div class="body">

                <textarea   type="text" class="form-control" name="site_meta_description_tr" ><?php echo e($Setting->site_meta_description_tr); ?>

                    </textarea>
            </div>
        </div>
    </div>
</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_meta_keywords')); ?> AR</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="site_meta_keywords_ar"><?php echo e($Setting->site_meta_keywords_ar); ?>

                    </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_meta_keywords')); ?> EN</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="site_meta_keywords_en"><?php echo e($Setting->site_meta_keywords_en); ?>

                    </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_meta_keywords')); ?> TR</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="site_meta_keywords_tr"><?php echo e($Setting->site_meta_keywords_tr); ?>

                    </textarea>
            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.copy_right')); ?> AR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="copy_right_ar" value="<?php echo e($Setting->copy_right_ar); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.copy_right')); ?> EN</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="copy_right_en" value="<?php echo e($Setting->copy_right_en); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.copy_right')); ?> TR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="copy_right_tr" value="<?php echo e($Setting->copy_right_tr); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_address')); ?> AR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_address_ar" value="<?php echo e($Setting->site_address_ar); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_address')); ?> EN</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="site_address_en" value="<?php echo e($Setting->site_address_en); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_address')); ?> TR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_address_tr" value="<?php echo e($Setting->site_address_tr); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_mobile')); ?> </h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_mobile" value="<?php echo e($Setting->site_mobile); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_phone')); ?> </h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="site_phone" value="<?php echo e($Setting->site_phone); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_fax')); ?></h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_fax" value="<?php echo e($Setting->site_fax); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>



<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_whatsapp_url')); ?> </h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_whatsapp_url" value="<?php echo e($Setting->site_whatsapp_url); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_instagram_url')); ?> </h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="site_instagram_url" value="<?php echo e($Setting->site_instagram_url); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_facebook_url')); ?></h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_facebook_url" value="<?php echo e($Setting->site_facebook_url); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>


<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_twitter_url')); ?> </h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_twitter_url"
                    value="<?php echo e($Setting->site_twitter_url); ?>" aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_linkedin_url')); ?> </h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="site_linkedin_url"
                    value="<?php echo e($Setting->site_linkedin_url); ?>" aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.site_youtube_url')); ?></h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="site_youtube_url"
                    value="<?php echo e($Setting->site_youtube_url); ?>" aria-required="true">
            </div>
        </div>
    </div>
</div>









<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.booking_text')); ?> AR </h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="booking_text_ar"
                    value="<?php echo e($Setting->booking_text_ar); ?>" aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.booking_text')); ?> EN </h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="booking_text_en"
                    value="<?php echo e($Setting->booking_text_en); ?>" aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.booking_text')); ?> TR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="booking_text_tr"
                    value="<?php echo e($Setting->booking_text_tr); ?>" aria-required="true">
            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.booking_url')); ?> </h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="booking_url"
                    value="<?php echo e($Setting->booking_url); ?>" aria-required="true">
            </div>
        </div>
    </div>



</div>


<div class="col-sm-4">


        <div class="body">
        <button type="submit" class="btn btn-primary btn-round"><?php echo e(trans('backend.save')); ?></button>
        <a type="button" class="btn btn-warning" href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(trans('backend.back')); ?></a>

    </div>
</div>



                </form>


            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>