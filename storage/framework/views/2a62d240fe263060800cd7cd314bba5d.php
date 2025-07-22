

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Page header -->
        <section class="content-header">
            <div class="container-fluid">
                <h1>Add Item</h1>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form method="POST" action="<?php echo e(route('item-submit.store')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">New Item Form</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">

                                <!-- Item Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Item Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter item name" required>
                                    </div>
                                </div>

                                <!-- Price -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" name="price" step="0.01" class="form-control"
                                            placeholder="Enter price" required>
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" rows="4" placeholder="Enter item description"></textarea>
                                    </div>
                                </div>

                                <!-- Image -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>

                                <!-- Category -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select name="category_id" class="form-control" required>
                                            <option value="" disabled selected>Select category</option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->category_id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer d-flex justify-content-between">
                            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary">← Back</a>
                            <button type="submit" class="btn btn-success">Add Item</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/admin/item-form.blade.php ENDPATH**/ ?>