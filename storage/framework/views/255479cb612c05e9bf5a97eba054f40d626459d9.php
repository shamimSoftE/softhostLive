<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo e(__('Product Categories')); ?> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-home"></i><?php echo e(__('Home')); ?></a></li>
            <li class="breadcrumb-item"><?php echo e(__('Products')); ?></li>
            <li class="breadcrumb-item"><?php echo e(__('Categories')); ?></li>
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
                        <h3 class="card-title mt-1"><?php echo e(__('Product Categories List')); ?></h3>
                        <div class="card-tools d-flex">
                            <div class="d-inline-block mr-4">
                                <select class="form-control lang" id="languageSelect" data="<?php echo e(url()->current() . '?language='); ?>">
                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($lang->code); ?>" <?php echo e($lang->code == request()->input('language') ? 'selected' : ''); ?> ><?php echo e($lang->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <form class="d-inline-block mr-3" action="<?php echo e(route('back.bulk.delete')); ?>" method="get">
                                <input type="hidden" value="" name="ids[]" id="bulk_delete">
                                <input type="hidden" value="product-category" name="table">
                                <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> <?php echo e(__('Bulk Delete')); ?></button>
                            </form>
    
                            <a href="<?php echo e(route('admin.product.category.add')); ?>" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> <?php echo e(__('Add Category')); ?>

                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                    <table id="idtable" class="table table-bordered table-striped data_table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" data-target="product-category-bulk-delete" class="bulk_all_delete"></th>
                                <th><?php echo e(__('Image')); ?></th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Popular')); ?></th>
                                <th><?php echo e(__('Featured')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                                <th><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $pcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="product-category-bulk-delete">
                                <td>
                                    <input type="checkbox" class="bulk-item" value="<?php echo e($category->id); ?> ">
                                </td>
                                <td>
                                    <img class="w-80" src="<?php echo e(asset('assets/front/img/'.$category->image)); ?>" alt="">
                                </td>
                                <td>
                                    <?php echo e($category->name); ?>

                                </td>
                                <td>
                                    <form id="popularStatusForm<?php echo e($category->id); ?>" class="d-inline-block" action="<?php echo e(route('admin.product.category.makePopular')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>">
                                        <select class="form-control form-control-sm
                                        <?php if($category->is_popular == 1): ?>
                                          bg-warning
                                        <?php else: ?> 
                                          bg-info
                                        <?php endif; ?>
                                        " name="is_popular" onchange="document.getElementById('popularStatusForm<?php echo e($category->id); ?>').submit();">
                                          <option value="0" <?php echo e($category->is_popular == '0' ? 'selected' : ''); ?>>Disable</option>
                                          <option value="1" <?php echo e($category->is_popular == '1' ? 'selected' : ''); ?>>Enable</option>
                                        </select>
                                      </form>
                                </td>
                                <td>
                                    <form id="featuredStatusForm<?php echo e($category->id); ?>" class="d-inline-block" action="<?php echo e(route('admin.product.category.makeFeatured')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>">
                                        <select class="form-control form-control-sm
                                        <?php if($category->is_feature == 1): ?>
                                          bg-warning
                                        <?php else: ?> 
                                          bg-info
                                        <?php endif; ?>
                                        " name="is_feature" onchange="document.getElementById('featuredStatusForm<?php echo e($category->id); ?>').submit();">
                                          <option value="0" <?php echo e($category->is_feature == '0' ? 'selected' : ''); ?>>Disable</option>
                                          <option value="1" <?php echo e($category->is_feature == '1' ? 'selected' : ''); ?>>Enable</option>
                                        </select>
                                      </form>
                                </td>
                                <td>
                                    <?php if($category->status == 1): ?>
                                        <span class="badge badge-success"><?php echo e(__('Publish')); ?></span>
                                    <?php else: ?>
                                        <span class="badge badge-warning"><?php echo e(__('Unpublish')); ?></span>
                                    <?php endif; ?>
                                </td>
                              
                                <td>
                                    <a href="<?php echo e(route('admin.product.category.edit', $category->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i><?php echo e(__('Edit')); ?></a>

                                    <form  id="deleteform" class="d-inline-block" action="<?php echo e(route('admin.product.category.delete', $category->id )); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softhostbd/public_html/core/resources/views/admin/product/product-category/index.blade.php ENDPATH**/ ?>