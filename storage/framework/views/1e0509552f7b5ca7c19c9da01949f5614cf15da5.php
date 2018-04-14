<?php $__env->startSection('title', $user->name); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="col-md-12">
                <div class="col-md-offset-2 col-md-8">
                    <section class="user_info">
                        <?php echo $__env->make('shared._user_info', ['user' => $user], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>