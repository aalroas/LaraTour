<?php $__env->startSection('main-content'); ?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.testimonials')); ?></h1>
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

              <form role="form" action="<?php echo e(route('testimonial.store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>



                  <div class="row clealfix">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.image')); ?></h2>
                                </div>
                                <div class="body">
                                    <input type="file" class="dropify"
                                        data-default-file=""
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="image" required>
                                </div>
                            </div>
                        </div>
                  </div>



                  <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.title')); ?> AR</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="title_ar" name="title_ar">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.title')); ?> EN</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="title_en" name="title_en">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.title')); ?> TR</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="title_tr" name="title_tr">

                                </div>
                            </div>
                        </div>

                    </div>


<div class="row clealfix">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2><?php echo e(trans('backend.text')); ?> AR</h2>
                            </div>
                            <div class="body">


                                <textarea  type="text" class="form-control" name="text_ar"></textarea>

                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2><?php echo e(trans('backend.text')); ?> EN</h2>
                            </div>
                            <div class="body">
<textarea  type="text" class="form-control" name="text_en"></textarea>


                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2><?php echo e(trans('backend.text')); ?> TR</h2>
                            </div>
                            <div class="body">

                                <textarea  type="text" class="form-control" name="text_tr"></textarea>


                            </div>
                        </div>
                    </div>

                </div>


<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.url')); ?></h2>
            </div>
            <div class="body">


                <input type="text" name="url" class="form-control">


            </div>
        </div>
    </div>




</div>



            <div class="box-footer">
              <button type="submit" class="btn btn-primary"><?php echo e(trans('backend.save')); ?></button>
              <a  type="button"  class="btn btn-warning" href="<?php echo e(route('testimonial.index')); ?>"><?php echo e(trans('backend.back')); ?></a>
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