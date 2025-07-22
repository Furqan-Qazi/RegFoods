<x-app-layout>

    <style>
        .cart_list_footer_button_text button {
            position: relative !important;
            top: auto !important;
            right: auto !important;
            transform: none !important;
        }

        .cart_list_footer_button_text .common_btn {
            margin-top: 10px;
        }
    </style>

    <section class="page_breadcrumb" style="background: url('{{ asset('images/cart_main.jpg') }}');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>cart view</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">cart view</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <form method="POST" action="{{ route('checkout.store') }}">
                    @csrf

                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                        <div class="cart_list">
                            <div class="table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th class="pro_img">Image</th>
                                            <th class="pro_name">details</th>
                                            <th class="pro_status">price</th>
                                            <th class="pro_select">quantity</th>
                                            <th class="pro_tk">total</th>
                                            <th class="pro_icon">
                                                <a class="clear_all" href="#"
                                                    onclick="clearCartItems(event)">clear all</a>
                                            </th>
                                        </tr>

                                        @foreach ($items as $item)
                                            <tr class="cart-item">
                                                <td class="pro_img">
                                                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"
                                                        class="img-fluid w-100">

                                                </td>
                                                <td class="pro_name">
                                                    <a href="#">{{ $item->name }}</a>
                                                    <input type="hidden" name="items[]" value="{{ $item->name }}">
                                                    <input type="hidden" name="images[]" value="{{ $item->image }}">
                                                    <input type="hidden" name="prices[]" value="{{ $item->price }}">
                                                    <input type="hidden" class="hidden-totals" name="totals[]"
                                                        value="0">
                                                </td>
                                                <td class="pro_status price" data-price="{{ $item->price }}">
                                                    <h6>${{ number_format($item->price, 2) }}</h6>
                                                </td>
                                                <td class="pro_select">
                                                    <div class="quentity_btn">
                                                        <button type="button"
                                                            class="btn btn-danger qty-minus">-</button>
                                                        <input type="text" class="qty-input" name="quantities[]"
                                                            value="{{ $item->quantity }}" readonly>
                                                        <button type="button"
                                                            class="btn btn-success qty-plus">+</button>
                                                    </div>
                                                </td>
                                                <td class="pro_tk item-total">
                                                    <h6>${{ number_format($item->price * $item->quantity, 2) }}</h6>
                                                </td>
                                                <td class="pro_icon">
                                                    <a href="#" class="remove-item"
                                                        onclick="removeCartItem(event, this)"><i
                                                            class="far fa-times"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                        <div class="cart_list_footer_button mt_50">
                            <div class="row">
                                <div class="col-xl-7 col-md-6">
                                    <div class="cart_list_footer_button_img">
                                        <img src="{{ asset('images/cart_atm.jpg') }}" alt="cart offer"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="cart_list_footer_button_text">
                                        <h6>total cart ({{ count($items) }})</h6>
                                        <p>subtotal: <span class="subtotal">$0.00</span></p>
                                        <p class="total"><span>total:</span> <span class="final-total">$0.00</span></p>

                                        <div>
                                            <input type="text" id="couponCode" name="coupon"
                                                placeholder="Coupon Code">
                                            <button type="button" onclick="applyCoupon()"
                                                class="common_btn">Apply</button>

                                        </div>

                                        <button type="submit" class="common_btn">checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/cart.js') }}"></script>
</x-app-layout>
