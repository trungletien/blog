@extends('layouts.frontend')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <!-- <h2 class="breadcrumb-title">@@title</h2> -->
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">FAQ’s</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->






<div id="main-wrapper">
    <div class="site-wrapper-reveal">

        <div class="faq-area">
            <div class="container">
                <div class="row ">
                    <div class="col">
                        <div class="row g-0 align-items-center faq-box-wrap">
                            <div class="col-lg-6 ">
                                <div class="faq-section-title" data-aos="fade-up">
                                    <img src="{{ asset('frontend/images/banners/faq-text.png') }}" alt="">

                                    <h4 class="title" data-aos="fade-up">
                                        Some Question
                                        And Answer,
                                        <span class="bold-text">Look’s here.</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-content-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item" data-aos="fade-up">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button faq-qustion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="number-of-accordion">01</span> How do the different types of drawings work?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body faq-ans">
                                                    <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                        industry. Lorem psum has been the dustry standard dummy text
                                                        since the printer into electronic.</p>
                                                    <p>Lorem Ipsum is simply dummy text offer printing and typeseting
                                                        industry since the printer into electronic.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item" data-aos="fade-up">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button faq-qustion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <span class="number-of-accordion">02</span> How long do the records of drawings persist?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body faq-ans">
                                                    <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                        industry. Lorem psum has been the dustry standard dummy text
                                                        since the printer into electronic.</p>
                                                    <p>Lorem Ipsum is simply dummy text offer printing and typeseting
                                                        industry since the printer into electronic.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item" data-aos="fade-up">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button faq-qustion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="number-of-accordion">03</span> Why do I need to be careful public drawings?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body faq-ans">
                                                    <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                        industry. Lorem psum has been the dustry standard dummy text
                                                        since the printer into electronic.</p>
                                                    <p>Lorem Ipsum is simply dummy text offer printing and typeseting
                                                        industry since the printer into electronic.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item" data-aos="fade-up">
                                            <h2 class="accordion-header" id="headingfour">
                                                <button class="accordion-button faq-qustion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="number-of-accordion">04</span> Can I use RANDOM.ORG to draw straws?
                                                </button>
                                            </h2>
                                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body faq-ans">
                                                    <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                        industry. Lorem psum has been the dustry standard dummy text
                                                        since the printer into electronic.</p>
                                                    <p>Lorem Ipsum is simply dummy text offer printing and typeseting
                                                        industry since the printer into electronic.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item" data-aos="fade-up">
                                            <h2 class="accordion-header" id="headingfive">
                                                <button class="accordion-button faq-qustion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="number-of-accordion">05</span> Do the numbers exhibit Benford's Law?
                                                </button>
                                            </h2>
                                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body faq-ans">
                                                    <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                        industry. Lorem psum has been the dustry standard dummy text
                                                        since the printer into electronic.</p>
                                                    <p>Lorem Ipsum is simply dummy text offer printing and typeseting
                                                        industry since the printer into electronic.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item" data-aos="fade-up">
                                            <h2 class="accordion-header" id="headingsix">
                                                <button class="accordion-button faq-qustion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="number-of-accordion">06</span> Are the numbers suitable for experiments?
                                                </button>
                                            </h2>
                                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                                <div class="accordion-body faq-ans">
                                                    <p>Lorem Ipsum is simply dummy text of printing and typesetting
                                                        industry. Lorem psum has been the dustry standard dummy text
                                                        since the printer into electronic.</p>
                                                    <p>Lorem Ipsum is simply dummy text offer printing and typeseting
                                                        industry since the printer into electronic.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
