

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
    <section class="page_breadcrumb" style="background: url(images/privacy_policy_main.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>privacy policy</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--================================
        PRIVACY POLICY START
    =================================-->
    <section class="terms_condition mt_90 xs_mt_60 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="career_det_text">
                        <h3>Your agreement:</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam
                            doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit porro
                            consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime nostrum
                            quod
                            ipsum, quibusdam, a omnis quam aperiam pariatur consectetur est perspiciatis. Laboriosam
                            praesentium id asperiores cumque debitis, ex adipisci? Impedit temporibus labore dolores
                            iusto
                            error nobis, porro hic iure placeat, sint esse corporis, quibusdam adipisci magni non minus
                            quo
                            quae repudiandae earum facere eum ad qui voluptatum eaque.</p>
                        <h3>Main responsibilities:</h3>
                        <ul>
                            <li>Solve the problem with code.</li>
                            <li>Work on Client's projects & In-house products as well.</li>
                            <li>Analyze the product's needs and find out the best solutions.</li>
                            <li>Work as a team and lead the junior developer.</li>
                            <li>Collaborate with other teams by providing code review and technical direction.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit
                            porro consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime
                            nostrum quod ipsum, quibusdam, a omnis quam aperiam pariatur</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam
                            doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit porro
                            consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime nostrum
                            quod
                            ipsum, quibusdam, a omnis quam aperiam pariatur consectetur est perspiciatis. Laboriosam
                            praesentium id asperiores cumque debitis, ex adipisci? Impedit temporibus labore dolores
                            iusto
                            error nobis, porro hic iure placeat, sint esse corporis, quibusdam adipisci magni non minus
                            quo
                            quae repudiandae earum facere eum ad qui voluptatum eaque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit
                            porro consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime
                            nostrum quod ipsum, quibusdam, a omnis quam aperiam pariatur</p>
                        <ul>
                            <li>Solve the problem with code.</li>
                            <li>Work on Client's projects & In-house products as well.</li>
                            <li>Analyze the product's needs and find out the best solutions.</li>
                            <li>Work as a team and lead the junior developer.</li>
                            <li>Collaborate with other teams by providing code review and technical direction.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam
                            doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit porro
                            consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime nostrum
                            quod
                            ipsum, quibusdam, a omnis quam aperiam pariatur consectetur est perspiciatis. Laboriosam
                            praesentium id asperiores cumque debitis, ex adipisci? Impedit temporibus labore dolores
                            iusto
                            error nobis, porro hic iure placeat, sint esse corporis, quibusdam adipisci magni non minus
                            quo
                            quae repudiandae earum facere eum ad qui voluptatum eaque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, repellendus! Nesciunt fugit
                            aliquam doloremque velit ullam quos ad et magnam aperiam eum vero unde cum reprehenderit
                            porro consectetur voluptatum, veritatis blanditiis. Repellendus veritatis fugit maxime
                            nostrum quod ipsum, quibusdam, a omnis quam aperiam pariatur</p>
                        <a href="index.html" class="common_btn">go home</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================================
        PRIVACY POLICY END
    =================================-->


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
<?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/privacy_policy.blade.php ENDPATH**/ ?>