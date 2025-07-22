<x-app-layout>

    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url('{{ asset('images/testimonial_main.jpg') }}');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>Our Customar Feedbacks</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">Testimonial</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        TESTIMONIAL PAGE START
    ==============================-->
    <section class="testimonial_page mt_75 xs_mt_45 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                @foreach ($testimonials as $testimonial)
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="single_testimonial">
                            <div class="single_testimonial_img">
                                <img src="{{ asset('uploads/testimonial/' . $testimonial->image) }}" alt="testimonial"
                                    class="img-fluid w-100">
                            </div>
                            <div class="single_testimonial_text">
                                <h4>{{ $testimonial->name }}</h4>
                                <p class="designation">Client</p>
                                <p class="feedback">{{ $testimonial->message }}</p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--=============================
        TESTIMONIAL PAGE END
    ==============================-->

    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->

</x-app-layout>
