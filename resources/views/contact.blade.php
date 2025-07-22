<x-app-layout>

    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url('{{ asset('images/contact_main.jpg') }}');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>contact with us</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        CONTACT PAGE START
    ==============================-->
    <section class="contact mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="contact_form_area">
                <div class="row">
                    <div class="col-xl-5 col-md-6 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                        <div class="contact_info_area">
                            <div class="contact_info">
                                <h3>call</h3>
                                <p>+1347-430-9510</p>
                                <p>+9658745554002</p>
                            </div>
                            <div class="contact_info">
                                <h3>mail</h3>
                                <p>websolutionus1@gmail.com</p>
                                <p>example@gmail.com</p>
                            </div>
                            <div class="contact_info border-0 p-0 m-0">
                                <h3>location</h3>
                                <p>7232 Broadway Suite 308, Jackson Heights, 11372, NY, United States</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7 col-md-6 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                        <form class="contact_form" action="{{ route('contacts.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <h3>contact us</h3>
                            <div class="row">
                                @guest


                                    <!-- Name -->
                                    <div class="col-xl-12">
                                        <div class="contact_form_input">
                                            <span><i class="fas fa-user"></i></span>
                                            <input type="text" name="name" placeholder="Name"
                                                value="{{ old('name') }}" required>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-xl-6">
                                        <div class="contact_form_input">
                                            <span><i class="fas fa-envelope"></i></span>
                                            <input type="email" name="email" placeholder="Email"
                                                value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                @endguest

                                @auth
                                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                @endauth
                                <!-- Phone -->
                                <div class="col-xl-6">
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                        <input type="text" name="phone" placeholder="Phone"
                                            value="{{ old('phone') }}" required>
                                    </div>
                                </div>

                                <!-- Subject -->
                                <div class="col-xl-12">
                                    <div class="contact_form_input">
                                        <span><i class="fas fa-book"></i></span>
                                        <input type="text" name="subject" placeholder="Subject"
                                            value="{{ old('subject') }}" required>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-xl-12">
                                    <div class="contact_form_input textarea">
                                        <span><i class="fas fa-pen"></i></span>
                                        <textarea name="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-xl-12">
                                    <button class="common_btn" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact_map_area">
                <div class="row mt_100 xs_mt_70">
                    <div class="col-12 wow fadeInUp" data-wow-duration="1s">
                        <div class="contact_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29199.78758207035!2d90.43684581929195!3d23.819543211524437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara%20Residential%20Area%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1667021568123!5m2!1sen!2sbd"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        CONTACT PAGE END
    ==============================-->



    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->


</x-app-layout>
