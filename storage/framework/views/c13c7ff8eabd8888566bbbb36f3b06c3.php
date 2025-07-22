

<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <h1>All Categories</h1>
                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-sm btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Search Card -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Search Filters</h3>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="<?php echo e(route('admin.all_category')); ?>">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" name="search" class="form-control"
                                            value="<?php echo e(request('search')); ?>" placeholder="Search by category name">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Created Date</label>
                                        <input type="date" name="date" class="form-control"
                                            value="<?php echo e(request('date')); ?>">
                                    </div>
                                </div>

                                <div class="col-md-3 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary mr-2">Search</button>
                                    <a href="<?php echo e(route('admin.all_category')); ?>" class="btn btn-secondary">Reset</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Category List Card -->
                <div class="card">
                    <div class="card-header bg-dark">
                        <h3 class="card-title text-white">Category List</h3>
                    </div>

                    <div class="card-body table-responsive p-0" style="max-height: 70vh;">
                        <table class="table table-hover text-nowrap table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Category ID</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($category->category_id); ?></td>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->created_at->format('Y-m-d H:i')); ?></td>
                                        <td><?php echo e($category->updated_at->format('Y-m-d H:i')); ?></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <a href="<?php echo e(route('admin.categories.edit', $category->category_id)); ?>"
                                                    class="btn btn-info"><i class="fas fa-edit"></i></a>

                                                <form
                                                    action="<?php echo e(route('admin.categories.destroy', $category->category_id)); ?>"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this category?')">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">No categories found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php if(method_exists($categories, 'links')): ?>
                        <div class="card-footer clearfix">
                            <div class="float-right">
                                <?php echo e($categories->links()); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/admin/category/all_category.blade.php ENDPATH**/ ?>