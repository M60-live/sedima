@extends('layout.layout')

@section('content')
    <!-- Banner One Start
	====================================================-->
    <div class="page-banner overlay-secondery-8" style="background: url(/images/background/about.jpg) center center/ cover; padding: 150px 0;">
        <div class="container">
            <div class="banner-text text-center">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">My Profile</h1>
                        <nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                            </ol>
                        </nav>
                        <div class="text-area color-white w-50 lg-w-80 md-w-100 d-table mx-auto mt-20">
{{--                            <p>At Sedima Advisory and Finance, we are committed to helping small and medium businesses realize their full potential through expert financial management, clear insights, and personalized support. Our mission is to empower you with the tools and knowledge needed to build a profitable, sustainable business.</p>--}}
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
    {{--<section>
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
    </section>--}}
    <!-- End Team Style One
    ====================================================-->

    <!-- Start About Us
	====================================================-->
    <section id="about" class="about-us-3 position-relative bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-5">
                    <div class="about-img-2 wow animated slideInRight animated">
                        <img src="images/about/1.jpg" alt="image">
                        <div class="about-area-2 bg-secondery d-flex color-white p-40 wow animated slideInUp animated">
                            <p>If you’re looking for someone who understands both the structure of business and the soul behind it, I’d love to connect.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-7">
                    <div class="position-relative">
                        <div class="inner-title mb-30">
                            <h2 class="color-secondery xl-mt-30 wow animated slideInUp animated">Mpho Lekokotla, founder and director</h2>
                        </div>
                        <div class="text-area mb-30 wow animated slideInUp animated">
                            <p class="mb-15">
                                I hold a Postgraduate Diploma in Cost and Management Accounting and I’m a registered CIMA member, which means I’m trained to look beyond the numbers - analyzing risks, identifying opportunities, and guiding businesses toward sustainable profitability.<br><br>
                                With experience in risk, pricing, and financial strategy, I’ve worked on projects that involve everything from vehicle cost restructuring to advising on business performance. But beyond the numbers, what drives me is seeing people gain confidence in their vision and take control of their business journey.<br><br>
                                Sedima was born from my desire to merge technical expertise with a heart for service. I wanted to create more than just an accounting firm—I wanted to build a space where faith, purpose, and professional excellence meet.<br><br>
                                When I’m not working with clients, I create podcast content that blends real-life experiences with Biblical truth - helping others grow spiritually, personally, and professionally.
                            </p>
                            <p></p>
                        </div>
                        <div class="about-area-2 bg-secondery d-flex color-white p-40 wow animated slideInUp animated">
                            <p>I’m passionate about helping small and medium businesses unlock their full potential - because I believe growth should be accessible to every entrepreneur, not just those with big budgets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us
    ====================================================-->
@endsection
