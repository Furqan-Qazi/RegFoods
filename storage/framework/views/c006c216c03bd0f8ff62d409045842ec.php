

<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Page Header -->
        <section class="content-header">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <h1>Edit Blog</h1>
                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <?php if(session('success')): ?>
                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>

                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card card-primary shadow">
                            <div class="card-header">
                                <h3 class="card-title mb-0">Update Blog Details</h3>
                            </div>

                            <form action="<?php echo e(route('admin.blogs.update', $blog->blog_id)); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Blog Title</label>
                                        <input type="text" name="title" class="form-control"
                                            value="<?php echo e($blog->title); ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            value="<?php echo e($blog->slug); ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea name="content" rows="5" class="form-control" required><?php echo e($blog->content); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Blog Image <small class="text-muted">(Leave blank to keep
                                                current)</small></label>
                                        <input type="file" name="image" class="form-control">
                                        <?php if($blog->image): ?>
                                            <div class="mt-2">
                                                <img src="<?php echo e(asset('uploads/blogs/' . $blog->image)); ?>" width="120"
                                                    class="img-thumbnail">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-save"></i> Update Blog
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/admin/blogs/edit_blogs.blade.php ENDPATH**/ ?>