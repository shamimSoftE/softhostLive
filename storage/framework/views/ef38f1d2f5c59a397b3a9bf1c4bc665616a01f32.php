<?php $__env->startSection('content'); ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo e(__('Expense')); ?></h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(url('admin/dashboard')); ?>">
                                <i class="fas fa-home"></i><?php echo e(__('Dashboard')); ?>

                            </a>
                        </li>
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

                                <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#expenseEntry">
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
                                                <a href="#" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    <?php echo e(__('Edit')); ?>

                                                </a>
                                                <form id="deleteform" class="d-inline-block" action="<?php echo e(url('admin/expense_delete', $item->id)); ?>" method="post">
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

        <!-- Modal -->
        <div class="modal fade" id="expenseEntry" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="expenseEntryLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="expenseEntryLabel">Expense Entry</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="blogCateForm" action="<?php echo e(url('admin/expense_create')); ?>" method="POST" >
                            <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <div class="row">

                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;"> Ref#<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="text" class="form-control" required name="referal_id" value="<?php echo e(old('referal_id')); ?>" placeholder="Ref...">
                                </div>

                                <div class="form-group col-md-6 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;"> Amount<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="number" step="any" class="form-control" required name="amount" value="<?php echo e(old('amount')); ?>" placeholder="">
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;"> Date<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="date" class="form-control" required name="date" value="<?php echo e(date('Y-m-d')); ?>" >
                                </div>

                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label mb-0">Category<sup  class="text-danger">*</sup></label>
                                    <select class="select2 form-control subcate <?php $__errorArgs = ['expense_category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="expense_category_id" required>
                                        <option value=""> select</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-12 mb-0">
                                    <label for="title" class="form-label" style="margin: 0;">Note</label>
                                    <input type="text" class="form-control" name="description" value="<?php echo e(old('description')); ?>" placeholder="Write your comment">
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>





    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\WEB-APP\softhostLive\resources\views/admin/account/expense.blade.php ENDPATH**/ ?>