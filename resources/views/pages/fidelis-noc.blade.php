@extends('layouts.pages')

@section('content')
    <!-- Development area start -->
    <section class="development__area">
        <div class="container g-0 line pt-130 pb-150">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title animation__char_come">NOC</h2>
                        <h2 style="">Network Operation Center</h2>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="development__wrapper">
                        <div class="development__content">
                            <p>Fidelis Technology Services is a leading provider of NOC aka Network Operations Center
                                solutions
                                that help organizations monitor and manage their infrastructure support to ensure its
                                stability and
                                performance.</p>
                            <p>Whether you need to optimize an existing NOC or want to establish a new NOC, Fidelis
                                is ideally positioned to be your partner of choice.</p>
                        </div>
                        <ul>
                            <li>+ Proactive Monitoring:</li>
                            <li>+ Customizable:</li>
                            <li>+ Cloud Migration</li>
                            <li>+ 24/7 Monitoring:</li>
                            <li>+ Increased Uptime:</li>
                            <li>+ Improved Support: & Cost Effective</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                    <div class="development__img">
                        <img src="/assets/imgs/noc/brett-sayles.jpg" alt="Development Image" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="development__img">
                        <img src="/assets/imgs/noc/ali-pazani.jpg" alt="Development Image" data-speed="auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Development area end -->


    <!-- Service detail area start -->
    <section class="service__detail">
        <div class="container g-0 line pb-140">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title title-anim">Choosing Fidelis NOC solutions for unparalleled infrastructure
                            support, maximizing uptime, and enhancing the quality of your IT operations.</h2>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="service__detail-circle">
                        <span></span>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9">
                    <div class="service__detail-img">
                        <img src="/assets/imgs/thumb/service-detail.png" alt="Service detail image">
                        <img src="/assets/imgs/icon/shape-6.png" alt="Service shape image" class="sd-shape">
                    </div>
                    <div class="service__detail-content">
                        <p><strong>Healthcare:</strong> In the healthcare industry, NOC solutions are critical for ensuring
                            that patient data is
                            protected and that medical equipment is functioning properly. Fidelis NOC solutions can help
                            healthcare organizations monitor and manage their infrastructure, ensuring that any issues are
                            detected and resolved quickly.</p>
                        <p><strong>Retail:</strong> In the retail industry, NOC solutions are essential for ensuring that
                            point-of-sale (POS) systems
                            are functioning properly and that customer data is protected. Fidelis NOC solutions can help
                            retailers
                            monitor and manage their infrastructure, ensuring that any issues are detected and resolved
                            quickly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service detail area end -->

    @include('components.why-chooseus')
    @include('components.testimonial')

@endsection

@section('script')
    <script>
        // $(document).ready(function(){
        //     $( ".accordion-header" ).mouseover(function(){
        //     $( ".accordion-button" ).trigger( "click" );
        //     });
        // });	
    </script>
@endsection