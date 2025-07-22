@extends('layouts.adminlte')

@section('content')
    <div class="app-wrapper d-flex">

        {{-- Main Content --}}
        <main class="app-main flex-grow-1 p-3">
            <!-- Content Header (Optional) -->
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row"></div>
                </div>
            </div>

            <!-- Pending Orders Table -->
            <div class="mb-2">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary d-inline-block" style="width: auto;">
                    ← Back
                </a>
            </div>


            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title">Completed Orders</h3>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Order ID</th>
                                <th>User ID</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>item</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->order_id }}</td>
                                    <td>{{ $order->user_id }}</td>
                                    <td>Rs {{ $order->total_amount }}</td>
                                    <td><span class="badge bg-warning text-dark">{{ $order->status }}</span></td>
                                    <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#orderModal{{ $order->order_id }}">
                                            View Details
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="orderModal{{ $order->order_id }}" tabindex="-1"
                                            aria-labelledby="modalLabel{{ $order->order_id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                                <div class="modal-content shadow-lg">
                                                    <div class="modal-header bg-primary text-white">
                                                        <h5 class="modal-title" id="modalLabel{{ $order->order_id }}">
                                                            Order #{{ $order->order_id }} - Full Details
                                                        </h5>
                                                        <button type="button" class="btn-close btn-close-white"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body p-4">

                                                        {{--  Billing Info --}}
                                                        @php $billing = $order->billingAddress; @endphp
                                                        <div class="mb-4 border-bottom pb-3">
                                                            <h5 class="fw-bold mb-3 text-primary">
                                                                <i class="fas fa-file-invoice-dollar me-2"></i> Billing
                                                                Information
                                                            </h5>
                                                            @if ($billing)
                                                                <div class="p-3 rounded shadow-sm bg-light">
                                                                    <table class="table table-sm table-borderless mb-0">
                                                                        <tr>
                                                                            <th class="text-muted">👤 Name:</th>
                                                                            <td class="fw-semibold">
                                                                                {{ $billing->first_name }}
                                                                                {{ $billing->last_name }}</td>
                                                                            <th class="text-muted">📞 Phone:</th>
                                                                            <td class="fw-semibold">
                                                                                {{ $billing->phone }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-muted">🏢 Company:</th>
                                                                            <td class="fw-semibold">
                                                                                {{ $billing->company_name }}</td>
                                                                            <th class="text-muted">✉️ Email:</th>
                                                                            <td class="fw-semibold">
                                                                                {{ $billing->email }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-muted">📍 Address:</th>
                                                                            <td colspan="3" class="fw-semibold">
                                                                                {{ $billing->street_address }},
                                                                                {{ $billing->apartment_suite }},
                                                                                {{ $billing->city }},
                                                                                {{ $billing->state }} -
                                                                                {{ $billing->zip }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-muted">📝 Info:</th>
                                                                            <td class="fw-semibold">
                                                                                {{ $billing->additional_info }}</td>
                                                                            <th class="text-muted">📅 Date:</th>
                                                                            <td class="fw-semibold">
                                                                                {{ $billing->created_at->format('Y-m-d H:i') }}
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            @else
                                                                <div class="alert alert-danger mt-2">
                                                                    <i class="fas fa-exclamation-circle"></i> No billing
                                                                    address found.
                                                                </div>
                                                            @endif
                                                        </div>

                                                        {{-- Ordered Items --}}
                                                        <div class="mb-4">
                                                            <h5 class="fw-bold text-dark mb-3">🛒 Ordered Items</h5>
                                                            <div class="row g-3">
                                                                @foreach ($order->orderItems as $index => $item)
                                                                    <div class="col-md-6">
                                                                        <div class="card h-100 shadow-sm border">
                                                                            <div class="d-flex" style="min-height: 100px;">
                                                                                {{-- Left: Fixed Image --}}
                                                                                <div class="p-2 d-flex align-items-center justify-content-center"
                                                                                    style="width: 100px;">
                                                                                    @php $imgPath = $item->item->image ?? null; @endphp
                                                                                    <img src="{{ $imgPath ? asset('uploads/items/' . $imgPath) : 'https://via.placeholder.com/100x100' }}"
                                                                                        alt="Item Image"
                                                                                        style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px; border: 1px solid #ccc;">
                                                                                </div>

                                                                                {{-- Right: Details --}}
                                                                                <div class="flex-grow-1 p-2">
                                                                                    <h6 class="mb-1">
                                                                                        {{ $index + 1 }}.
                                                                                        {{ $item->item->name }}</h6>
                                                                                    <p class="mb-1 text-muted small">
                                                                                        Qty:
                                                                                        <strong>{{ $item->quantity }}</strong>
                                                                                        |
                                                                                        Price: <strong>Rs
                                                                                            {{ $item->price }}</strong>
                                                                                    </p>
                                                                                    <p class="mb-1 text-muted small">
                                                                                        <span
                                                                                            style="font-weight: bold;">Category:</span>
                                                                                        <em>{{ $item->item->category->name }}</em>
                                                                                    </p>
                                                                                    <div class="text-end">
                                                                                        <span class="badge bg-success">Rs
                                                                                            {{ $item->quantity * $item->price }}</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        {{--  Total --}}
                                                        <div class="text-end border-top pt-3 mt-4">
                                                            <h4>Total: <span class="text-success">Rs
                                                                    {{ $order->total_amount }}</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
@endsection
