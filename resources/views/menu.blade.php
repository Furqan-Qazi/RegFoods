<x-app-layout>
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url('{{ asset('images/menu_main.jpg') }}');">

        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>Popular Foods menu</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li><a href="{{ route('menu') }}">menu</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        MENU PAGE START
    ==============================-->
    <section class="menu_page mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <form method="GET" action="{{ route('menu') }}" class="menu_search_area">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="menu_search">
                            <input type="text" name="query" placeholder="Search..." value="{{ request('query') }}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="menu_search">
                            <div class="select_area">
                                <select class="select_js" name="sort">
                                    <option value="">Default Sorting</option>
                                    <option value="popularity">Sort by Popularity</option>
                                    <option value="latest">Sort by Latest</option>
                                    <option value="low_high">Price: Low to High</option>
                                    <option value="high_low">Price: High to Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="menu_search">
                            <button class="common_btn" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>


            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp{{ $blog->item->category->category_id ?? '' }}"
                        data-wow-duration="1s">
                        <div class="menu_item">
                            <div class="menu_item_img">
                                <img src="{{ asset('uploads/items/' . $blog->item->image) }}"
                                    alt="{{ $blog->item->name }}" class="img-fluid w-100">
                            </div>
                            <div class="menu_item_text">
                                <a class="category" href="#">{{ $blog->item->category->name }}</a>
                                <a class="title" href="menu_details.html">{{ $blog->item->name }}</a>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <span>24</span>
                                </p>
                                <h5 class="price">${{ $blog->item->price }}</h5>
                                <a class="add_to_cart" href="#" data-bs-toggle="modal" data-bs-target="#cartModal"
                                    data-name="{{ $blog->item->name }}" data-price="{{ $blog->item->price }}"
                                    data-image="{{ asset('uploads/items/' . $blog->item->image) }}">
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
            </div>

            <div class="pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
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
                            <img src="{{ asset('images/popup_cart_img.jpg') }}" alt="menu"
                                class="img-fluid w-100">
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
        MENU PAGE END
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
