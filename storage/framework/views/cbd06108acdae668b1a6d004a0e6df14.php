

<?php $__env->startSection('content'); ?>
    

    
    <form method="POST" action="<?php echo e(route('category-submit.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <h1>Category FORM</h1>
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>

    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/admin/category-form.blade.php ENDPATH**/ ?>