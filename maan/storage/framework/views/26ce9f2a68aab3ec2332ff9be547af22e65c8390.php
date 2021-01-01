<?php $__env->startSection('main-content'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.contact_forms')); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><?php echo e(trans('backend.dashboard')); ?></a></li>

                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(trans('backend.contact_forms')); ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">

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
                            <th> <?php echo e(trans('backend.Name')); ?> </th>

                            <th> <?php echo e(trans('backend.Subject')); ?></th>
                            <th> <?php echo e(trans('backend.Email')); ?></th>
                            <th> <?php echo e(trans('backend.Phone')); ?></th>
                            <th> <?php echo e(trans('backend.form_type')); ?></th>
                            <th><?php echo e(trans('backend.Show')); ?></th>
                            <th><?php echo e(trans('backend.Delete')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->index + 1); ?></td>


                            <td><?php echo e($contact->name); ?></td>

                            <td><?php echo e($contact->subject); ?></td>
                            <td><?php echo e($contact->email); ?></td>
                            <td><?php echo e($contact->phone); ?></td>
                            <td><?php echo e($contact->form_type); ?></td>
                            <td> <a href="<?php echo e(URL('contact_forms/show',$contact->id)); ?>"> <span class="fa fa-eye">
                                    </span></a></td>
                            <td>
                                <form id="delete-form-<?php echo e($contact->id); ?>" method="post"
                                    action="<?php echo e(URL('contact_forms',$contact->id)); ?>" style="display: none">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('DELETE')); ?>

                                </form>
                                <a href=""
                                    onclick="if(confirm('Are You sure you want to delete this')){event.preventDefault();document.getElementById('delete-form-<?php echo e($contact->id); ?>').submit();}else{event.preventDefault();}"><span
                                        class="icon-trash">
                                    </span></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                  <tfoot>
                    <tr>
                        <th>S. NO</th>
                        <th><?php echo e(trans('backend.name')); ?> </th>
                        <th><?php echo e(trans('backend.subject')); ?> </th>
                        <th><?php echo e(trans('backend.email')); ?> </th>
                        <th><?php echo e(trans('backend.phone')); ?></th>
                        <th><?php echo e(trans('backend.form_type')); ?></th>
                        <th><?php echo e(trans('backend.show')); ?></th>
                        <th><?php echo e(trans('backend.delete')); ?></th>
                    </tr>
                </tfoot>
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