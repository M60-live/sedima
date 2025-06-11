@extends('layout.layout')

@section('content')
    <!-- Banner One Start
	====================================================-->
    <div class="page-banner overlay-secondery-8" style="background: url(images/background/2.jpg) bottom center/ cover; padding: 150px 0;">
        <div class="container">
            <div class="banner-text text-center">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">Accounting & Bookkeeping</h1>
                        <nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Services</li>
                                <li class="breadcrumb-item active" aria-current="page">Accounting & Bookkeeping</li>
                            </ol>
                        </nav>
                        <div class="text-area color-white w-50 lg-w-80 md-w-100 d-table mx-auto mt-20">
                            <p>Accurate Accounting and Bookkeeping Are the Backbone of a Healthy Business.</p>
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
                                    <h3 class="my-30 color-secondery">Accurate Accounting and Bookkeeping Are the Backbone of a Healthy Business.</h3>
                                    <p class="mb-15">At Sedima Advisory and Finance, we understand that managing your business finances can be overwhelming, especially when you’re focused on growth and daily operations. That’s why we offer reliable accounting and bookkeeping services tailored to small and medium businesses.</p>
                                    <p>Accurate financial records not only keep you compliant with tax and legal requirements but also provide the clear insights you need to make smart business decisions. With our expert support, you’ll have confidence in your numbers, peace of mind knowing your books are in order, and the freedom to focus on what you do best-running and growing your business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-xl-4">
                    <div class="side-menu-list bg-gray">
                        <ul>
                            <li><a href="/service/financial_advisory_consulting">Financial Advisory & Consulting</a></li>
                            <li><a class="active" href="/service/accounting_bookkeeping">Accounting & Bookkeeping</a></li>
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
                        <h2 class="color-white position-relative va-lb-line-w50-h2-primary pb-15 mb-30">Ideal for businesses needing:</h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="text-area color-white">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Accurate day-to-day financial record-keeping</li>
                            <li>Tax compliance and audit readiness</li>
                            <li>Streamlined payroll and supplier payments</li>
                            <li>Timely financial reports for decision-making</li>
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
                            <strong>Bookkeeping:</strong> Daily transaction recording and account reconciliations.<br>
                            <strong>Payroll Management:</strong> Ensure employees are paid accurately and on time.<br>
                            <strong>Tax Preparation Support:</strong> Organize records for smooth tax filing and compliance.<br>
                            <strong>Expense Tracking:</strong> Monitor costs and identify saving opportunities.<br>
                            <strong>Financial Reporting:</strong> Monthly or quarterly reports customized for your needs.<br>
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
                            Setup of bookkeeping systems tailored to your business.<br>
                            Regular data entry and transaction review.<br>
                            Monthly reconciliation and report generation.<br>
                            Continuous communication for updates and questions.<br>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Massage Banner Two
    ====================================================-->
@endsection
