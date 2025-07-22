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
    <section class="page_breadcrumb" style="background: url('<?php echo e(asset('images/about_main.jpg')); ?>');">

        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>about us</h1>
                    <ul>
                        <li><a href="/">home</a></li>
                        <li><a>about us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="about_us mt_100 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_us_img">
                        <div class="img">
                            <img src="<?php echo e(asset('images/chefs_about.jpg')); ?>" alt="about us" class="img-fluid w-100">
                        </div>
                        <h3>12+ <span>Years experience</span></h3>
                        <p>At RegFood, we believe food is more than just a meal — it"s nourishment, comfort,
                            and connection. With over 12 years of experience in delivering healthy and delicious food,
                            <span>jhon deo</span>
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="section_heading mb_25">
                        <h4>About Company</h4>
                        <h2>Helathy Foods Provider</h2>
                    </div>
                    <div class="about_us_text">
                        <p>We specialize in fresh, nutritious, and flavorful meals — whether it’s for your family dinner
                            or your corporate lunch. Every dish is crafted with love, using the finest ingredients and
                            hygienic practices.</p>
                        <ul>
                            <li>
                                <h4>trusted partner</h4>
                                <p>We work with certified suppliers to ensure every bite you eat is safe, fresh, and
                                    flavorful..</p>
                            </li>
                            <li>
                                <h4>first Delivery</h4>
                                <p>Your time matters. That’s why we offer lightning-fast delivery, right to your
                                    doorstep..</p>
                            </li>
                            <li>
                                <h4>secure payment</h4>
                                <p>Multiple secure payment options to make your experience smooth and worry-free.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission mt_100 xs_mt_70" style="background: url('<?php echo e(asset('images/about_goal.jpg')); ?>');">
        <div class="mission_overlay pt_70 xs_pt_40 pb_100 xs_pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-10 col-lg-7">
                        <div class="mission_text">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-bullseye-arrow"></i>
                                    </div>
                                    <div class="text">
                                        <h4>vision</h4>
                                        <p>To become the go-to brand for healthy and convenient food across the region.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-lightbulb-on"></i>
                                    </div>
                                    <div class="text">
                                        <h4>mission</h4>
                                        <p>To serve fresh, wholesome meals while promoting a healthy lifestyle for every
                                            customer.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-gem"></i>
                                    </div>
                                    <div class="text">
                                        <h4>goals</h4>
                                        <p>Maintain top-tier food quality

                                            Deliver exceptional customer service

                                            Expand to new cities with the same level of excellence.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_choose mt_100 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="section_heading mb_25">
                        <h4>Why choose us</h4>
                        <h2>Why we are the best</h2>
                    </div>
                    <div class="about_choose_text">
                        <p>We combine culinary passion, premium ingredients, and customer-first service to give you the
                            ultimate food experience.</p>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="about_choose_text_box">
                                    <span><i class="fas fa-burger-soda"></i></span>
                                    <h4>Fresh food</h4>
                                    <p>We use only farm-fresh ingredients, handpicked daily for maximum nutrition and
                                        taste.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="about_choose_text_box">
                                    <span><i class="fal fa-truck"></i></span>
                                    <h4>Fast Delivery</h4>
                                    <p>Your meals arrive hot and on time, always.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="about_choose_text_box">
                                    <span><i class="fas fa-file-certificate"></i></span>
                                    <h4>Quality Maintain</h4>
                                    <p>Strict hygiene and quality checks at every step — from kitchen to your plate.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="about_choose_text_box">
                                    <span><i class="fas fa-headset"></i></span>
                                    <h4>24/7 Service</h4>
                                    <p>Have a question or concern? We’re just a call or click away, anytime.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5">
                    <div class="about_choose_img">
                        <img src="<?php echo e(asset('images/delivery.jpg')); ?>" alt="about us" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter_part mt_100 xs_mt_70" style="background: url('<?php echo e(asset('images/about_vision.jpg')); ?>');">
        <div class="counter_overlay pt_120 xs_pt_90 pb_100 xs_pb_0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-lg-3">
                        <div class="single_counter">
                            <div class="text">
                                <h2 class="counter">85,000</h2>
                                <span><i class="fas fa-user"></i></span>
                            </div>
                            <p>customer serve</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3">
                        <div class="single_counter">
                            <div class="text">
                                <h2 class="counter">120</h2>
                                <span><i class="fas fa-hat-chef"></i></span>
                            </div>
                            <p>experience chef</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3">
                        <div class="single_counter">
                            <div class="text">
                                <h2 class="counter">72,000</h2>
                                <span><i class="fas fa-users"></i></span>
                            </div>
                            <p>happy customer</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3">
                        <div class="single_counter">
                            <div class="text">
                                <h2 class="counter">30</h2>
                                <span><i class="fas fa-trophy"></i></span>
                            </div>
                            <p>winning award</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial pt_95 xs_pt_65 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="section_heading mb_20">
                        <h4>testimonial</h4>
                        <h2>our customar feedbacks</h2>
                    </div>
                </div>
            </div>

            <div class="row testi_slider">
                <div class="col-xl-6">
                    <?php if($latestTestimonial): ?>
                        <div class="single_testimonial">
                            <div class="single_testimonial_img">
                                <img src="<?php echo e(asset('uploads/testimonial/' . $latestTestimonial->image)); ?>"
                                    alt="testimonial" class="img-fluid w-100">
                            </div>
                            <div class="single_testimonial_text">
                                <h4><?php echo e($latestTestimonial->name); ?></h4>
                                <p class="designation">Client</p>
                                <p class="feedback"><?php echo e($latestTestimonial->message); ?></p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                        </div>
                    <?php else: ?>
                        <p>No testimonial available.</p>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </section>

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
<?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/about.blade.php ENDPATH**/ ?>