

<?php $__env->startSection('content'); ?>

<style>
    .mw-60{
        width: 60%;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Quote Details')); ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Quote Details')); ?></li>
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
                    <h3 class="card-title"><?php echo e(__('Quote Details:')); ?></h3>
                    <div class="card-tools">
                        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-primary btn-sm">
                          <i class="fas fa-angle-double-left"></i> <?php echo e(__('Back')); ?>

                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>
                                    <?php echo e(__('Name')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->name); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Email')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->email); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Phone')); ?>

                                </th>
                                <td class="mw-60">
                                    <a href="tel:<?php echo e($quote->phone); ?>" class="btn btn-primary btn-sm">  <?php echo e(__("Call to : ")); ?> <?php echo e($quote->phone); ?></a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Country')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->country); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Budget')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->budget); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Skype ID')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->skypenumber); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('File')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php if($quote->file): ?>
                                    <a href="<?php echo e(asset('assets/front/quote/'.$quote->file)); ?>" class="btn btn-primary btn-sm inline-block">Download File</a>
                                    <?php else: ?>
                                    <?php echo e(__('No File Available')); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Status')); ?>

                                </th>
                                <td class="mw-60">
                                    <span class="
                                    btn
                                    <?php if($quote->status == 0): ?>
                                    bg-warning
                                    <?php elseif($quote->status == 1): ?>
                                    bg-primary
                                    <?php elseif($quote->status == 2): ?>
                                    bg-success
                                    <?php elseif($quote->status == 3): ?>
                                    bg-danger
                                    <?php endif; ?>

                                    btn-sm
                                    "> 
                                        <?php if($quote->status == 0): ?>
                                        Pending
                                        <?php elseif($quote->status == 1): ?>
                                        Processing
                                        <?php elseif($quote->status == 2): ?>
                                        Completed
                                        <?php elseif($quote->status == 3): ?>
                                        Rejected
                                        <?php endif; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Subject')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->subject); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Description')); ?>

                                </th>
                                <td class="mw-60">
                                    <?php echo e($quote->description); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(__('Send Mail')); ?>

                                </th>
                                <td class="mw-60">
                                    <a href="mailto:<?php echo e($quote->email); ?>" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> <?php echo e(__('Send Mail')); ?></a>
                                </td>
                            </tr>
                 
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softhostbd/public_html/core/resources/views/admin/quote/details.blade.php ENDPATH**/ ?>