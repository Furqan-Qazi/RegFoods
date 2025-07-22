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

    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url(images/counter_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>user dashboard</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=========================
        DASHBOARD START
    ==========================-->
    <section class="dashboard mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="dashboard_area">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="dashboard_menu">
                            <div class="dasboard_header">
                                <div class="dasboard_header_img">
                                    <img src="images/testimonial_img_3.jpg" alt="user" class="img-fluid w-100">
                                    <label for="upload"><i class="far fa-camera"></i></label>
                                    <input type="file" id="upload" hidden>
                                </div>
                                <h2>hasib ahmed</h2>
                            </div>
                            <ul>
                                <li><a class="active" href="<?php echo e(route('dashboards')); ?>"><span><i
                                                class="fas fa-user"></i></span>
                                        Parsonal Info</a></li>
                                <li><a href="<?php echo e(route('dashboard_address')); ?>"><span><i
                                                class="fas fa-user"></i></span>address</a>
                                </li>
                                <li><a href="<?php echo e(route('dashboard_order')); ?>"><span><i
                                                class="fas fa-bags-shopping"></i></span>
                                        Order</a></li>
                                <li><a href="<?php echo e(route('dashboard_wishlist')); ?>"><span><i
                                                class="far fa-heart"></i></span>
                                        wishlist</a></li>
                                <li><a href="<?php echo e(route('dashboard_review')); ?>"><span><i class="fas fa-star"></i></span>
                                        Reviews</a>
                                </li>
                                <li><a href="dashboard_change_password.html"><span><i
                                                class="fas fa-user-lock"></i></span> Change Password</a></li>
                                <li><a href="#"><span> <i class="fas fa-sign-out-alt"></i></span> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 wow fadeInUp" data-wow-duration="1s">
                        <div class="dashboard_content">
                            <div class="dashboard_body">
                                <h3>Parsonal Information
                                    <a class="dash_add_new_address" href="dashboard_info_edit.html">edit</a>
                                </h3>

                                <div class="dash_personal_info">
                                    <div class="personal_info_text">
                                        <p><span>Name:</span> Hasib Ahmed</p>
                                        <p><span>Email:</span> hasibahmed@gmail.com</p>
                                        <p><span>Phone:</span> 023 434 54354</p>
                                        <p><span>Address:</span> 7232 Broadway Suite 308, Jackson Heights,
                                            11372, NY, United States </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        DASHBOARD END
    ==========================-->



    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->


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
<?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/dashboards.blade.php ENDPATH**/ ?>