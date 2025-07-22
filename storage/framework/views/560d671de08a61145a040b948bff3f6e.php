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

    <?php if(session('coupon')): ?>
        <p>Coupon Applied: <strong><?php echo e(session('coupon.code')); ?></strong></p>
        <p>Discount: - $<?php echo e(number_format(session('coupon.discount'), 2)); ?></p>
        <p>Payable: $<?php echo e(number_format(session('coupon.final_total'), 2)); ?></p>
    <?php endif; ?>

    <section class="page_breadcrumb" style="background: url('<?php echo e(asset('images/counter_bg.jpg')); ?>');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>Payment</h1>
                    <ul>
                        <li><a href="/">home</a></li>
                        <li><a href="#">payment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 bg-gray-100">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="text-xl font-bold mb-4">Order Summary</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $grandTotal = 0; ?>
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><img src="<?php echo e(asset($images[$index])); ?>" width="70"></td>
                                        <td><?php echo e($name); ?></td>
                                        <td>$<?php echo e(number_format($prices[$index], 2)); ?></td>
                                        <td><?php echo e($quantities[$index]); ?></td>
                                        <td>$<?php echo e(number_format($totals[$index], 2)); ?></td>
                                    </tr>
                                    <?php $grandTotal += $totals[$index]; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr class="font-bold">
                                    <td colspan="4" class="text-end">Grand Total</td>
                                    <td>$<?php echo e(number_format($grandTotal, 2)); ?></td>
                                </tr>
                                <?php
                                    $subtotal = array_sum($totals);
                                    $discount = 0;
                                    $finalTotal = $subtotal;

                                    if (session()->has('applied_coupon')) {
                                        $coupon = session('applied_coupon');
                                        if ($coupon['type'] == 'percentage') {
                                            $discount = ($subtotal * $coupon['value']) / 100;
                                        } elseif ($coupon['type'] == 'fixed') {
                                            $discount = $coupon['value'];
                                        }
                                        $finalTotal = $subtotal - $discount;
                                    }
                                ?>

                                <div class="mt-3">
                                    <p><strong>Subtotal:</strong> $<?php echo e(number_format($subtotal, 2)); ?></p>
                                    <p><strong>Discount:</strong> -$<?php echo e(number_format($discount, 2)); ?></p>
                                    <p><strong style="font-size: 18px;">Total Payable:</strong>
                                        $<?php echo e(number_format($finalTotal, 2)); ?></p>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>

                
                <div class="col-lg-4">
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="text-xl font-bold mb-4">Billing Info</h3>
                        <?php if(!empty($billing)): ?>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Name:</strong> <?php echo e($billing['first_name'] ?? ''); ?>

                                    <?php echo e($billing['last_name'] ?? ''); ?></li>
                                <li class="list-group-item"><strong>Company:</strong>
                                    <?php echo e($billing['company'] ?? 'N/A'); ?>

                                </li>
                                <li class="list-group-item"><strong>Street Address:</strong>
                                    <?php echo e($billing['street_address'] ?? ''); ?></li>
                                <li class="list-group-item"><strong>Apartment:</strong>
                                    <?php echo e($billing['apartment'] ?? 'N/A'); ?></li>
                                <li class="list-group-item"><strong>City:</strong> <?php echo e($billing['city'] ?? ''); ?></li>
                                <li class="list-group-item"><strong>State:</strong> <?php echo e($billing['state'] ?? ''); ?></li>
                                <li class="list-group-item"><strong>ZIP:</strong> <?php echo e($billing['zip'] ?? ''); ?></li>
                                <li class="list-group-item"><strong>Country:</strong> <?php echo e($billing['country'] ?? ''); ?>

                                </li>
                                <li class="list-group-item"><strong>Phone:</strong> <?php echo e($billing['phone'] ?? ''); ?></li>
                                <li class="list-group-item"><strong>Email:</strong> <?php echo e($billing['email'] ?? ''); ?></li>
                                <li class="list-group-item"><strong>Additional Notes:</strong>
                                    <?php echo e($billing['notes'] ?? 'N/A'); ?></li>
                            </ul>
                        <?php else: ?>
                            <div class="alert alert-warning">
                                Billing information not found. Please go back and fill it.
                            </div>
                        <?php endif; ?>



                        <?php if(!empty($billing)): ?>
                            <a href="<?php echo e(route('stripe.session')); ?>" class="btn btn-success w-100 mt-3">
                                Proceed to Secure Stripe Payment
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
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
<?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/payment.blade.php ENDPATH**/ ?>