<?php $__env->startSection('content'); ?>

<h1>Create Posts</h1>

    <?php echo Form::open(['action' =>'PostsController@store', 'method' => 'POST']); ?>   
<div class="form-group">
    <?php echo e(form::label('title', 'Title')); ?>

    <?php echo e(form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

</div>
<div class="form-group">
     <?php echo e(form::label('body', 'Body')); ?>

    <?php echo e(form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

</div>

<?php echo e(form::submit('submit', ['class'=>'btn btn-primary'])); ?>

<?php echo form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>