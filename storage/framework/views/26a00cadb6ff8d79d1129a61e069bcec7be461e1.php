<?php $__env->startSection('content'); ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Expense')); ?></h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i
                                    class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
                        <li class="breadcrumb-item"><?php echo e(__('Expense')); ?></li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(__('Expense List:')); ?></h3>
                            <div class="card-tools d-flex">
                                
                                <a href="<?php echo e(route('admin.product.add')); ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> <?php echo e(__('Add Expense')); ?>

                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="idtable" class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        
                                        <th><?php echo e(__('Ref#')); ?></th>
                                        <th><?php echo e(__('Category')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                        
                                        <th><?php echo e(__('Date')); ?></th>
                                        <th><?php echo e(__('Note')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="product-bulk-delete">
                                            
                                            
                                            <td>
                                                <?php echo e($item->referal_id); ?>

                                            </td>
                                           
                                            <td>
                                                <?php echo e(isset($item->expenseCategory) ? $item->expenseCategory->name : '-'); ?>

                                            </td>
                                            <td> <?php echo e($item->amount); ?> </td>
                                            <td> <?php echo e($item->date); ?> </td>

                                            <td>
                                               <?php echo e($item->description); ?>

                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('admin.product.edit', $item->id)); ?>"
                                                    class="btn btn-info btn-sm"><i
                                                        class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>
                                                <form id="deleteform" class="d-inline-block"
                                                    action="<?php echo e(route('admin.product.delete', $item->id)); ?>"
                                                    method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" id="delete">
                                                        <i class="fas fa-trash"></i><?php echo e(__('Delete')); ?>

                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\WEB-APP\softhostLive\resources\views/admin/expense/index.blade.php ENDPATH**/ ?>