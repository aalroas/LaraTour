<?php $__env->startSection('main-content'); ?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.about')); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><?php echo e(trans('backend.dashboard')); ?></a></li>

                            <li class="breadcrumb-item active" aria-current="page"></li>
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


                <form role="form" action="<?php echo e(route('about.update')); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.page_image')); ?></h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/about', $about->page_image)); ?>"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="page_image">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.about_image')); ?></h2>
                                </div>
                                <div class="body">

                                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/about', $about->about_image)); ?>"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="about_image">
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.room_name')); ?> AR</h2>
                                </div>
                                <div class="body">
                             <input type="text" class="form-control" name="page_name_ar" value="<?php echo e($about->page_name_ar); ?>"   aria-required="true">
                                </div>
                            </div>
                        </div>
                       <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.room_name')); ?> EN</h2>
                                </div>
                                <div class="body">

                                <input type="text" class="form-control" name="page_name_en"  value="<?php echo e($about->page_name_en); ?>"  aria-required="true">
                                </div>
                            </div>
                        </div>

                       <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.room_name')); ?> TR</h2>
                                </div>
                                <div class="body">
                         <input type="text" class="form-control" name="page_name_tr"  value="<?php echo e($about->page_name_tr); ?>"  aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.room_text')); ?> AR</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="page_text_ar"><?php echo e($about->page_text_ar); ?>

                    </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.room_text')); ?> EN</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="page_text_en"><?php echo e($about->page_text_en); ?>

                    </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.room_text')); ?> TR</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="page_text_tr"><?php echo e($about->page_text_tr); ?>

                    </textarea>
            </div>
        </div>
    </div>
</div>

                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.about_tilte')); ?> AR</h2>
                                </div>
                                <div class="body">
                                    <input type="text" class="form-control" name="about_tilte_ar" value="<?php echo e($about->about_tilte_ar); ?>"
                                        aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.about_tilte')); ?> EN</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" name="about_tilte_en" value="<?php echo e($about->about_tilte_en); ?>"
                                        aria-required="true">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.about_tilte')); ?> TR</h2>
                                </div>
                                <div class="body">
                                    <input type="text" class="form-control" name="about_tilte_tr" value="<?php echo e($about->about_tilte_tr); ?>"
                                        aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.about_text')); ?> AR</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="about_text_ar"><?php echo e($about->about_text_ar); ?>

                    </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.about_text')); ?> EN</h2>
            </div>
            <div class="body">

                <textarea   type="text" class="form-control" name="about_text_en"><?php echo e($about->about_text_en); ?>

                    </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.about_text')); ?> TR</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="about_text_tr"><?php echo e($about->about_text_tr); ?>

                    </textarea>
            </div>
        </div>
    </div>

    


</div>







<div class="row clealfix">
        <div class="col-sm-4">
            <div class="card">
                <div class="header">
                    <h2><?php echo e(trans('backend.counter_title')); ?> AR</h2>
                </div>
                <div class="body">
                    <input type="text" class="form-control" name="award_tilte_ar" value="<?php echo e($about->award_tilte_ar); ?>"
                        aria-required="true">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="header">
                    <h2><?php echo e(trans('backend.counter_title')); ?> EN</h2>
                </div>
                <div class="body">

                    <input type="text" class="form-control" name="award_tilte_en" value="<?php echo e($about->award_tilte_en); ?>"
                        aria-required="true">
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="header">
                    <h2><?php echo e(trans('backend.counter_title')); ?> TR</h2>
                </div>
                <div class="body">
                    <input type="text" class="form-control" name="award_tilte_tr" value="<?php echo e($about->award_tilte_tr); ?>"
                        aria-required="true">
                </div>
            </div>
        </div>
    </div>

    




    <div class="row clealfix">
        <div class="col-sm-4">
            <div class="card">
                <div class="header">
                    <h2><?php echo e(trans('backend.tours_count')); ?></h2>
                </div>
                <div class="body">
                    <input type="text" class="form-control" name="projects" value="<?php echo e($about->projects); ?>"
                        aria-required="true">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="header">
                    <h2><?php echo e(trans('backend.customers')); ?>  </h2>
                </div>
                <div class="body">

                    <input type="text" class="form-control" name="customers" value="<?php echo e($about->customers); ?>"
                        aria-required="true">
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="header">
                    <h2><?php echo e(trans('backend.rooms')); ?>  </h2>
                </div>
                <div class="body">
                    <input type="text" class="form-control" name="hours" value="<?php echo e($about->hours); ?>"
                        aria-required="true">
                </div>
            </div>
        </div>



        


    </div>











<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.tours_title')); ?> AR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="team_tilte_ar" value="<?php echo e($about->team_tilte_ar); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.tours_title')); ?> EN</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="team_tilte_en" value="<?php echo e($about->team_tilte_en); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.tours_title')); ?> TR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="team_tilte_tr" value="<?php echo e($about->team_tilte_tr); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.tours_text')); ?> AR</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="team_text_ar"><?php echo e($about->team_text_ar); ?>

                        </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.tours_text')); ?> EN</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="team_text_en"><?php echo e($about->team_text_en); ?>

                        </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.tours_text')); ?> TR</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="team_text_tr"><?php echo e($about->team_text_tr); ?>

                        </textarea>
            </div>
        </div>
    </div>
</div>


<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.customers_tilte')); ?> AR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="testimonials_tilte_ar" value="<?php echo e($about->testimonials_tilte_ar); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.customers_tilte')); ?> EN</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="testimonials_tilte_en" value="<?php echo e($about->testimonials_tilte_en); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.customers_tilte')); ?> TR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="testimonials_tilte_tr" value="<?php echo e($about->testimonials_tilte_tr); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
</div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.customers_text')); ?> AR</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="testimonials_text_ar"><?php echo e($about->testimonials_text_ar); ?>

                        </textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.customers_text')); ?> EN</h2>
            </div>
            <div class="body">

                <textarea   type="text" class="form-control" name="testimonials_text_en"><?php echo e($about->testimonials_text_en); ?>

                        </textarea>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.customers_text')); ?> TR</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="testimonials_text_tr"><?php echo e($about->testimonials_text_tr); ?>

                        </textarea>
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