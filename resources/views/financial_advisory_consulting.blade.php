@extends('layout.layout')

@section('content')
    <!-- Banner One Start
	====================================================-->
    <div class="page-banner overlay-secondery-8" style="background: url(images/background/2.jpg) bottom center/ cover; padding: 150px 0;">
        <div class="container">
            <div class="banner-text text-center">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">Financial Advisory & Consulting</h1>
                        <nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Services</li>
                                <li class="breadcrumb-item active" aria-current="page">Financial Advisory & Consulting</li>
                            </ol>
                        </nav>
                        <div class="text-area color-white w-50 lg-w-80 md-w-100 d-table mx-auto mt-20">
                            <p>Strategic Financial Advisory Designed to Propel Your Business Forward.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner One End
    ====================================================-->


    <!-- Start Service Details
	====================================================-->
    <div class="py-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 col-xl-8">
                    <div class="service-details-one">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="owl-carousel service-slider owl-nav-style-one position-relative">
                                    <img src="{{ asset('images/other/2.jpg') }}" alt="images">
                                    <img src="{{ asset('images/other/3.jpg') }}" alt="images">
                                    <img src="{{ asset('images/other/4.jpg') }}" alt="images">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="text-area">
                                    <h3 class="my-30 color-secondery">Strategic Financial Advisory Designed to Propel Your Business Forward.</h3>
                                    <p class="mb-15">At Sedima Advisory and Finance, we know that small and medium businesses face unique financial challenges and opportunities. Our financial advisory services are tailored to help you navigate these complexities with confidence. Whether it’s improving profitability, managing cash flow, or planning for sustainable growth, we provide clear, actionable advice that empowers you to make informed decisions.</p>
                                    <p>With our expert guidance, you’ll gain a deeper understanding of your financial health and a strategic roadmap to achieve your business goals — helping you turn financial uncertainty into opportunity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-xl-4">
                    <div class="side-menu-list bg-gray">
                        <ul>
                            <li><a class="active" href="/service/financial_advisory_consulting">Financial Advisory & Consulting</a></li>
                            <li><a href="/service/accounting_bookkeeping">Accounting & Bookkeeping</a></li>
                            <li><a href="/service/risk_assessment_management">Risk Assessment & Management</a></li>
                            <li><a href="/service/financial_statement_preparation">Financial Statement Preparation</a></li>
                        </ul>
                    </div>
                    @include('component.service_contact')
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Details
    ====================================================-->


    <!-- Start Massage Banner Two
	====================================================-->
    <div class="massage-banner-two overlay-secondery-9 py-80" style="background: url(images/background/4.jpg) center center/ cover fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title">
                        <span class="color-primary">Who This Service Is For?</span>
                        <h2 class="color-white position-relative va-lb-line-w50-h2-primary pb-15 mb-30">Our financial advisory services are ideal for small and medium businesses looking to:</h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="text-area color-white">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Improve profitability and cash flow management</li>
                            <li>Plan for sustainable growth and expansion</li>
                            <li>Navigate complex financial decisions with confidence</li>
                            <li>Mitigate risks and capitalize on new opportunities</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title">
                        <h2 class="color-white position-relative va-lb-line-w50-h2-primary pb-15 mt-80 mb-30">What We Offer?</h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="text-area color-white">
                        <p>
                            <strong>Profitability Analysis:</strong> Understand your revenue streams and cost drivers to maximize profits.<br>
                            <strong>Cash Flow Management:</strong> Keep your operations running smoothly by managing inflows and outflows effectively.<br>
                            <strong>Budgeting and Forecasting:</strong> Plan ahead with realistic financial forecasts that support your business goals.<br>
                            <strong>Strategic Planning:</strong> Develop long-term strategies aligned with your vision and market conditions.<br>
                            <strong>Investment and Financing Advice:</strong> Guidance on loans, equity, and capital raising options.<br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title">
                        <h2 class="color-white position-relative va-lb-line-w50-h2-primary pb-15 mt-80 mb-30">How It Works?</h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="text-area color-white">
                        <p>
                            Initial consultation to understand your business goals and challenges.<br>
                            Detailed financial analysis and review.<br>
                            Customized advisory report with actionable recommendations.<br>
                            Ongoing support to implement strategies and monitor progress.<br>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Massage Banner Two
    ====================================================-->
@endsection
