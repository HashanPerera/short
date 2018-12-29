<?php $__env->startSection('content'); ?>

    <h1><?php echo e($post->title); ?></h1>
    
    <div>
        <?php echo $post->body; ?>

    </div>
    <hr>  
    <small>Written on <?php echo e($post->created_at); ?></small>
    <hr>
    <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-default">Edit</a>
    <a href="<?php echo e(asset('posts')); ?>" class="btn btn-default">Go Back</a>

    <?php echo Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

        <?php echo e(form::hidden('_method', 'DELETE')); ?>

        <?php echo e(form::submit('Delete', ['class'=>'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>