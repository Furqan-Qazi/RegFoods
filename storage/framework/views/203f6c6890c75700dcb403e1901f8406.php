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
    <section class="page_breadcrumb" style="background: url('<?php echo e(asset('images/counter_bg.jpg')); ?>');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>checkout</h1>
                    <ul>
                        <li><a href="/">home</a></li>
                        <li><a href="#">checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <form id="checkoutForm">
                <?php echo csrf_field(); ?>

                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="hidden" name="items[]" value="<?php echo e($item['name']); ?>">
                    <input type="hidden" name="images[]" value="<?php echo e($item['image']); ?>">
                    <input type="hidden" name="prices[]" value="<?php echo e($item['price']); ?>">
                    <input type="hidden" name="quantities[]" value="<?php echo e($item['quantity']); ?>">
                    <input type="hidden" name="totals[]" value="<?php echo e($item['total']); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="checkout_form">
                            <div class="check_form">
                                <h5>select address</h5>

                                <div class="row">
                                    <?php $__currentLoopData = ['home', 'office', 'office2', 'home2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-6">
                                            <div class="checkout_single_address">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="selected_address" value="<?php echo e($address); ?>"
                                                        id="<?php echo e($address); ?>">
                                                    <label class="form-check-label" for="<?php echo e($address); ?>">
                                                        <span class="icon"><i class="fas fa-home"></i>
                                                            <?php echo e($address); ?></span>
                                                        <span class="address">Blackwell Street, Dry Creek,
                                                            Alaska.</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                                <div class="row mt_30">
                                    <div class="col-12">
                                        <h5>billing address</h5>
                                    </div>
                                    <?php if(auth()->guard()->check()): ?>
                                        <input type="hidden" name="first_name" value="<?php echo e(Auth::user()->name); ?>">
                                        <input type="hidden" name="email" value="<?php echo e(Auth::user()->email); ?>">
                                    <?php else: ?>
                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                            <input type="text" name="first_name" class="form-control"
                                                placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                            <input type="email" name="email" class="form-control" placeholder="Email *">
                                        </div>
                                    <?php endif; ?>

                                    <div class="col-md-6 col-lg-12 col-xl-6">
                                        <input type="text" name="last_name" class="form-control"
                                            placeholder="Last Name">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="company" class="form-control"
                                            placeholder="Company Name (Optional)">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="country" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="street_address" class="form-control"
                                            placeholder="Street Address *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="apartment" class="form-control"
                                            placeholder="Apartment (Optional)">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="city" class="form-control" placeholder="City *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="state" class="form-control" placeholder="State *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="zip" class="form-control" placeholder="Zip *">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="Phone *">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="notes" class="form-control" rows="3" placeholder="Additional notes (optional)"></textarea>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button type="button" id="saveAddressBtn" class="btn btn-primary w-100">Save
                                            Billing Info</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="cart_list_footer_button">
                            <div class="cart_list_footer_button_text">
                                <h6>total cart (<?php echo e(count($items)); ?>)</h6>
                                <p>subtotal:
                                    <span>$<?php echo e(number_format(array_sum(array_column($items, 'total')), 2)); ?></span>
                                </p>
                                <p>delivery: <span>$0.00</span></p>
                                <p>discount: <span>$0.00</span></p>
                                <p class="total"><span>total:</span>
                                    <span>$<?php echo e(number_format(array_sum(array_column($items, 'total')), 2)); ?></span>
                                </p>
                                <button type="button" id="proceedToPayment" class="common_btn w-100 mt-3">
                                    Proceed to Payment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const saveBtn = document.getElementById('saveAddressBtn');
                    const proceedBtn = document.getElementById('proceedToPayment');
                    const form = document.getElementById('checkoutForm');

                    // Save billing info only
                    saveBtn.addEventListener('click', function() {
                        const formData = new FormData(form);

                        fetch("<?php echo e(route('checkout.storeBillingSession')); ?>", {
                                method: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                                },
                                body: formData
                            })
                            .then(res => res.json())
                            .then(data => {
                                alert('Billing Info Saved!');
                            });
                    });

                    // Save billing + redirect
                    proceedBtn.addEventListener('click', function() {
                        const formData = new FormData(form);

                        fetch("<?php echo e(route('checkout.storeBillingSession')); ?>", {
                                method: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                                },
                                body: formData
                            })
                            .then(res => res.json())
                            .then(data => {
                                window.location.href = "<?php echo e(route('payment.page')); ?>";
                            });
                    });
                });
            </script>

        </div>
    </section>

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
<?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/check_out.blade.php ENDPATH**/ ?>