@extends('layout.layout')

@section('content')
    <!-- Banner One Start
	====================================================-->
    <div class="page-banner overlay-secondery-8" style="background: url(/images/background/service.jpg) center center/ cover; padding: 150px 0;">
        <div class="container">
            <div class="banner-text text-center">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">Financial Statement Preparation</h1>
                        <nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Services</li>
                                <li class="breadcrumb-item active" aria-current="page">Financial Statement Preparation</li>
                            </ol>
                        </nav>
                        <div class="text-area color-white w-50 lg-w-80 md-w-100 d-table mx-auto mt-20">
                            <p>Accurate Financial Statements Are Key to Business Success</p>
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
                                    <h3 class="my-30 color-secondery">Accurate Financial Statements Are Key to Business Success</h3>
                                    <p class="mb-15">At Sedima Advisory and Finance, we know that well-prepared financial statements are essential for small and medium businesses to understand their financial position, make informed decisions, and comply with regulatory requirements. Whether you need reports for internal management, tax filings, or presenting to investors and lenders, our expert financial statement preparation services ensure accuracy and clarity.</p>
                                    <p>We tailor each set of financial statements to reflect your unique business needs, helping you gain confidence in your numbers and providing a solid foundation for growth, transparency, and financial planning.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-xl-4">
                    <div class="side-menu-list bg-gray">
                        <ul>
                            <li><a href="/service/financial_advisory_consulting">Financial Advisory & Consulting</a></li>
                            <li><a href="/service/accounting_bookkeeping">Accounting & Bookkeeping</a></li>
                            <li><a href="/service/risk_assessment_management">Risk Assessment & Management</a></li>
                            <li><a class="active" href="/service/financial_statement_preparation">Financial Statement Preparation</a></li>
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
                        <h2 class="color-white position-relative va-lb-line-w50-h2-primary pb-15 mb-30">Perfect for SMBs that:</h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="text-area color-white">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Need accurate and timely financial statements for internal review</li>
                            <li>Must comply with tax and regulatory reporting standards</li>
                            <li>Seek clarity for investors, lenders, or stakeholders</li>
                            <li>Want to make informed strategic decisions</li>
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
                            <strong>Core Financial Statements:</strong> Preparation of Profit & Loss, Balance Sheet, and Cash Flow statements.<br>
                            <strong>Customized Reporting:</strong> Tailored reports highlighting your key business metrics.<br>
                            <strong>Compliance Assurance:</strong> Ensure all reports meet regulatory and tax authority standards.<br>
                            <strong>Review and Verification:</strong> Detailed checks for accuracy and completeness.<br>
                            <strong>Periodic Reporting:</strong> Flexible reporting schedules to fit your needs.<br>
                            <strong>Audit Support:</strong> Assistance in preparing documentation and liaising with auditors.<br>
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
                            Review of existing financial data and reporting needs.<br>
                            Collection and validation of all financial information.<br>
                            Preparation of accurate financial statements.<br>
                            Presentation for your review and feedback.<br>
                            Final delivery and ongoing support for updates or queries.<br>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Massage Banner Two
    ====================================================-->
@endsection
