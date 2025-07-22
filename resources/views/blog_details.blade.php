<x-app-layout>
    <section class="page_breadcrumb" style="background: url('{{ asset('images/breadcrumb_bg.jpg') }}');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>blog details</h1>
                    <ul>
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li><a href="#">blog details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_details mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog_det_area">
                        <!-- Blog Image -->
                        <div class="blog_details_img wow fadeInUp" data-wow-duration="1s">
                            <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->title }}"
                                class="img-fluid w-100">
                        </div>

                        <!-- Blog Text -->
                        <div class="blog_details_text wow fadeInUp" data-wow-duration="1s">
                            <ul class="details_bloger d-flex flex-wrap">
                                <li><i class="far fa-user"></i> By {{ $blog->user->name ?? 'Unknown' }}</li>
                                <li><i class="far fa-comment-alt-lines"></i> {{ $feedbacks->count() }} Comments</li>
                                <li><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('d M Y') }}</li>
                            </ul>
                            <h2>{{ $blog->title }}</h2>
                            <p>{!! $blog->content !!}</p>
                        </div>
                    </div>

                    <!-- Comments -->
                    <div class="comment mt_50 wow fadeInUp" data-wow-duration="1s">
                        <h4>{{ $feedbacks->count() }} Comments</h4>
                        @foreach ($feedbacks as $feedback)
                            <div class="single_comment mb-4 d-flex">
                                <img src="{{ asset('uploads/feedback_user/feedbacker.jpg') }}" alt="review"
                                    class="img-fluid me-3" style="width: 60px; height: 60px; border-radius: 50%;">
                                <div class="single_comm_text">
                                    <h5>{{ $feedback->name }}
                                        <span
                                            class="text-muted small ms-2">{{ $feedback->created_at->format('d M Y') }}</span>
                                    </h5>
                                    <p>{{ $feedback->feedback }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Comment Form -->
                    <div class="comment_input mt_50 wow fadeInUp" data-wow-duration="1s">
                        <h4>Leave A Comment</h4>
                        <form action="{{ route('feedback.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                @guest
                                    <div class="col-xl-6 col-md-6">
                                        <label>Name</label>
                                        <div class="contact_form_input">
                                            <span><i class="fas fa-user"></i></span>
                                            <input type="text" placeholder="Name" name="name"
                                                value="{{ old('name') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <label>Email</label>
                                        <div class="contact_form_input">
                                            <span><i class="fas fa-envelope"></i></span>
                                            <input type="email" placeholder="Mail" name="email"
                                                value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                @endguest

                                <div class="col-xl-12">
                                    <label>Comment</label>
                                    <div class="contact_form_input textarea">
                                        <span><i class="fas fa-pen"></i></span>
                                        <textarea rows="5" placeholder="Your Comment" name="feedback" required>{{ old('feedback') }}</textarea>
                                    </div>
                                    <button type="submit" class="common_btn mt_20">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div id="sticky_sidebar">
                        <div class="blog_categori blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Category</h3>
                            <ul>
                                <li><a href="#">{{ $blog->item->category->name ?? 'Uncategorized' }}</a></li>
                            </ul>
                        </div>

                        <div class="blog_tags blog_sidebar wow fadeInUp" data-wow-duration="1s">
                            <h3>Tags</h3>
                            <ul>
                                <li><a href="#">{{ $blog->item->name }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
</x-app-layout>
