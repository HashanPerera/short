<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <a class="btn btn-primary" href="<?php echo e(asset('posts/create')); ?>">Create Posts</a>   
                    <br><br><h3> Your Blog Posts</h3>
                    <?php if(count($posts) > 0): ?>  
                    <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                    <th></th>
                            </tr>
                                        
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->title); ?></td>
                                <td><a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <?php echo Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                                    <?php echo e(form::hidden('_method', 'DELETE')); ?>

                                    <?php echo e(form::submit('Delete', ['class'=>'btn btn-danger'])); ?>

                                    <?php echo Form::close(); ?>                                    
                                </td>
                            </tr>
                                    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>    
                        <?php else: ?>
                            <p>You have no any Post.!</p>
                                               
                        <?php endif; ?>  
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>