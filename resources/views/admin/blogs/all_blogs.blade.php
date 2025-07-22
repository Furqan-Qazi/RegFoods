@extends('layouts.adminlte')

@section('content')
    <div class="d-flex" style="min-height: 100vh; overflow-x: hidden;">



        {{-- Main Content (Right Side) --}}
        <main class="flex-grow-1 p-4" style="background-color: #f8f9fa;">
            <h3 class="mb-4">All BLOGS</h3>

            {{-- serach start --}}
            <section class="menu_page xs_mt_70 mb_20 xs_mb_70">
                <div class="container">
                    <form method="GET" action="{{ route('admin.all_blogs') }}" class="menu_search_area">
                        <div class="row align-items-end">
                            {{-- Search Field --}}
                            <div class="col-lg-5 col-md-5 mb-2">
                                <div class="menu_search">
                                    <input type="text" name="search" class="form-control"
                                        placeholder="Search title, slug, content, user or item"
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
                                    <a href="{{ route('admin.all_blogs') }}"
                                        class="common_btn btn btn-secondary w-50 text-white text-center">Reset</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </section>

            {{-- serach end --}}

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Blog List</h5>
                </div>

                <div class="card-body p-0">
                    <div style="max-height: calc(270vh - 350px); overflow-y: auto;">
                        <table class="table table-bordered table-hover align-middle mb-0">
                            <thead class="table-dark sticky-top" style="top: 0; z-index: 1;">
                                <tr>
                                    <th>Blog ID</th>
                                    <th>User ID/Name</th>
                                    <th>Item ID/Name</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->blog_id }}</td>
                                        <td>{{ $blog->user_id }} - {{ $blog->user->name ?? 'Unknown' }}</td>
                                        <td>{{ $blog->item_id }}-<br>{{ $blog->item->name ?? 'Unknown' }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->slug }}</td>
                                        <td>
                                            {{ \Illuminate\Support\Str::limit($blog->content, 50) }}
                                            <button class="btn btn-link btn-sm p-0 text-primary" data-bs-toggle="modal"
                                                data-bs-target="#blogModal{{ $blog->blog_id }}">
                                                See More
                                            </button>
                                        </td>
                                        <td>
                                            @if ($blog->image)
                                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" width="60"
                                                    height="50" style="object-fit: cover;">
                                            @else
                                                <span class="text-muted">No Image</span>
                                            @endif
                                        </td>

                                        <td>{{ $blog->created_at->format('Y-m-d H:i') }}</td>
                                        <td>{{ $blog->updated_at->format('Y-m-d H:i') }}</td>

                                        <td>
                                            <div class="d-flex gap-1">
                                                <a href="{{ route('admin.blogs.edit', $blog->blog_id) }}"
                                                    class="btn btn-sm btn-info">Edit</a>
                                                <form action="{{ route('admin.blogs.destroy', $blog->blog_id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure to delete this blog?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- Modal for each blog --}}
                                    <div class="modal fade" id="blogModal{{ $blog->blog_id }}" tabindex="-1"
                                        aria-labelledby="blogModalLabel{{ $blog->blog_id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header bg-dark text-white">
                                                    <h5 class="modal-title" id="blogModalLabel{{ $blog->blog_id }}">
                                                        {{ $blog->title }}</h5>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Slug:</strong> {{ $blog->slug }}</p>
                                                    <p><strong>Content:</strong> {!! nl2br(e($blog->content)) !!}</p>
                                                    @if ($blog->image)
                                                        <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                                            class="img-fluid mt-3" style="max-height: 300px;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary">
                    ← Back
                </a>
            </div>
        </main>
    </div>
@endsection
