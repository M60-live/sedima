@extends('layout.layout')

@section('content')
    <!-- Banner One Start
	====================================================-->
    <div class="page-banner overlay-secondery-8" style="background: url(images/background/2.jpg) bottom center/ cover; padding: 150px 0;">
        <div class="container">
            <div class="banner-text text-center">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">About</h1>
                        <nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                        <div class="text-area color-white w-50 lg-w-80 md-w-100 d-table mx-auto mt-20">
                            <p>At Sedima Advisory and Finance, we are committed to helping small and medium businesses realize their full potential through expert financial management, clear insights, and personalized support. Our mission is to empower you with the tools and knowledge needed to build a profitable, sustainable business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner One End
    ====================================================-->

    <!-- Start Team Style One
	====================================================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title mb-30 w-50 lg-w-80 text-center mx-auto">
                        <span class="color-primary">Success with us</span>
                        <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">Our Team</h2>
                        <p>We have of experts that can carefully advice and assist your business move forward.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="owl-carousel team-slider-1 owl-nav-style-one position-relative mt-30">
                        <div class="member-profile color-secondery-a">
                            <div class="overflow-hidden"><img src="images/team/1.jpg" alt="image"></div>
                            <h4 class="mt-15"><a href="#">Mpho Sedima</a></h4>
                            <span class="color-gray">Founder</span>
                        </div>
                        <div class="member-profile color-secondery-a">
                            <div class="overflow-hidden"><img src="images/team/2.jpg" alt="image"></div>
                            <h4 class="mt-15"><a href="#">Sophie Lily</a></h4>
                            <span class="color-gray">Assistan Manager</span>
                        </div>
                        <div class="member-profile color-secondery-a">
                            <div class="overflow-hidden"><img src="images/team/3.jpg" alt="image"></div>
                            <h4 class="mt-15"><a href="#">Harrison Ryan</a></h4>
                            <span class="color-gray">Project Manager</span>
                        </div>
                        <div class="member-profile color-secondery-a">
                            <div class="overflow-hidden"><img src="images/team/4.jpg" alt="image"></div>
                            <h4 class="mt-15"><a href="#">Sophie Lily</a></h4>
                            <span class="color-gray">Consultant</span>
                        </div>
                        <div class="member-profile color-secondery-a">
                            <div class="overflow-hidden"><img src="images/team/5.jpg" alt="image"></div>
                            <h4 class="mt-15"><a href="#">Chloe Ava</a></h4>
                            <span class="color-gray">Consultant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Style One
    ====================================================-->
@endsection
