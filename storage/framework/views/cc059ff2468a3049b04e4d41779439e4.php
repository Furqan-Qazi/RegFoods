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

    <section class="page_breadcrumb" style="background: url('<?php echo e(asset('images/cart_main.jpg')); ?>');">
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
                <form method="POST" action="<?php echo e(route('checkout.store')); ?>">
                    <?php echo csrf_field(); ?>

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

                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="cart-item">
                                                <td class="pro_img">
                                                    <img src="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->name); ?>"
                                                        class="img-fluid w-100">

                                                </td>
                                                <td class="pro_name">
                                                    <a href="#"><?php echo e($item->name); ?></a>
                                                    <input type="hidden" name="items[]" value="<?php echo e($item->name); ?>">
                                                    <input type="hidden" name="images[]" value="<?php echo e($item->image); ?>">
                                                    <input type="hidden" name="prices[]" value="<?php echo e($item->price); ?>">
                                                    <input type="hidden" class="hidden-totals" name="totals[]"
                                                        value="0">
                                                </td>
                                                <td class="pro_status price" data-price="<?php echo e($item->price); ?>">
                                                    <h6>$<?php echo e(number_format($item->price, 2)); ?></h6>
                                                </td>
                                                <td class="pro_select">
                                                    <div class="quentity_btn">
                                                        <button type="button"
                                                            class="btn btn-danger qty-minus">-</button>
                                                        <input type="text" class="qty-input" name="quantities[]"
                                                            value="<?php echo e($item->quantity); ?>" readonly>
                                                        <button type="button"
                                                            class="btn btn-success qty-plus">+</button>
                                                    </div>
                                                </td>
                                                <td class="pro_tk item-total">
                                                    <h6>$<?php echo e(number_format($item->price * $item->quantity, 2)); ?></h6>
                                                </td>
                                                <td class="pro_icon">
                                                    <a href="#" class="remove-item"
                                                        onclick="removeCartItem(event, this)"><i
                                                            class="far fa-times"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                        <img src="<?php echo e(asset('images/cart_atm.jpg')); ?>" alt="cart offer"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-xl-5 col-md-6">
                                    <div class="cart_list_footer_button_text">
                                        <h6>total cart (<?php echo e(count($items)); ?>)</h6>
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

    <script src="<?php echo e(asset('js/cart.js')); ?>"></script>
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
<?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/cart_view.blade.php ENDPATH**/ ?>