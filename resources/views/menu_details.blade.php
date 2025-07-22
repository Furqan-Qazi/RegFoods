<x-app-layout>
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url('{{ asset('images/menu_main.jpg') }}');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>menu Details</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">menu Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        MENU DETAILS START
    ==============================-->
    <section class="menu_details mt_100 xs_mt_75 mb_95 xs_mb_65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-10 col-md-9 wow fadeInUp" data-wow-duration="1s">
                    <div class="exzoom hidden" id="exzoom">
                        <div class="exzoom_img_box menu_details_images">
                            <ul class='exzoom_img_ul'>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_1.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_2.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_3.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_4.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_5.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_6.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_7.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_8.jpg" alt="product"></li>
                                <li><img class="zoom ing-fluid w-100" src="images/menu2_img_4.jpg" alt="product"></li>
                            </ul>
                        </div>
                        <div class="exzoom_nav"></div>
                        <p class="exzoom_btn">
                            <a href="javascript:void(0);" class="exzoom_prev_btn"> <i class="far fa-chevron-left"></i>
                            </a>
                            <a href="javascript:void(0);" class="exzoom_next_btn"> <i class="far fa-chevron-right"></i>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_description_area mt_100 xs_mt_70">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Reviews</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="menu_det_description">
                                    <p>Ipsum dolor, sit amet consectetur adipisicing elit. Doloribus consectetur
                                        ullam in? Beatae, dolorum ad ea deleniti ratione voluptatum similique omnis
                                        voluptas tempora optio soluta vero veritatis reiciendis blanditiis architecto.
                                        Debitis nesciunt inventore voluptate tempora ea incidunt iste, corporis, quo
                                        cumque facere doloribus possimus nostrum sed magni quasi, assumenda autem!
                                        Repudiandae nihil magnam provident illo alias vero odit repellendus, ipsa nemo
                                        itaque. Aperiam fuga, magnam quia illum minima blanditiis tempore. vero
                                        veritatis reiciendis blanditiis architecto. Debitis nesciunt inventore voluptate
                                        tempora ea incidunt iste, corporis, quo cumque facere doloribus possimus nostrum
                                        sed magni quasi</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit Doloribus.</li>
                                        <li>Dolor sit amet consectetur adipisicing elit. Earum itaque nesciunt.</li>
                                        <li>Corporis quo cumque facere doloribus possimus nostrum sed magni quasi.</li>
                                        <li>Incidunt iste corporis quo cumque facere doloribus possimus nostrum sed.
                                        </li>
                                        <li>Incidunt iste corporis quo cumque facere doloribus possimus nostrum sed.
                                        </li>
                                        <li>Architecto Debitis nesciunt inventore voluptate tempora ea.</li>
                                        <li>Earum itaque nesciunt dolor laudantium placeat sed velit aspernatur.</li>
                                        <li>Laudantium placeat sed velit aspernatur nobis quos quibusdam distinctio.
                                        </li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum itaque nesciunt
                                        dolor laudantium placeat sed velit aspernatur, nobis quos quibusdam distinctio
                                        voluptatum officia vel sapiente enim, reprehenderit impedit beatae molestias
                                        dolorum. A laborum consectetur sed quis exercitationem optio consequatur, unde
                                        neque est odit, pariatur quae incidunt quasi dolorem nihil aliquid ut veritatis
                                        porro eaque cupiditate voluptatem vel ad! Asperiores, praesentium. sit amet
                                        consectetur adipisicing elit. Doloribus consectetur ullam in? Beatae, dolorum ad
                                        ea deleniti ratione voluptatum similique omnis voluptas tempora optio soluta</p>

                                    <ul>
                                        <li>Reiciendis blanditiis architecto. Debitis nesciunt inventore voluptate
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit Doloribus.</li>
                                        <li>Dolor sit amet consectetur adipisicing elit. Earum itaque nesciunt.</li>
                                        <li>Corporis quo cumque facere doloribus possimus nostrum sed magni quasi.</li>
                                        <li>Incidunt iste corporis quo cumque facere doloribus possimus nostrum sed.
                                        </li>
                                        <li>Incidunt iste corporis quo cumque facere doloribus possimus nostrum sed.
                                        </li>
                                    </ul>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus consectetur
                                        ullam in? Beatae, dolorum ad ea deleniti ratione voluptatum similique omnis
                                        voluptas tempora optio soluta vero veritatis reiciendis blanditiis architecto.
                                        Debitis nesciunt inventore voluptate tempora ea incidunt iste, corporis, quo
                                        cumque facere doloribus possimus nostrum sed magni quasi, assumenda autem!
                                        Repudiandae nihil magnam provident illo alias vero odit repellendus, ipsa nemo
                                        itaque. Aperiam fuga, magnam quia illum minima blanditiis tempore.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="review_area">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4>04 reviews</h4>
                                            <div class="comment pt-0 mt_20">
                                                @foreach ($reviews as $review)
                                                    <div class="single_comment">
                                                        <img src="images/client_4.png" alt="review" class="img-fluid">
                                                        <div class="single_comm_text">
                                                            <h3>{{ $review->name }}<span>{{ $review->created_at }}
                                                                </span></h3>
                                                            <span class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fad fa-star-half-alt"></i>
                                                                <i class="fal fa-star"></i>
                                                                <b>(120)</b>
                                                            </span>
                                                            <p>{{ $review->comment }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                <div class="pagination mt_30">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <nav aria-label="...">
                                                                <ul class="pagination">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"><i
                                                                                class="fas fa-long-arrow-alt-left"></i></a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">1</a></li>
                                                                    <li class="page-item active"><a class="page-link"
                                                                            href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a></li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"><i
                                                                                class="fas fa-long-arrow-alt-right"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="post_review">
                                                <h4>write a Review</h4>
                                                <form action="{{ route('reviews.store') }}" method="POST">
                                                    @csrf

                                                    <p class="rating">
                                                        <span>select your rating : </span>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </p>

                                                    <div class="row">

                                                        @guest
                                                            <div class="col-xl-12">
                                                                <input type="text" placeholder="Name" name="name"
                                                                    value="{{ old('name') }}" required>
                                                            </div>

                                                            <div class="col-xl-12">
                                                                <input type="email" placeholder="Email" name="email"
                                                                    value="{{ old('email') }}" required>
                                                            </div>
                                                        @endguest

                                                        @auth
                                                            <input type="hidden" name="name"
                                                                value="{{ Auth::user()->name }}">
                                                            <input type="hidden" name="email"
                                                                value="{{ Auth::user()->email }}">
                                                        @endauth
                                                        <div class="col-xl-12">
                                                            <textarea rows="3" placeholder="Write your review" name="comment" required>{{ old('comment') }}</textarea>
                                                        </div>

                                                        <div class="col-12">
                                                            <button class="common_btn" type="submit">submit
                                                                review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related_menu mt_90 xs_mt_60">
                <h2>related item</h2>
                <div class="row related_product_slider">
                    @foreach ($categories as $category)
                        @foreach ($category->items as $item)
                            <div class="col-xl-3 wow fadeInUp{{ $category->category_id }}" data-wow-duration="1s">

                                <div class="menu_item">
                                    <div class="menu_item_img">
                                        <img src="{{ asset('uploads/items/' . $item->image) }}"
                                            alt="{{ $item->name }}" class="img-fluid w-100">
                                    </div>
                                    <div class="menu_item_text">
                                        <a class="category" href="#">{{ $category->name }}</a>
                                        <a class="title" href="menu_details.html">{{ $item->name }}</a>
                                        <h5 class="price">${{ $item->price }}</h5>
                                        <a class="add_to_cart" href="#" data-bs-toggle="modal"
                                            data-bs-target="#cartModal" data-name="{{ $item->name }}"
                                            data-price="{{ $item->price }}"
                                            data-image="{{ asset('uploads/items/' . $item->image) }}">
                                            Add to Cart
                                        </a>

                                        <ul class="d-flex flex-wrap justify-content-end">
                                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                            <li><a href="menu_details.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- CART POPUT START -->
    <div class="cart_popup">
        <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fal fa-times"></i></button>
                        <div class="cart_popup_img">
                            <img src="images/popup_cart_img.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="cart_popup_text">
                            <a href="#" class="title">Maxican Pizza Test Better</a>
                            <p class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span>(201)</span>
                            </p>
                            <h4 class="price">$320.00 <del>$350.00</del> </h4>
                            <div class="details_quentity">
                                <h5>select quentity</h5>
                                <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                    <div class="quentity_btn">
                                        <button class="btn btn-danger quantity-decrease"><i
                                                class="fal fa-minus"></i></button>
                                        <input type="text" id="modalQuantity" value="1">
                                        <button class="btn btn-success quantity-increase"><i
                                                class="fal fa-plus"></i></button>
                                    </div>
                                    <h3>$320.00</h3>
                                </div>
                            </div>
                            <ul class="details_button_area d-flex flex-wrap">
                                <li>
                                    <a class="common_btn confirm_add_to_cart" href="#">Add to Cart</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART POPUT END -->

    <!--=============================
        MENU DETAILS END
    ==============================-->

    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->
    <script src="{{ asset('js/cart.js') }}"></script>
</x-app-layout>
