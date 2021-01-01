<?php $__env->startSection('main-content'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.dashboard')); ?></h1>

                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body ">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i>
                            </div>
                            <div class="ml-4">
                            <a href="<?php echo e(route('post.index')); ?>"><span><?php echo e(trans('backend.posts')); ?></span></a>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($posts); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-azura text-white rounded-circle"><i class="fa fa-credit-card"></i>
                            </div>
                            <div class="ml-4">

                                <a href="<?php echo e(route('room.index')); ?>"><span><?php echo e(trans('backend.room')); ?></span></a>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($rooms); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i>
                            </div>
                            <div class="ml-4">

                                <a href="<?php echo e(route('testimonial.index')); ?>"><span><?php echo e(trans('backend.testimonials')); ?></span></a>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($testimonials); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-pink text-white rounded-circle"><i class="fa fa-life-ring"></i>
                            </div>
                            <div class="ml-4">

                                <a href="<?php echo e(route('tour.index')); ?>"><span><?php echo e(trans('backend.tours')); ?></span></a>
                            <h4 class="mb-0 font-weight-medium"><?php echo e($tours); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body ">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg  bg-info text-white rounded-circle"><i class="fa fa-envelope"></i>
                            </div>
                            <div class="ml-4">
                           <a href="<?php echo e(route('contact_forms.index')); ?>"><span><?php echo e(trans('backend.contact_forms')); ?></span></a>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($contact_forms); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-danger text-white rounded-circle"><i class="icon-screen-desktop"></i>
                            </div>
                            <div class="ml-4">

                                <a href="<?php echo e(route('slider.index')); ?>"><span><?php echo e(trans('backend.sliders')); ?></span></a>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($sliders); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-warning text-white rounded-circle"><i class="fa fa-user"></i>
                            </div>
                            <div class="ml-4">

                                <a href="<?php echo e(route('user.index')); ?>"><span><?php echo e(trans('backend.users')); ?></span></a>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($users); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-success text-white rounded-circle"><i class="fa fa-plane"></i>
                            </div>
                            <div class="ml-4">

                                <a href="<?php echo e(route('service.index')); ?>"><span><?php echo e(trans('backend.services')); ?></span></a>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($services); ?></h4>
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