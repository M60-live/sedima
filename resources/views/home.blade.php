@extends('layout.layout')

@section('content')
<!-- Start Slider
====================================================-->
<div class="full-row p-0 overflow-hidden">
    <div id="slider" style="width:1200px;height:805px;margin:0 auto;margin-bottom: 0px;">
        <!-- Slide 1-->
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
            <img width="1920" height="805" src="{{ asset('images/slider/1.jpg') }}" class="ls-bg" alt="" />
            <div style="width:100%; height:100%; background:rgba(8, 33, 54, 0.8); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationin:1500; durationout:400; parallaxlevel:0; position:fixed;"></div>
            <p style="font-weight:900; text-align:center; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:800px; font-family:'Nunito Sans', sans-serif; font-size:60px; line-height:80px; color:#fff; top:302px; left:50%; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:40; delayin:1000; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationin:1500; durationout:400; parallax:false; parallaxlevel:3;">GROW WITH EXPERT</p>
            <p style="font-weight:600; text-align:center;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:500px; font-family:'Nunito Sans', sans-serif; font-size:21px; line-height:50px; color:#ffffff; top:252px; left:50%; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:40; delayin:500; easingin:easeOutQuint; offsetyout:-200; durationin:1500; durationout:400; parallax:false; parallaxlevel:4;">EMPOWERING SMALL AND MEDIUM BUSINESSES</p>
            <p style="font-weight:400; text-align:center;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);width:720px; font-family:'Roboto', sans-serif; font-size:21px; line-height:32px; color:#ffffff; top:390px; left:50%; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:40; delayin:1800; easingin:easeOutQuint; offsetyout:-250; durationin:1500; durationout:400; parallax:false; parallaxlevel:2;">FINANCIAL ADVISORY & ACCOUNTING</p>
            <a style="" class="ls-l ls-hide-phone" href="#2" target="_self" data-ls="offsetyin:40; delayin:2600; easingin:easeOutQuint; offsetyout:-300; durationin:1500; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#052450; hovercolor:#ffffff; parallax:false; parallaxlevel:1;">
                <p style="font-weight:400; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:'Nunito Sans', sans-serif; font-size:15px; letter-spacing: 1px; line-height:30px; top:485px; left:50%; border-top:1px solid #fff; border-right:1px solid #fff; border-bottom:1px solid #fff; border-left:1px solid #fff; color:#ffffff; border-radius:0px; padding-top:10px; padding-bottom:10px; background:rgba(0, 0, 0, 0.1); white-space:normal;" class="">Consult</p>
            </a>
        </div>

        <!-- Slide 2-->
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;">
            <img width="1920" height="805" src="{{ asset('images/slider/2.jpg') }}" class="ls-bg" alt="" />
            <div style="width:100%; height:100%; background:rgba(8, 33, 54, 0.8); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationin:1500; durationout:400; parallaxlevel:0; position:fixed;"></div>
            <p style="font-weight:900; text-align:center; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:800px; font-family:'Nunito Sans', sans-serif; font-size:60px; line-height:80px; color:#fff; top:302px; left:50%; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:40; delayin:1000; easingin:easeOutQuint; filterin:blur(10px); offsetyout:-200; durationin:1500; durationout:400; parallax:false; parallaxlevel:3;">SOLUTIONS TAILORED</p>
            <p style="font-weight:500; text-align:center;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:500px; font-family:'Nunito Sans', sans-serif; font-size:21px; line-height:50px; color:#ffffff; top:252px; left:50%; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:40; delayin:500; easingin:easeOutQuint; offsetyout:-200; durationin:1500; durationout:400; parallax:false; parallaxlevel:4;">TRUSTED FINANCIAL</p>
            <p style="font-weight:400; text-align:center;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);width:720px; font-family:'Roboto', sans-serif; font-size:21px; line-height:32px; color:#ffffff; top:390px; left:50%; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:40; delayin:1800; easingin:easeOutQuint; offsetyout:-250; durationin:1500; durationout:400; parallax:false; parallaxlevel:2;">TO YOUR BUSINESS GOALS.</p>
            <a style="" class="ls-l ls-hide-phone" href="#2" target="_self" data-ls="offsetyin:40; delayin:2600; easingin:easeOutQuint; offsetyout:-300; durationin:1500; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#052450; hovercolor:#ffffff; parallax:false; parallaxlevel:1;">
                <p style="font-weight:400; text-align:center;cursor:pointer;padding-right:35px; padding-left:35px; font-family:'Nunito Sans', sans-serif; font-size:15px; letter-spacing: 1px; line-height:30px; top:485px; left:50%; border-top:1px solid #fff; border-right:1px solid #fff; border-bottom:1px solid #fff; border-left:1px solid #fff; color:#ffffff; border-radius:0px; padding-top:10px; padding-bottom:10px; background:rgba(0, 0, 0, 0.1); white-space:normal;" class="">Purchase Now</p>
            </a>
        </div>
    </div>
