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

                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('backend.sliders')); ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                    <a href="<?php echo e(route('roocats.create')); ?>" class="btn btn-sm btn-primary" title="">
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
                             <th><?php echo e(trans('backend.name')); ?>AR</th>
                            <th><?php echo e(trans('backend.name')); ?>EN</th>
                            <th><?php echo e(trans('backend.name')); ?>TR</th>
                            <th><?php echo e(trans('backend.slug')); ?></th>
                            <th><?php echo e(trans('backend.edit')); ?></th>


                            <th><?php echo e(trans('backend.delete')); ?></th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $porcatsx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roocats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>


                                        <td><?php echo e($roocats->name_ar); ?></td>

                                        <td><?php echo e($roocats->name_en); ?></td>

                                        <td><?php echo e($roocats->name_tr); ?></td>
                                        <td><?php echo e($roocats->slug); ?></td>





                                        <td> <a href="<?php echo e(route('roocats.edit',$roocats->id)); ?>"> <i
                                                    class="icon-pencil"></i> </a></td>
                                        <td>
                                            <form id="delete-form-<?php echo e($roocats->id); ?>" method="post"
                                                action="<?php echo e(route('roocats.destroy',$roocats->id)); ?>">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

                                            </form>
                                            <a href=""
                                                onclick="if(confirm('Are You sure you want to delete this')){event.preventDefault();document.getElementById('delete-form-<?php echo e($roocats->id); ?>').submit();}else{event.preventDefault();}">
                                                <i class="icon-trash"> </i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S. NO</th>


                                        <th><?php echo e(trans('backend.name')); ?>AR</th>
                                        <th><?php echo e(trans('backend.name')); ?>EN</th>
                                        <th><?php echo e(trans('backend.name')); ?>TR</th>
                                        <th><?php echo e(trans('backend.slug')); ?></th>
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