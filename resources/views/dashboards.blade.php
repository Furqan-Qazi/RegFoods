<x-app-layout>

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
                                <li><a class="active" href="{{ route('dashboards') }}"><span><i
                                                class="fas fa-user"></i></span>
                                        Parsonal Info</a></li>
                                <li><a href="{{ route('dashboard_address') }}"><span><i
                                                class="fas fa-user"></i></span>address</a>
                                </li>
                                <li><a href="{{ route('dashboard_order') }}"><span><i
                                                class="fas fa-bags-shopping"></i></span>
                                        Order</a></li>
                                <li><a href="{{ route('dashboard_wishlist') }}"><span><i
                                                class="far fa-heart"></i></span>
                                        wishlist</a></li>
                                <li><a href="{{ route('dashboard_review') }}"><span><i class="fas fa-star"></i></span>
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


</x-app-layout>
