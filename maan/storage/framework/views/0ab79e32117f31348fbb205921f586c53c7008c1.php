<?php $__env->startSection('main-content'); ?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.sliders')); ?></h1>
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

            <form role="form" action="<?php echo e(route('slider.update',$slider->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PATCH')); ?>

<div class="row clealfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.image')); ?></h2>
            </div>
            <div class="body">
                <input type="file" class="form-control dropify" id="image" data-default-file="<?php echo e(URL::to('uploads/sliders', $slider->image)); ?>"
                    data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" name="image">
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

                <input  value="<?php if(old('title_ar')): ?><?php echo e(old('title_ar')); ?><?php else: ?><?php echo e($slider->title_ar); ?><?php endif; ?>" type="text" class="form-control" id="title_ar" name="title_ar">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.title')); ?> EN</h2>
            </div>
            <div class="body">

                <input value="<?php if(old('title_en')): ?><?php echo e(old('title_en')); ?><?php else: ?><?php echo e($slider->title_en); ?><?php endif; ?>" type="text" class="form-control" id="title_en" name="title_en">

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.title')); ?> TR</h2>
            </div>
            <div class="body">

                <input value="<?php if(old('title_tr')): ?><?php echo e(old('title_tr')); ?><?php else: ?><?php echo e($slider->title_tr); ?><?php endif; ?>" type="text" class="form-control" id="title_tr" name="title_tr">

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


                <textarea  type="text" class="form-control" name="text_ar"><?php echo e($slider->text_ar); ?></textarea>

            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.text')); ?> EN</h2>
            </div>
            <div class="body">
                <textarea  type="text" class="form-control" name="text_en"><?php echo e($slider->text_en); ?></textarea>


            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.text')); ?> TR</h2>
            </div>
            <div class="body">

                <textarea  type="text" class="form-control" name="text_tr"><?php echo e($slider->text_tr); ?></textarea>


            </div>
        </div>
    </div>

</div>


<div class="row clealfix">


    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.url')); ?></h2>
            </div>
            <div class="body">

                <input value="<?php if(old('url')): ?><?php echo e(old('url')); ?><?php else: ?><?php echo e($slider->url); ?><?php endif; ?>" type="text" autocomplete="off" name="url" class="form-control">

            </div>
        </div>
    </div>

</div>

<div class="row clealfix">


    <div class="col-sm-6">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.status')); ?></h2>
            </div>
            <div class="body">

           <div class="multiselect_div">
                <select id="single-selection" name="status" class="multiselect multiselect-custom">
                    <option <?php if($slider->status == 1): ?> selected <?php endif; ?> value="1" ><?php echo e(trans('backend.yes')); ?></option>
                    <option <?php if($slider->status == 0): ?> selected <?php endif; ?> value="0"><?php echo e(trans('backend.no')); ?></option>

                </select>
            </div>
            </div>
        </div>
    </div>




</div>



<div class="box-footer">
    <button type="submit" class="btn btn-primary"><?php echo e(trans('backend.save')); ?></button>
    <a type="button" class="btn btn-warning" href="<?php echo e(route('slider.index')); ?>"><?php echo e(trans('backend.back')); ?></a>
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