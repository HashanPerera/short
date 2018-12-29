<?php $__env->startSection('content'); ?>
 <h1><?php echo e($title); ?></h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.index1', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>