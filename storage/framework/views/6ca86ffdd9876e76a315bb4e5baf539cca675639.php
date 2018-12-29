<?php $__env->startSection('content'); ?>

    <h1>Posts</h1>
        <?php if(count($posts) > 1): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul class="list-group">
                    <li class="list-group-item"><h3><a href="posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
                    <small>Written on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                    </li><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
           <?php echo e($posts->links()); ?>

        <?php else: ?>
            <p>No posts found</p>
        <?php endif; ?>
    
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>