@extends('layout.layout')

@section('content')
    <!-- Banner One Start
	====================================================-->
    <div class="page-banner overlay-secondery-8" style="background: url(images/background/2.jpg) bottom center/ cover; padding: 150px 0;">
        <div class="container">
            <div class="banner-text text-center">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">Contact Us</h1>
                        <nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                        <div class="text-area color-white w-50 lg-w-80 md-w-100 d-table mx-auto mt-20">
                            <p>Get in touch with us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner One End
    ====================================================-->

    <!-- Start Contact Info
	====================================================-->
    <section class="position-relative background-map">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="title">
                        <span class="color-primary">Contact US</span>
                        <h2 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-30">Our Support Center.</h2>
                    </div>
                    <div class="contact-form-2">
                        <form class="contact-message-2" id="contact-form" action="email.php" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name*"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" placeholder="Email*"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="subject" type="text" name="subject" placeholder="Subject*"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message*"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-secondery" id="Send" type="submit" value="Send"/>
                            </div>
                            <div class="error-handel position-relative">
                                <div id="success">Your email sent Successfully, Thank you.</div>
                                <div id="error"> Error occurred while sending email. Please try again later.</div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="contact-info md-mt-50">
                        <div class="title">
                            <span class="color-primary">Help</span>
                            <h2 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-30">For any kind of information.</h2>
                        </div>
                        <ul class="color-secondery">
                            <li>
                                Phone :
                                <span>(012) 345 657 900</span>
                            </li>
                            <li>
                                Email :
                                <span>info@sedimaadvisoryandfinance.co.za</span>
                            </li>
                            <li>
                                Address :
                                <span>379 San Isidro Street, Silverwood Estate, Centurion, 0157</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Form
    ====================================================-->
@endsection
