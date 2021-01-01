<?php $__env->startSection('main-content'); ?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.contact')); ?></h1>
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


                <form role="form" action="<?php echo e(route('contact.update')); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    




                    

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.lat')); ?> AR</h2>
            </div>
            <div class="body">
                <input type="text" class="form-control" name="lat" value="<?php echo e($contact->lat); ?>"
                    aria-required="true">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.long')); ?> EN</h2>
            </div>
            <div class="body">

                <input type="text" class="form-control" name="long" value="<?php echo e($contact->long); ?>"
                    aria-required="true">
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