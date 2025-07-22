

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Page Header -->
        <section class="content-header">
            <div class="container d-flex justify-content-between align-items-center">
                <h1 class="mb-0">All Users</h1>
                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </section>

        <!-- Main content -->
        <main class="app-main flex-grow-1 p-3">
            
            
            <section class="menu_page xs_mt_70 mb_20 xs_mb_70">
                <div class="container">
                    <form method="GET" action="<?php echo e(route('admin.user.index')); ?>">
                        <div class="row align-items-end">
                            
                            <div class="col-lg-4 col-md-4 mb-2">
                                <div class="menu_search">
                                    <input type="text" name="search" class="form-control"
                                        placeholder="Search name or email" value="<?php echo e(request('search')); ?>">
                                </div>
                            </div>

                            
                            <div class="col-lg-2 col-md-2 mb-2">
                                <select name="role_id" class="form-control">
                                    <option value="">-- Select Role --</option>
                                    <option value="1" <?php echo e(request('role_id') == 1 ? 'selected' : ''); ?>>Admin
                                    </option>
                                    <option value="2" <?php echo e(request('role_id') == 2 ? 'selected' : ''); ?>>User</option>
                                    
                                </select>
                            </div>

                            
                            <div class="col-lg-3 col-md-3 mb-2">
                                <input type="date" name="date" class="form-control" value="<?php echo e(request('date')); ?>">
                            </div>

                            
                            <div class="col-lg-3 col-md-3 mb-2">
                                <div class="d-flex gap-2 h-100">
                                    <button class="common_btn w-50" type="submit">Search</button>
                                    <a href="<?php echo e(route('admin.user.index')); ?>"
                                        class="common_btn btn btn-secondary w-50 text-white text-center">Reset</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            
            <!--begin::App Content-->
            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title">All Registered Users</h3>
                </div>
                <div class="card-body p-0">
                    <div style="max-height: calc(100vh - 300px); overflow-y: auto;">
                        <table class="table table-bordered table-hover align-middle mb-0">
                            <thead class="table-dark sticky-top" style="top: 0; z-index: 1;">
                                <tr>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role ID</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->user_id); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->role_id); ?></td>
                                        <td><?php echo e($user->created_at->format('Y-m-d H:i')); ?></td>
                                        <td><?php echo e($user->updated_at->format('Y-m-d H:i')); ?></td>
                                        <td>
                                            <div class="d-flex gap-1">

                                                <a href="<?php echo e(url('admin/users/edit/' . $user->user_id)); ?>"
                                                    class="btn btn-sm btn-info">Edit</a>

                                                <form action="<?php echo e(route('admin.users.destroy', $user->user_id)); ?>"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure to delete this user?')"
                                                    style="display: inline-block;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mb-2 mt-5">
                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-sm btn-secondary d-inline-block" style="width: auto;">
                    ← Back
                </a>
            </div>
            <!--end::App Content-->

        </main>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlte', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/admin/users/all_users.blade.php ENDPATH**/ ?>