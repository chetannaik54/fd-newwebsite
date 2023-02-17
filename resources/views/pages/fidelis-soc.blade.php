@extends('layouts.pages')

@section('content')
    <!-- Development area start -->
    <section class="development__area">
        <div class="container g-0 line pt-130 pb-150">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 cs-modalarea">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title animation__char_come">SOC</h2>
                        <h2 style="">Security Operations Center</h2>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mt-5 cta__sub-title text-white color-white modal-trigger">Download brochure</button>

                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="development__wrapper">
                        <div class="development__content">
                            <p> Cybersecurity is a major concern for any business and Fidelis SOC aka Security Operations Center
                            solution provides a comprehensive approach to securing your IT environment. Our team of security
                            experts monitor your network for potential threats and respond quickly to prevent data breaches.</p>
                            <p> Fidelis SOC solutions provide real-time threat detection, prevention and response services to
                            organizations, with its advanced technology, Fidelis SOC enables organizations to identify and
                            mitigate cybersecurity threats proactively and effectively.</p>
                        </div>
                        <ul>
                            <li>+ Early threats detection</li>
                            <li>+ Increased efficiency</li>
                            <li>+ Security tools</li>
                            <li>+ Enhanced visibility</li>
                            <li>+ 24/7 monitoring</li>
                            <li>+ Secure all time.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                    <div class="development__img">
                        <img src="/assets/imgs/soc/pixabay-60504.jpg" alt="Development Image" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="development__img">
                        <img src="/assets/imgs/soc/scott-webb-430208.jpg" alt="Development Image" data-speed="auto">
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
                        <h2 class="sec-title title-anim">Choose Fidelis SOC Solutions for a comprehensive approach to securing your IT environment,
                            reducing the risk of cyber attacks, and improving your overall security posture.</h2>
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
                        <p><strong>Financial Services:</strong> Fidelis SOC solutions are ideal for financial institutions, as they require strict
                            security measures to protect sensitive customer information and transactions. Fidelis SOC provides
                            advanced threat detection and response services, ensuring that financial organizations are protected
                            against cyber-attacks and data breaches.</p>
                        <p><strong>Healthcare:</strong> Fidelis SOC solutions help healthcare organizations protect sensitive patient information
                            and electronic medical records (EMRs) from cyber threats. With its advanced threat detection and
                            response capabilities, Fidelis SOC helps healthcare organizations comply with regulations and secure
                            their IT environments.</p>
                        <p><strong>Government Agencies:</strong> Fidelis SOC solutions are designed to meet the stringent security
                            requirements of government agencies. With real-time threat detection and response capabilities,
                            Fidelis SOC helps government agencies protect sensitive information and secure their IT
                            environments against cyber attacks.</p>
                        <p><strong>Retail:</strong> Fidelis SOC solutions help retailers secure their IT environments against cyber threats,
                            protecting customer information and transactions. With advanced threat detection and response
                            capabilities, Fidelis SOC helps retailers ensure that they are compliant with regulations and secure
                            against cyber attacks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service detail area end -->

    @include('components.why-chooseus')
    @include('components.testimonial')

@endsection