</div>
<!-- End Slider
====================================================-->
<!-- Start About Us
====================================================-->
<section class="about-us position-relative bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="inner-title mb-30">
                    <h3 class="color-secondery">About Sedima Advisory and Finance</h3>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="text-area mb-30">
                    <p>At Sedima Advisory and Finance, we are committed to helping small and medium businesses realize their full potential through expert financial management, clear insights, and personalized support. Our mission is to empower you with the tools and knowledge needed to build a profitable, sustainable business.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-style-4 py-40 px-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01">
                    <div class="round-xl-radius flat-large icon-white bg-primary">
                        <i class="flaticon-avatar"></i>
                    </div>
                    <h4 class="box-title-4 my-20 color-secondery">Financial Advisory & Consulting</h4>
                    <div class="text-area">
                        <p>Strategic advice to maximize profits, manage cash flow, and plan for growth.</p>
                    </div>
                    <a class="mt-20 d-inline-block flat-small icon-secondery btn-icon" href="/service/financial_advisory_consulting"><i class="flaticon-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-style-4 py-40 px-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01">
                    <div class="round-xl-radius flat-large icon-white bg-primary">
                        <i class="flaticon-creativity"></i>
                    </div>
                    <h4 class="box-title-4 my-20 color-secondery">Accounting & Bookkeeping</h4>
                    <div class="text-area">
                        <p>Accurate financial records and compliance made easy so you can focus on running your business.</p>
                    </div>
                    <a class="mt-20 d-inline-block flat-small icon-secondery btn-icon" href="/service/accounting_bookkeeping"><i class="flaticon-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-style-4 py-40 px-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01">
                    <div class="round-xl-radius flat-large icon-white bg-primary">
                        <i class="flaticon-money"></i>
                    </div>
                    <h4 class="box-title-4 my-20 color-secondery">Risk Assessment & Management</h4>
                    <div class="text-area">
                        <p>Identify and mitigate financial risks to protect your business and ensure long-term stability.</p>
                    </div>
                    <a class="mt-20 d-inline-block flat-small icon-secondery btn-icon" href="/service/risk_assessment_management"><i class="flaticon-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-style-4 py-40 px-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01">
                    <div class="round-xl-radius flat-large icon-white bg-primary">
                        <i class="flaticon-money"></i>
                    </div>
                    <h4 class="box-title-4 my-20 color-secondery">Financial Statement Preparation</h4>
                    <div class="text-area">
                        <p>Clear, reliable reports designed to give you confidence and support decision-making.</p>
                    </div>
                    <a class="mt-20 d-inline-block flat-small icon-secondery btn-icon" href="/service/financial_statement_preparation"><i class="flaticon-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us
