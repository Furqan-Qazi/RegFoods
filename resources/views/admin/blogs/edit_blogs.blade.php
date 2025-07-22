@extends('layouts.adminlte')

@section('content')
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Page Header -->
        <section class="content-header">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <h1>Edit Blog</h1>
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </section>

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card card-primary shadow">
                            <div class="card-header">
                                <h3 class="card-title mb-0">Update Blog Details</h3>
                            </div>

                            <form action="{{ route('admin.blogs.update', $blog->blog_id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Blog Title</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $blog->title }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" name="slug" class="form-control"
                                            value="{{ $blog->slug }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea name="content" rows="5" class="form-control" required>{{ $blog->content }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Blog Image <small class="text-muted">(Leave blank to keep
                                                current)</small></label>
                                        <input type="file" name="image" class="form-control">
                                        @if ($blog->image)
                                            <div class="mt-2">
                                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" width="120"
                                                    class="img-thumbnail">
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-save"></i> Update Blog
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
