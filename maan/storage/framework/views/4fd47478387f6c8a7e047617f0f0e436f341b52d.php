<?php $__env->startSection('main-content'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.post')); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><?php echo e(trans('backend.dashboard')); ?></a></li>

                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('backend.post')); ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                    <a href="<?php echo e(route('post.create')); ?>" class="btn btn-sm btn-primary" title="">
                        <?php echo e(trans('backend.new')); ?></a>
                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">

                        <ul class="header-dropdown dropdown">

                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>

                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                                    <tr>
                                        <th>S. NO</th>


<th><?php echo e(trans('backend.image')); ?></th>

                                        <th><?php echo e(trans('backend.title')); ?></th>
                                        <th><?php echo e(trans('backend.text')); ?></th>
                                        <th><?php echo e(trans('backend.category')); ?></th>

                                        <th><?php echo e(trans('backend.edit')); ?></th>
                                        <th><?php echo e(trans('backend.delete')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>


                                        <td align="center"> <img style="height: 50px;width: 50px;" class="img-circle"
                                                            src="<?php echo e(URL::to('uploads/posts/')); ?>/<?php echo e($post->f_image); ?>"></td>


                                        <td><?php echo e($post->title_ar); ?></td>


                                        <td><?php echo e($post->text_ar); ?></td>
                                        <td>

                                            <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($category->name_ar); ?>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </td>



                                        <td> <a href="<?php echo e(route('post.edit',$post->id)); ?>"> <i
                                                    class="icon-pencil"></i> </a></td>
                                        <td>
                                            <form id="delete-form-<?php echo e($post->id); ?>" method="post"
                                                action="<?php echo e(route('post.destroy',$post->id)); ?>">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

                                            </form>
                                            <a href=""
                                                onclick="if(confirm('Are You sure you want to delete this')){event.preventDefault();document.getElementById('delete-form-<?php echo e($post->id); ?>').submit();}else{event.preventDefault();}">
                                                <i class="icon-trash"> </i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S. NO</th>

                                        <th><?php echo e(trans('backend.image')); ?></th>



                                        <th><?php echo e(trans('backend.title')); ?></th>
                                        <th><?php echo e(trans('backend.text')); ?></th>



                                        <th><?php echo e(trans('backend.category')); ?></th>





                                        <th><?php echo e(trans('backend.edit')); ?></th>


                                        <th><?php echo e(trans('backend.delete')); ?></th>
                                    </tr>
                                </tfoot>
                            </table>



                            </table>
                        </div>
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