====================================================-->
<!-- Why Choose Us Start
====================================================-->
<section class="pattern-2 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="title mb-30 w-50 lg-w-80 text-center mx-auto">
                    <span class="color-primary">Our Importances</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">Why Choose Us</h2>
                    <p>Personalized service tailored specifically for small and medium businesses.</p>
                    <p>Expertise in practical, actionable financial solutions.</p>
                    <p>Transparent communication without confusing jargon.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Us End
====================================================-->

<!-- Pricing Table Start
====================================================-->
<section class="about-us position-relative bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="title mb-30 w-50 lg-w-80 text-center mx-auto">
                    <span class="color-primary">Pricing Plan</span>
                    <h2 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20">Our Packages</h2>
                    <p>Taciti ligula neque non nisi sapien sapien sociosqu proin fusce aptent sit amet tellus id. Dictum mattis nisl nullam ligula.</p>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="table-item border-l-5-primary bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 mt-30">
                    <div class="table-header pt-40 px-30">
                        <div class="table-header-left d-inline-block">
                            <h4 class="color-secondery">Basic Package</h4>
                            <span class="color-gray d-inline-block">Small Business</span>
                        </div>
                        {{--<div class="table-header-right float-right">
                            <h3 class="color-primary">$59</h3>
                        </div>--}}
                    </div>
                    <hr class="my-30">
                    <div class="table-body px-30">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Bookkeping (up to 50 transactions, monthly bank reconcilation, basic exepences tracking)</li>
                            <li>Financial Statement preparation for SARS compliance</li>
                            <li>Tax Services</li>
                            <li>Company Tax returns</li>
                            <li>Monthly VAT returns</li>
                            <li>Includes cloud accounting Software</li>
                            <li>Business consulting(Cashflow, Profitablity, Growth strategy)</li>
                        </ul>
                    </div>
                    <hr class="my-30">
                    <div class="table-footer pb-40 px-30">
                        <a class="btn btn-secondery" href="#">Get Quote</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="table-item border-l-5-primary bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 mt-30">
                    <div class="table-header pt-40 px-30">
                        <div class="table-header-left d-inline-block">
                            <h4 class="color-secondery">Standard Package</h4>
                            <span class="color-gray">Small Business</span>
                        </div>
                        {{--<div class="table-header-right float-right">
                            <h3 class="color-primary">$299</h3>
                        </div>--}}
                    </div>
                    <hr class="my-30">
                    <div class="table-body px-30">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Bookkeping + Basic Financial statements (income statement + balance sheet), Monthly reports (max 100 transaction)</li>
                            <li>Financial Statement preparation for SARS compliance</li>
                            <li>Tax Services</li>
                            <li>Company Tax returns</li>
                            <li>Monthly VAT returns</li>
                            <li>Payroll Services up to 10 employees, can add additional employees</li>
                            <li>Business consulting(Cashflow, Profitablity, Growth strategy)</li>
                            <li>Includes cloud accounting Software</li>
                        </ul>
                    </div>
                    <hr class="my-30">
                    <div class="table-footer pb-40 px-30">
                        <a class="btn btn-secondery" href="#">Get Quote</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="table-item border-l-5-primary bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 mt-30">
                    <div class="table-header pt-40 px-30">
                        <div class="table-header-left d-inline-block">
                            <h4 class="color-secondery">Premium Package</h4>
                            <span class="color-gray">Small Business</span>
                        </div>
                        {{--<div class="table-header-right float-right">
                            <h3 class="color-primary">$499</h3>
                        </div>--}}
                    </div>
                    <hr class="my-30">
                    <div class="table-body px-30">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Bookkeping + Basic Financial statements (income statement + balance sheet), Monthly reports (max 100 transaction)</li>
                            <li>Financial Statement preparation for SARS compliance</li>
                            <li>Tax Services</li>
                            <li>Company Tax returns</li>
                            <li>Monthly VAT returns</li>
                            <li>Payroll Services up to 25 employees, can add additional employees</li>
                            <li>Business consulting(Cashflow, Profitablity, Growth strategy)</li>
                            <li>Includes cloud accounting Software</li>
                        </ul>
                    </div>
                    <hr class="my-30">
                    <div class="table-footer pb-40 px-30">
                        <a class="btn btn-secondery" href="#">Get Quote</a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="table-item border-l-5-primary bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 mt-30">
                    <div class="table-header pt-40 px-30">
                        <div class="table-header-left d-inline-block">
                            <h4 class="color-secondery">Essential Package</h4>
                            <span class="color-gray d-inline-block">Medium Business</span>
                        </div>
                        {{--<div class="table-header-right float-right">
                            <h3 class="color-primary">$59</h3>
                        </div>--}}
                    </div>
                    <hr class="my-30">
                    <div class="table-body px-30">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Bookkeeping (up to 300 transactions, reconciliations, suppliers/customer ledgers, basic reports)</li>
                            <li>Annual financial statements + notes</li>
                            <li>Monthly financial reporting cash flow forecasts / budgets</li>
                            <li>Payroll up to 10 employees, Includes PAYE, UIF, payslips, EMP201 submissions</li>
                            <li>Tax services</li>
                            <li>Vat returns</li>
                            <li>Company tax</li>
                            <li>Provisional tax</li>
                            <li>Includes Cloud accounting software</li>
                            <li>Business consulting</li>
                        </ul>
                    </div>
                    <hr class="my-30">
                    <div class="table-footer pb-40 px-30">
                        <a class="btn btn-secondery" href="#">Get Quote</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="table-item border-l-5-primary bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 mt-30">
                    <div class="table-header pt-40 px-30">
                        <div class="table-header-left d-inline-block">
                            <h4 class="color-secondery">Advanced Package</h4>
                            <span class="color-gray">Medium Business</span>
                        </div>
                        {{--<div class="table-header-right float-right">
                            <h3 class="color-primary">$299</h3>
                        </div>--}}
                    </div>
                    <hr class="my-30">
                    <div class="table-body px-30">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Full bookkeeping, monthly management reports asset register maintenance, working papers</li>
                            <li>Annual financial statements + notes</li>
                            <li>Monthly financial reporting cash flow forecasts / budgets</li>
                            <li>Payroll 11-30 employees, Includes PAYE, UIF, payslips, EMP201 submissions</li>
                            <li>Tax services</li>
                            <li>Vat returns</li>
                            <li>Company tax</li>
                            <li>Provisional tax</li>
                            <li>Includes Cloud accounting software</li>
                            <li>Business consulting</li>
                        </ul>
                    </div>
                    <hr class="my-30">
                    <div class="table-footer pb-40 px-30">
                        <a class="btn btn-secondery" href="#">Get Quote</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="table-item border-l-5-primary bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01 mt-30">
                    <div class="table-header pt-40 px-30">
                        <div class="table-header-left d-inline-block">
                            <h4 class="color-secondery">Full Accounting</h4>
                            <span class="color-gray">Medium Exclusive</span>
                        </div>
                        {{--<div class="table-header-right float-right">
                            <h3 class="color-primary">$499</h3>
                        </div>--}}
                    </div>
                    <hr class="my-30">
                    <div class="table-body px-30">
                        <ul class="list-style-icon-check list-style-icon-primary">
                            <li>Bookkeeping + monthly financial statements, monthly meetings, budgeting support</li>
                            <li>Annual financial statements + notes</li>
                            <li>Monthly financial reporting cash flow forecasts/ budgets</li>
                            <li>Payroll 11-30 employees</li>
                            <li>Includes PAYE, UIF, payslips, EMP201 submissions</li>
                            <li>Tax services</li>
                            <li>Vat returns</li>
                            <li>Company tax</li>
                            <li>Provisional tax</li>
                            <li>Includes Cloud accounting software</li>
                            <li>Business consulting</li>
                        </ul>
                    </div>
                    <hr class="my-30">
                    <div class="table-footer pb-40 px-30">
                        <a class="btn btn-secondery" href="#">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Table End
====================================================-->

@endsection
