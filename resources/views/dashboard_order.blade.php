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
                                <li><a href="dashboard.html"><span><i class="fas fa-user"></i></span> Parsonal Info</a>
                                </li>
                                <li><a href="dashboard_address.html"><span><i class="fas fa-user"></i></span>address</a>
                                </li>
                                <li><a class="active" href="dashboard_order.html"><span><i
                                                class="fas fa-bags-shopping"></i></span>
                                        Order</a></li>
                                <li><a href="dashboard_wishlist.html"><span><i class="far fa-heart"></i></span>
                                        wishlist</a></li>
                                <li><a href="dashboard_review.html"><span><i class="fas fa-star"></i></span> Reviews</a>
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
                                <h3>order list</h3>
                                <div class="dashboard_order">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr class="t_header">
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>#2545758745</h5>
                                                    </td>
                                                    <td>
                                                        <p>July 16, 2022</p>
                                                    </td>
                                                    <td>
                                                        <span class="complete">Complated</span>
                                                    </td>
                                                    <td>
                                                        <h5>$560</h5>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html">View Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>#2457945235</h5>
                                                    </td>
                                                    <td>
                                                        <p>jan 21, 2021</p>
                                                    </td>
                                                    <td>
                                                        <span class="complete">complete</span>
                                                    </td>
                                                    <td>
                                                        <h5>$654</h5>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html">View Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>#2456875648</h5>
                                                    </td>
                                                    <td>
                                                        <p>July 11, 2020</p>
                                                    </td>
                                                    <td>
                                                        <span class="active">active</span>
                                                    </td>
                                                    <td>
                                                        <h5>$440</h5>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html">View Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>#7896542130</h5>
                                                    </td>
                                                    <td>
                                                        <p>July 16, 2022</p>
                                                    </td>
                                                    <td>
                                                        <span class="active">active</span>
                                                    </td>
                                                    <td>
                                                        <h5>$225</h5>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html">View Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>#4587964125</h5>
                                                    </td>
                                                    <td>
                                                        <p>jan 21, 2021</p>
                                                    </td>
                                                    <td>
                                                        <span class="cancel">cancel</span>
                                                    </td>
                                                    <td>
                                                        <h5>$335</h5>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html">View Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>#4579654153</h5>
                                                    </td>
                                                    <td>
                                                        <p>July 11, 2020</p>
                                                    </td>
                                                    <td>
                                                        <span class="cancel">cancel</span>
                                                    </td>
                                                    <td>
                                                        <h5>$550</h5>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html">View Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>#12547965423</h5>
                                                    </td>
                                                    <td>
                                                        <p>July 16, 2022</p>
                                                    </td>
                                                    <td>
                                                        <span class="complete">Complated</span>
                                                    </td>
                                                    <td>
                                                        <h5>$545</h5>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html">View Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>#4589635878</h5>
                                                    </td>
                                                    <td>
                                                        <p>jan 21, 2021</p>
                                                    </td>
                                                    <td>
                                                        <span class="cancel">cancel</span>
                                                    </td>
                                                    <td>
                                                        <h5>$600</h5>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html">View Details</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>#89698745895</h5>
                                                    </td>
                                                    <td>
                                                        <p>July 11, 2020</p>
                                                    </td>
                                                    <td>
                                                        <span class="complete">complete</span>
                                                    </td>
                                                    <td>
                                                        <h5>$200</h5>
                                                    </td>
                                                    <td><a href="dashboard_order_invoice.html">View Details</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
