

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
    <section class="page_breadcrumb" style="background: url('<?php echo e(asset('images/faq_main.jpg')); ?>');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>frequently asked question</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        FAQ PAGE START
    ==============================-->
    <section class="faq pt_75 xs_pt_45 pb_100 xs_pb_70">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-md-8 col-lg-7 wow fadeInLeft" data-wow-duration="1s">
                    <div class="faq_area">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        01. How can OnDemand Services help me?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet,consecteturmae adipiscing elit, sed do eiusmod
                                            tempor
                                            incidi incididuntu iut labore et dolore magna duisr aliqua ut enim ad minim
                                            veniam . Lorem ipsum dolor sit amet,consecteturmae adipiscing elit, sed do
                                            eiusmod tempor incidi incididuntu iut labore et dolore magna duisr aliqua ut
                                            enim ad minim veniam . Lorem ipsum dolor sit amet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        02. Why is this such an important problem for you to fix?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet,consecteturmae adipiscing elit, sed do eiusmod
                                            tempor incidi incididuntu iut labore et dolore magna duisr aliqua ut enim ad
                                            minim veniam . Lorem ipsum dolor sit amet,consecteturmae adipiscing elit,
                                            sed do eiusmod tempor incidi incididuntu iut labore et dolore magna duisr
                                            aliqua ut enim ad minim veniam . </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        03. What is the Printing Quality?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet,consecteturmae adipiscing elit, sed do eiusmod
                                            tempor incidi incididuntu iut labore et dolore magna duisr aliqua ut enim ad
                                            minim veniam . Lorem ipsum dolor sit amet,consecteturmae adipiscing elit,
                                            sed do eiusmod tempor incidi incididuntu iut labore et dolore magna duisr
                                            aliqua ut enim ad minim veniam . </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        04. Can I request a service with an on-site consultant?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet,consecteturmae adipiscing elit, sed do eiusmod
                                            tempor incidi incididuntu iut labore et dolore magna duisr aliqua ut enim ad
                                            minim veniam . Lorem ipsum dolor sit amet,consecteturmae adipiscing elit,
                                            sed do eiusmod tempor incidi incididuntu iut labore et dolore magna duisr
                                            aliqua ut enim ad minim veniam . </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        05. Who is the service provider for On-Demand Delivery?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet,consecteturmae adipiscing elit, sed do eiusmod
                                            tempor incidi incididuntu iut labore et dolore magna duisr aliqua ut enim ad
                                            minim veniam . Lorem ipsum dolor sit amet,consecteturmae adipiscing elit,
                                            sed do eiusmod tempor incidi incididuntu iut labore et dolore magna duisr
                                            aliqua ut enim ad minim veniam . </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        06. Do I pay processing fees on delivery charges?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet,consecteturmae adipiscing elit, sed do eiusmod
                                            tempor incidi incididuntu iut labore et dolore magna duisr aliqua ut enim ad
                                            minim veniam . Lorem ipsum dolor sit amet,consecteturmae adipiscing elit,
                                            sed do eiusmod tempor incidi incididuntu iut labore et dolore magna duisr
                                            aliqua ut enim ad minim veniam . </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                        aria-expanded="false" aria-controls="collapseSeven">
                                        07. How should I prepare my business for an On-Demand ?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet,consecteturmae adipiscing elit, sed do eiusmod
                                            tempor incidi incididuntu iut labore et dolore magna duisr aliqua ut enim ad
                                            minim veniam . Lorem ipsum dolor sit amet,consecteturmae adipiscing elit,
                                            sed do eiusmod tempor incidi incididuntu iut labore et dolore magna duisr
                                            aliqua ut enim ad minim veniam . </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-8 col-lg-5 wow fadeInRight" data-wow-duration="1s">
                    <div class="faq_area_img">
                        <img src="<?php echo e(asset('images/faq_img.jpg')); ?>" alt="faq" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        FAQ PAGE END
    ==============================-->




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
<?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/faq.blade.php ENDPATH**/ ?>