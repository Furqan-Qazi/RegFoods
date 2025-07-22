<x-app-layout>

    @if (session('coupon'))
        <p>Coupon Applied: <strong>{{ session('coupon.code') }}</strong></p>
        <p>Discount: - ${{ number_format(session('coupon.discount'), 2) }}</p>
        <p>Payable: ${{ number_format(session('coupon.final_total'), 2) }}</p>
    @endif

    <section class="page_breadcrumb" style="background: url('{{ asset('images/counter_bg.jpg') }}');">
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
                {{-- Cart Items --}}
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
                                @php $grandTotal = 0; @endphp
                                @foreach ($items as $index => $name)
                                    <tr>
                                        <td><img src="{{ asset($images[$index]) }}" width="70"></td>
                                        <td>{{ $name }}</td>
                                        <td>${{ number_format($prices[$index], 2) }}</td>
                                        <td>{{ $quantities[$index] }}</td>
                                        <td>${{ number_format($totals[$index], 2) }}</td>
                                    </tr>
                                    @php $grandTotal += $totals[$index]; @endphp
                                @endforeach
                                <tr class="font-bold">
                                    <td colspan="4" class="text-end">Grand Total</td>
                                    <td>${{ number_format($grandTotal, 2) }}</td>
                                </tr>
                                @php
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
                                @endphp

                                <div class="mt-3">
                                    <p><strong>Subtotal:</strong> ${{ number_format($subtotal, 2) }}</p>
                                    <p><strong>Discount:</strong> -${{ number_format($discount, 2) }}</p>
                                    <p><strong style="font-size: 18px;">Total Payable:</strong>
                                        ${{ number_format($finalTotal, 2) }}</p>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Billing Info --}}
                <div class="col-lg-4">
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="text-xl font-bold mb-4">Billing Info</h3>
                        @if (!empty($billing))
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Name:</strong> {{ $billing['first_name'] ?? '' }}
                                    {{ $billing['last_name'] ?? '' }}</li>
                                <li class="list-group-item"><strong>Company:</strong>
                                    {{ $billing['company'] ?? 'N/A' }}
                                </li>
                                <li class="list-group-item"><strong>Street Address:</strong>
                                    {{ $billing['street_address'] ?? '' }}</li>
                                <li class="list-group-item"><strong>Apartment:</strong>
                                    {{ $billing['apartment'] ?? 'N/A' }}</li>
                                <li class="list-group-item"><strong>City:</strong> {{ $billing['city'] ?? '' }}</li>
                                <li class="list-group-item"><strong>State:</strong> {{ $billing['state'] ?? '' }}</li>
                                <li class="list-group-item"><strong>ZIP:</strong> {{ $billing['zip'] ?? '' }}</li>
                                <li class="list-group-item"><strong>Country:</strong> {{ $billing['country'] ?? '' }}
                                </li>
                                <li class="list-group-item"><strong>Phone:</strong> {{ $billing['phone'] ?? '' }}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{ $billing['email'] ?? '' }}</li>
                                <li class="list-group-item"><strong>Additional Notes:</strong>
                                    {{ $billing['notes'] ?? 'N/A' }}</li>
                            </ul>
                        @else
                            <div class="alert alert-warning">
                                Billing information not found. Please go back and fill it.
                            </div>
                        @endif



                        @if (!empty($billing))
                            <a href="{{ route('stripe.session') }}" class="btn btn-success w-100 mt-3">
                                Proceed to Secure Stripe Payment
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
