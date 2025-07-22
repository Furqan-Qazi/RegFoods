@extends('layouts.adminlte')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <h1>Add Blog</h1>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{-- Your Blog Form --}}
                <form method="POST" action="{{ route('blog-submit.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                    <div class="form-group">
                        <label for="item_id">Select Category</label>
                        <select name="item_id" id="item_id" class="form-control" required>
                            <option value="">-- Select Category --</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->item_id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" rows="5" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control-file" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Publish Blog</button>
                </form>
            </div>
        </section>
    </div>
@endsection
