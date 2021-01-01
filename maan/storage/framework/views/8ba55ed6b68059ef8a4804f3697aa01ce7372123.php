<?php $__env->startSection('main-content'); ?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.tour')); ?></h1>
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

<div class="col-lg-9 col-md-8 col-sm-12">
    <div class="row clearfix">

        <?php $__currentLoopData = $tour->tour_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour_images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-2">
            <div class="card c_grid c_yellow">
                <div id="<?php echo e($tour_images->id); ?>" class="body text-center">
                    <img width="200" height="100" class="user-photo"
                        src="<?php echo e(URL::to('uploads/tour',$tour_images->tour_image_path)); ?>" alt="">
                    <button class="deleteimage" data-id="<?php echo e($tour_images->id); ?>" data-token="<?php echo e(csrf_token()); ?>" ><?php echo e(trans('backend.delete')); ?></button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <script>

$(".deleteimage").click(function(){
var id = $(this).data("id");
var token = $(this).data("token");
$.ajax(
{
url: "<?php echo url('cpanel/tourimages') ?>/"+id,
type: 'DELETE',
dataType: "JSON",
data: {
"id": id,
"_method": 'DELETE',
"_token": token,
},
success: function ()
{
console.log("it Work");
$('#'+id).hide();
}
});

});

        </script>
    </div>
</div>




        <form role="form" action="<?php echo e(route('tour.update',$tour->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PATCH')); ?>


<div class="row clealfix">
            <div class="col-sm-4">
                <div class="card">
                    <div class="header">
                        <h2><?php echo e(trans('backend.f_image')); ?></h2>
                    </div>
                    <div class="body">
                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/tour/'.$tour->f_image)); ?>"
                            data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"  id="f_image" name="f_image" >
                    </div>
                </div>
            </div>
        </div>


            <div class="row clealfix">
                <div class="col-sm-12">
                    <div class="card main-sectionx">
                        <div class="header">
                            <h2><?php echo e(trans('backend.image')); ?></h2>
                        </div>
                        <div class="body">

                            <div class="file-loading">
                                <input id="file-1" type="file" name="tour_images[]" multiple class="file"
                                    data-overwrite-initial="false" data-min-file-count="2"  >
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <script >
             $("#file-1").fileinput({
              rtl: true,

            showUpload: false,
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],

            maxFileSize:2000,
            maxFilesNum: 20,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });


            </script>



            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.title')); ?> AR</h2>
                        </div>
                        <div class="body">

                            <input  value="<?php if(old('title_ar')): ?><?php echo e(old('title_ar')); ?><?php else: ?><?php echo e($tour->title_ar); ?><?php endif; ?>" type="text" class="form-control" id="title_ar" name="title_ar">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.title')); ?> EN</h2>
                        </div>
                        <div class="body">

                            <input value="<?php if(old('title_en')): ?><?php echo e(old('title_en')); ?><?php else: ?><?php echo e($tour->title_en); ?><?php endif; ?>" type="text" class="form-control" id="title_en" name="title_en">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.title')); ?> TR</h2>
                        </div>
                        <div class="body">

                            <input value="<?php if(old('title_tr')): ?><?php echo e(old('title_tr')); ?><?php else: ?><?php echo e($tour->title_tr); ?><?php endif; ?>" type="text" class="form-control" id="title_tr" name="title_tr">

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


                            <textarea id="ckeditor1" type="text" class="form-control" name="text_ar"><?php echo e($tour->text_ar); ?></textarea>

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.text')); ?> EN</h2>
                        </div>
                        <div class="body">
                            <textarea id="ckeditor2" type="text" class="form-control" name="text_en"><?php echo e($tour->text_en); ?></textarea>


                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.text')); ?> TR</h2>
                        </div>
                        <div class="body">

                            <textarea id="ckeditor3" type="text" class="form-control" name="text_tr"><?php echo e($tour->text_tr); ?></textarea>


                        </div>
                    </div>
                </div>

            </div>

<div class="row clealfix">
    <div class="col-sm-4">
        <div class="card">
            <div class="header">
                <h2><?php echo e(trans('backend.featured')); ?> </h2>
            </div>
            <div class="body">


                <select name="featured" id="featured">
               <option <?php if($tour->featured == 1): ?> selected <?php endif; ?> value="1" ><?php echo e(trans('backend.yes')); ?></option>
                <option <?php if($tour->featured == 0): ?> selected <?php endif; ?> value="0"><?php echo e(trans('backend.no')); ?></option>

                </select>


            </div>
        </div>
    </div>

            <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.price')); ?></h2>
                        </div>
                        <div class="body">
                            <input value="<?php if(old('price')): ?><?php echo e(old('price')); ?><?php else: ?><?php echo e($tour->price); ?><?php endif; ?>" type="text"
                                class="form-control" id="price" name="price">
                        </div>
                    </div>
                </div>


</div>






            <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php echo e(trans('backend.save')); ?></button>
                <a type="button" class="btn btn-warning"
                    href="<?php echo e(route('tour.index')); ?>"><?php echo e(trans('backend.back')); ?></a>
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