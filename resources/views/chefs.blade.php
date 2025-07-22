<x-app-layout>
    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url('{{ asset('images/chefs_all.jpg') }}');">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>Meet Our Expert Chefs</h1>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#">chefs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--=============================
        TEAM PAGE START
    ==============================-->
    <section class="team_page pt_75 xs_pt_45 pb_100 xs_pb_70">
        <div class="container">
            <div class="row">
                @foreach ($teamMembers as $member)
                    <div class="col-xxl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">

                        <div class="single_team">
                            <div class="single_team_img">
                                <img src="{{ asset('uploads/team_members/' . $member->image) }}"
                                    alt="{{ $member->name }}" class="img-fluid w-100">
                            </div>
                            <div class="single_team_text">
                                <h4>{{ $member->name }}</h4>
                                <p>{{ $member->designation }}</p>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
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
        TEAM PAGE END
    ==============================-->
    <!--=============================
        SCROLL BUTTON START
    ==============================-->
    <div class="scroll_btn"><i class="fas fa-hand-pointer"></i></div>
    <!--=============================
        SCROLL BUTTON END
    ==============================-->

</x-app-layout>
