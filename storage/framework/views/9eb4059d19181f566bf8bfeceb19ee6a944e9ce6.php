

<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e(__('Admin Profile')); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                    <li class="breadcrumb-item"><?php echo e(__('Admin Profile')); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('Update Admin Password')); ?> </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo e(route('admin.updatePassword')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Current Password')); ?> <span
                                    class="text-danger">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="old_password" value="" placeholder="<?php echo e(__('Your Current Password')); ?>">
                                    <?php if($errors->has('old_password')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('old_password')); ?> </p>
                                    <?php else: ?>
                                    <?php if($errors->first('oldPassMatch')): ?>
                                        <span class="text-danger">
                                            <?php echo e("Old password doesn't match with the existing password!"); ?>

                                        </span>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"> <?php echo e(__('New Password')); ?><span
                                    class="text-danger">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="password" value="" placeholder="<?php echo e(__('New Password')); ?>">
                                    <?php if($errors->has('password')): ?>
                                    <p class="text-danger"> <?php echo e($errors->first('password')); ?> </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label"><?php echo e(__('Confirm Password')); ?><span
                                    class="text-danger">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="password_confirmation" value="" placeholder="<?php echo e(__('Confirm Password')); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>


</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\WEB-APP\softhostLive\core\resources\views/admin/profile/changepass.blade.php ENDPATH**/ ?>