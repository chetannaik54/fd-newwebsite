@extends('layouts.pages')

@section('content')
    <!-- Development area start -->
    <section class="development__area">
        <div class="container g-0 line pt-130 pb-150">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 cs-modalarea">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title animation__char_come">AMS</h2>
                        <h2 style="">Asset Management Solutions</h2>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mt-5 cta__sub-title text-white color-white modal-trigger">Download brochure</button>

                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="development__wrapper">
                        <div class="development__content">
                            <p>AMS is a comprehensive solution designed to help organizations
                                manage, control, and track their assets. AMS delivers cloud-based services that monitor all
                                assets in real-time, providing organizations with real-time information about every asset. We help you
                                track and manage your hardware, software, and licenses to ensure that your IT environment is running
                                efficiently and effectively. </p>
                            <p>Our AM solution also helps you make informed decisions about technology
                                investments by providing real-time information about your assets. With Fidelis asset management solution, you can
                                be confident that your IT assets are well-managed and up-to-date.</p>
                        </div>
                        <ul>
                            <li>+ Asset Tracking and Management</li>
                            <li>+ Cost Optimization</li>
                            <li>+ Vendor Performance Measurement</li>
                            <li>+ IT Asset Management</li>
                            <li>+ Data Security</li>
                            <li>+ Real-time Monitoring</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                    <div class="development__img">
                        <img src="/assets/imgs/ams/vojtech-okenka-392018.jpg" alt="Development Image" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="development__img">
                        <img src="/assets/imgs/ams/drew-williams-2657669.jpg" alt="Development Image" data-speed="auto">
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
                        <h2 class="sec-title title-anim">Choose AMS for effective and efficient asset management, real-time monitoring and
                            comprehensive organizational-level services across industries.</h2>
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
                        <p><strong>Healthcare:</strong> AMS helps healthcare organizations manage their medical equipment, ensuring that
                            all assets are in good condition and ready for use. The software helps healthcare organizations to
                            keep track of their assets, reducing the risk of equipment failures and increasing patient safety.</p>
                        <p><strong>Retail:</strong> AMS helps retail organizations to manage their inventory and keep track of their assets,
                            reducing the risk of stock shortages and increasing customer satisfaction. The software provides
                            real-time information about stock levels, enabling retail organizations to respond quickly to changes in
                            demand.</p>
                        <p><strong>Manufacturing:</strong> AMS helps manufacturing organizations to manage their production assets,
                            ensuring that all assets are operating effectively and efficiently. The software provides real-time
                            information about the performance of production assets, enabling organizations to respond quickly to
                            any changes in production demand.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service detail area end -->

    @include('components.why-chooseus')
    @include('components.testimonial')
@endsection
