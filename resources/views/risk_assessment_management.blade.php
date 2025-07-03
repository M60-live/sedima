@extends('layout.layout')

@section('content')
    <!-- Banner One Start
	====================================================-->
    <div class="page-banner overlay-secondery-8" style="background: url(/images/background/service.jpg) center center/ cover; padding: 150px 0;">
        <div class="container">
            <div class="banner-text text-center">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">Risk Assessment & Management</h1>
                        <nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Services</li>
                                <li class="breadcrumb-item active" aria-current="page">Risk Assessment & Management</li>
                            </ol>
                        </nav>
                        <div class="text-area color-white w-50 lg-w-80 md-w-100 d-table mx-auto mt-20">
                            <p>Protect Your Business with Proactive Risk Assessment and Management</p>
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
                                    <img src="{{ asset('images/service/risk_assessment.jpg') }}" alt="images">
                                    <img src="{{ asset('images/service/risk_assessment.jpg') }}" alt="images">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="text-area">
                                    <h3 class="my-30 color-secondery">Protect Your Business with Proactive Risk Assessment and Management</h3>
                                    <p class="mb-15">In today’s fast-changing business environment, small and medium businesses face a variety of risks that can impact their financial health and long-term success. At Sedima Advisory and Finance, we help you identify, assess, and manage these risks before they become costly problems.</p>
                                    <p>Our risk assessment and management services provide you with a clear understanding of potential threats—financial, operational, or regulatory—and equip you with practical strategies to minimize their impact. With our expert guidance, you can safeguard your business assets, maintain compliance, and build resilience to thrive in any market condition.</p>
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
                            <li><a class="active" href="/service/risk_assessment_management">Risk Assessment & Management</a></li>
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
                        <h2 class="color-white position-relative va-lb-line-w50-h2-primary pb-15 mb-30">Designed for businesses that want to:</h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="text-area color-white">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Identify hidden financial or operational risks early</li>
                            <li>Comply with regulatory and industry standards</li>
                            <li>Protect cash flow and assets from unexpected shocks</li>
                            <li>Build a resilient business model that adapts to change</li>
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
                            <strong>Comprehensive Risk Assessments:</strong> Evaluate all areas of your business for potential risks.<br>
                            <strong>Risk Prioritization:</strong> Focus on the most critical risks with the highest impact.<br>
                            <strong>Mitigation Strategies:</strong> Customized plans to reduce or eliminate risk exposure.<br>
                            <strong>Compliance Checks:</strong> Ensure adherence to laws and regulations.<br>
                            <strong>Ongoing Monitoring:</strong> Regular reviews and updates to risk plans.<br>
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
                            Initial risk consultation to understand your current situation.<br>
                            Data collection and analysis of internal and external risks.<br>
                            Delivery of a risk assessment report with recommendations.<br>
                            Support in implementing risk controls and ongoing reviews.<br>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Massage Banner Two
    ====================================================-->
@endsection
