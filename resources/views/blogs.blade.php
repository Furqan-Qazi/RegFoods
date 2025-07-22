<x-app-layout>
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url('{{ asset('images/blog_main.jpg') }}');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>Latest news Blogs</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">blogs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        BLOG PAGE START
    ==============================-->
    <section class="blog_page mt_75 xs_mt_45 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="single_blog">
                            <div class="single_blog_img">
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="blog image"
                                    class="img-fluid w-100">

                            </div>
                            <div class="single_blog_author">
                                <div class="img">
                                    <img src="{{ asset('images/default_author.png') }}" alt="author"
                                        class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h5>{{ $blog->user->name ?? 'Unknown' }}</h5>
                                    <p>{{ $blog->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                            <div class="single_blog_text">
                                <a class="category" href="#">{{ $blog->item->name }}</a>
                                <a class="title" href="{{ route('blog_page', $blog->slug) }}">{{ $blog->title }}</a>
                                <p>{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                                <div class="single_blog_footer">
                                    <a class="read_btn" href="{{ route('blog_page', $blog->slug) }}">read
                                        more <i class="far fa-long-arrow-right"></i></a>
                                    <span><i class="far fa-comments"></i> 120</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <div class="pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BLOG PAGE END
    ==============================-->



    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->


</x-app-layout>
