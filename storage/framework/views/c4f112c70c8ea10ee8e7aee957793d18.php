<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="page_breadcrumb" style="background: url('<?php echo e(asset('images/breadcrumb_bg.jpg')); ?>');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>blog details</h1>
                    <ul>
                        <li><a href="<?php echo e(route('home')); ?>">home</a></li>
                        <li><a href="#">blog details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_details mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog_det_area">
                        <!-- Blog Image -->
                        <div class="blog_details_img wow fadeInUp" data-wow-duration="1s">
                            <img src="<?php echo e(asset('uploads/blogs/' . $blog->image)); ?>" alt="<?php echo e($blog->title); ?>"
                                class="img-fluid w-100">
                        </div>

                        <!-- Blog Text -->
                        <div class="blog_details_text wow fadeInUp" data-wow-duration="1s">
                            <ul class="details_bloger d-flex flex-wrap">
                                <li><i class="far fa-user"></i> By <?php echo e($blog->user->name ?? 'Unknown'); ?></li>
                                <li><i class="far fa-comment-alt-lines"></i> <?php echo e($feedbacks->count()); ?> Comments</li>
                                <li><i class="far fa-calendar-alt"></i> <?php echo e($blog->created_at->format('d M Y')); ?></li>
                            </ul>
                            <h2><?php echo e($blog->title); ?></h2>
                            <p><?php echo $blog->content; ?></p>
                        </div>
                    </div>

                    <!-- Comments -->
                    <div class="comment mt_50 wow fadeInUp" data-wow-duration="1s">
                        <h4><?php echo e($feedbacks->count()); ?> Comments</h4>
                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single_comment mb-4 d-flex">
                                <img src="<?php echo e(asset('uploads/feedback_user/feedbacker.jpg')); ?>" alt="review"
                                    class="img-fluid me-3" style="width: 60px; height: 60px; border-radius: 50%;">
                                <div class="single_comm_text">
                                    <h5><?php echo e($feedback->name); ?>

                                        <span
                                            class="text-muted small ms-2"><?php echo e($feedback->created_at->format('d M Y')); ?></span>
                                    </h5>
                                    <p><?php echo e($feedback->feedback); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- Comment Form -->
                    <div class="comment_input mt_50 wow fadeInUp" data-wow-duration="1s">
                        <h4>Leave A Comment</h4>
                        <form action="<?php echo e(route('feedback.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <?php if(auth()->guard()->guest()): ?>
                                    <div class="col-xl-6 col-md-6">
                                        <label>Name</label>
                                        <div class="contact_form_input">
                                            <span><i class="fas fa-user"></i></span>
                                            <input type="text" placeholder="Name" name="name"
                                                value="<?php echo e(old('name')); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <label>Email</label>
                                        <div class="contact_form_input">
                                            <span><i class="fas fa-envelope"></i></span>
                                            <input type="email" placeholder="Mail" name="email"
                                                value="<?php echo e(old('email')); ?>" required>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="col-xl-12">
                                    <label>Comment</label>
                                    <div class="contact_form_input textarea">
                                        <span><i class="fas fa-pen"></i></span>
                                        <textarea rows="5" placeholder="Your Comment" name="feedback" required><?php echo e(old('feedback')); ?></textarea>
                                    </div>
                                    <button type="submit" class="common_btn mt_20">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div id="sticky_sidebar">
                        <div class="blog_categori blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Category</h3>
                            <ul>
                                <li><a href="#"><?php echo e($blog->item->category->name ?? 'Uncategorized'); ?></a></li>
                            </ul>
                        </div>

                        <div class="blog_tags blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Tags</h3>
                            <ul>
                                <li><a href="#"><?php echo e($blog->item->name); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/blog_details.blade.php ENDPATH**/ ?>