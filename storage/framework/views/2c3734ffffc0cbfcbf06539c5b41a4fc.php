

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Page Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 align-items-center">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Add Testimonial</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-default float-sm-right">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <!-- Form Card -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New Testimonial</h3>
                            </div>

                            <form action="<?php echo e(route('testimonial-submit.store')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Customer Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter customer name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Customer Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="image" accept="image/*">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write a message..." required></textarea>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane"></i> Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/admin/testimonial-form.blade.php ENDPATH**/ ?>