@extends('layouts.adminlte')

@section('content')
    <div class="content-wrapper pt-3">
        <div class="container-fluid">

            {{-- COUPON FORM --}}
            <div class="row mb-4">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('coupon-submit.store') }}">
                        @csrf
                        <h3 class="mb-3">Add Coupon</h3>

                        <div class="form-group">
                            <label for="code">Coupon Code</label>
                            <input type="text" name="code" id="code" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="type">Coupon Type</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="percentage">Percentage</option>
                                <option value="fixed">Fixed</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="number" name="value" id="value" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="expiry_date">Expiry Date</label>
                            <input type="date" name="expiry_date" id="expiry_date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="is_active">Status</label>
                            <select name="is_active" id="is_active" class="form-control" required>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Add Coupon</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection
