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
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif


            {{-- serach start --}}
            <section class="menu_page xs_mt_70 mb_20 xs_mb_70">
                <div class="container">
                    <form method="GET" action="{{ route('admin.orders.index') }}">

                        <div class="row align-items-end">
                            {{-- Search Field --}}
                            <div class="col-lg-5 col-md-5 mb-2">
                                <div class="menu_search">
                                    <input type="text" name="search" class="form-control"
                                        placeholder="Search order ID, user ID, total, status, user name"
                                        value="{{ request('search') }}">

                                </div>
                            </div>

                            {{-- Date Field --}}
                            <div class="col-lg-4 col-md-4 mb-2">
                                <div class="menu_search">
                                    <input type="date" name="date" class="form-control" value="{{ request('date') }}">
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <div class="col-lg-3 col-md-4 mb-2">
                                <div class="d-flex gap-2 h-100">
                                    <button class="common_btn w-50" type="submit">Search</button>
                                    <a href="{{ route('admin.orders.index') }}"
                                        class="common_btn btn btn-secondary w-50 text-white text-center">Reset</a>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </section>

            {{-- serach end --}}

            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title mb-0">Pending Orders</h3>
                </div>

                {{-- Scrollable Table --}}
                <div class="card-body p-0">
                    <div style="max-height: calc(270vh - 350px); overflow-y: auto;">
                        <table class="table table-bordered table-hover align-middle mb-0">
                            <thead class="table-dark sticky-top" style="top: 0; z-index: 1;">

                                <tr>
                                    <th>Order ID</th>
                                    <th>User ID</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Items</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->order_id }}</td>
                                        <td>{{ $order->user_id }}</td>
                                        <td>Rs {{ $order->total_amount }}</td>
                                        <td><span class="badge bg-warning text-dark">{{ $order->status }}</span></td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                {{-- Approve Button --}}
                                                <form action="{{ route('admin.orders.complete', $order->order_id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-success"
                                                        onclick="return confirm('Mark this order as completed?')">
                                                        Approve
                                                    </button>
                                                </form>

                                                {{-- Delete Button --}}
                                                <form action="{{ route('admin.orders.delete', $order->order_id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this order?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
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

                                                            {{-- 🧾 Billing Info --}}
                                                            @php $billing = $order->billingAddress; @endphp
                                                            <div class="mb-4 border-bottom pb-3">
                                                                <h5 class="fw-bold mb-3 text-primary">
                                                                    <i class="fas fa-file-invoice-dollar me-2"></i>
                                                                    Billing
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
                                                                                    {{ $billing->additional_info }}
                                                                                </td>
                                                                                <th class="text-muted">📅 Date:</th>
                                                                                <td class="fw-semibold">
                                                                                    {{ $billing->created_at->format('Y-m-d H:i') }}
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                @else
                                                                    <div class="alert alert-danger mt-2">
                                                                        <i class="fas fa-exclamation-circle"></i> No
                                                                        billing
                                                                        address found.
                                                                    </div>
                                                                @endif
                                                            </div>

                                                            {{-- 🛒 Ordered Items --}}
                                                            <div class="mb-4">
                                                                <h5 class="fw-bold text-dark mb-3">🛒 Ordered Items</h5>
                                                                <div class="row g-3">
                                                                    @foreach ($order->orderItems as $index => $item)
                                                                        <div class="col-md-6">
                                                                            <div class="card h-100 shadow-sm border">
                                                                                <div class="d-flex"
                                                                                    style="min-height: 100px;">
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
                                                                                            {{ $item->item->name }}
                                                                                        </h6>
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
                                                                                            <span
                                                                                                class="badge bg-success">Rs
                                                                                                {{ $item->quantity * $item->price }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>




                                                            {{-- Total --}}
                                                            <div class="text-end border-top pt-3 mt-4">
                                                                <h4>Total: <span class="text-success">Rs
                                                                        {{ $order->total_amount }}</span></h4>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                    </div>
                    </td>
                    <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>

    </div>
    <div class="mt-5">
        <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary d-inline-block" style="width: auto;">
            ← Back
        </a>
    </div>
    </main>

    </div>
@endsection
