
<?php $__env->startSection('title', '更新密码'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">更新密码</div>

            <div class="panel-body">
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <form class="form-horizontal" method="POST" action="<?php echo e(route('password.update')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <input type="hidden" name="token" value="<?php echo e($token); ?>">

                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <label for="email" class="col-md-4 control-label">邮箱地址：</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <label for="password" class="col-md-4 control-label">密码：</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                        <label for="password-confirm" class="col-md-4 control-label">确认密码：</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            <?php if($errors->has('password_confirmation')): ?>
                                <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                修改密码
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>