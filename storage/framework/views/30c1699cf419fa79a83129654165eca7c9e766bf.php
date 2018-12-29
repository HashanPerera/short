<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="row">
        <div class="col-md-10" col-md-offset-1>
            <div class="panel panel-default">
                <h1>Display data</h1>
                <table>
                    <tr></tr>

                    <table>

                        <tr>
                            <div class="tda">
                            <td>Id</td>
                            <td>Image Name</td>
                            <td>Image</td>
                            </div>
                        </tr>
                        <?php
                        foreach($Posts as $post){
                            ?>
                            <tr>
                                <td><?php echo $post->id ?></td>
                                <td><?php echo $post->name ?></td>
                                <td><img width="100" src="<?php echo e(asset('frontEnd')); ?>/images/ <?php echo $post->post ?> alt="<?php echo $post->post ?>"></td>
                                <td></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
            </div>
        </div>
    
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>