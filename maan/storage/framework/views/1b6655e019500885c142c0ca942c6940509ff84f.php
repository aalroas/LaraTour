<?php if(count($errors) > 0): ?>
<?php $__currentLoopData = $errors ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p class="alert alert-danger"><?php echo e($error); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session()->has('message')): ?>
<p class="alert alert-success"><?php echo e(session('message')); ?></p>
<?php endif; ?>
