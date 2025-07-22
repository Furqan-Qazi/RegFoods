@extends('layouts.adminlte')

@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <section class="content-header">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <h1 class="mb-0">Edit User</h1>
                <a href="{{ route('all_users') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-primary shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title mb-0">Edit User Details</h3>
                            </div>

                            <form action="{{ route('update_user', $user->user_id) }}" method="POST">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $user->name }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $user->email }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="role_id">Role</label>
                                        <select name="role_id" class="form-control" required>
                                            <option value="1" {{ $user->role_id == 1 ? 'selected' : '' }}>Admin
                                            </option>
                                            <option value="2" {{ $user->role_id == 2 ? 'selected' : '' }}>User</option>
                                            {{-- Add more roles as needed --}}
                                        </select>
                                    </div>

                                </div>

                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-check-circle"></i> Update
                                    </button>
                                    <a href="{{ route('all_users') }}" class="btn btn-secondary">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
