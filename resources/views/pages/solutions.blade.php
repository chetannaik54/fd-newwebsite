@extends('layouts.pages')

@section('content')
    @php $solutions = $solutions[0];  @endphp

    <!-- Development area start -->
    <section class="development__area">
        <div class="container g-0 line pt-130 pb-150">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title animation__char_come">{{ $solutions->name }}</h2>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="development__wrapper">
                        <div class="development__contents">
                            @php $intro = explode('<br />', str_replace('<br><br>', '<br>',  nl2br($solutions->introduction)) ); @endphp

                            @foreach ($intro as $content)
                                <p>{{ $content }}</p>
                                <br>
                            @endforeach
                        </div>
                        @php $offer = explode('<br>', $solutions->offer); @endphp
                        <ul>
                            @foreach ($offer as $item)
                                <li>+ {{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                    <div class="development__img">
                        <img src="{{ asset('assets/imgs/service/'.$solutions->img) }}" alt="Development Image" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="development__img">
                        <img src="/assets/imgs/thumb/dev-2.jpg" alt="Development Image" data-speed="auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Development area end -->

    <!-- Service detail area start -->
    @if(Request::route()->getName() != "talent.kloud")
    <section class="service__detail">
        <div class="container g-0 line pb-140">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrapper">
                        @php $sourcing = array('contingent-staffing', 'msp-partnership', 'short-term-engagement'); @endphp
                        @if(in_array(Request::route()->getName(), $sourcing))
                            <h2 class="sec-title title-anim" style="max-width:100%;">How we add value to our partners</h2>
                        @elseif(Request::route()->getName() == "talent.kloud")
                        @elseif(Request::route()->getName() == "learning-academy")
                        <ul style="font-size: 20px;">
                            <li>+ <strong>Security Solutions</strong> – PAM, IAM, MFA, SIEM, SAST & DAST, EDR.</li>
                            <li>+ <strong>Cloud Technologies</strong>  – AWS, Azure, GCP & Private Cloud</li>
                            <li>+ <strong>RPA Solutions </strong>– UiPath</li>
                            <li>+ <strong>Service Desk Analyst program</strong></li>
                            <li>+ <strong>Customized technical trainings </strong>– Based on client needs.</li>
                        </ul>
                        @else
                            <h2 class="sec-title title-anim" style="max-width:100%;">Choosing Fidelis solutions for unparalleled infrastructure support, maximizing uptime, and enhancing the quality of your IT operations.</h2>
                        @endif
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                    <div class="service__detail-circle">
                        <span></span>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9">
                    <div class="service__detail-img">
                        {{-- <img src="/assets/imgs/thumb/service-detail.png" alt="Service detail image"> --}}
                        <img src="/assets/imgs/service/alt/{{ $solutions->alternate_img }}" alt="Service detail image">
                        <img src="/assets/imgs/icon/shape-6.png" alt="Service shape image" class="sd-shape">
                    </div>
                    @php $sourcing = array('contingent-staffing', 'msp-partnership', 'short-term-engagement'); @endphp
                    @if(in_array(Request::route()->getName(), $sourcing))
                    <div class="service__detail-content">
                        <div>
                            <ul>
                                <li><strong>Quality Fulfilment:</strong> </li>
                                <li>+ Our recruiting process & metrics are designed to complement client scorecards to improve coverage, quality, & cost.</li>
                                <li>+ Recruiting engine to ensure the best talent - opportunity match.</li>
                                <li>+ Our talent quality and consultant care has consistently resulted in above industry average redeployment & FT conversion rates.</li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><strong>Collaboration:</strong> </li>
                                <li>+ We help clients minimize spend & increase market share by sharing insights & market intelligence.</li>
                                <li>+ Ensuring consistent & transparent communication from program managers.</li>
                                <li>+ Our talent quality and consultant care has consistently resulted in above industry average redeployment & FT conversion rates.</li>
                            </ul>
                        </div>
                        <h3 style="grid-column: span 2">Our goal is to become a trusted partner of choice for clients by focusing on creating value and enabling their success.</h3>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Service detail area end -->

    @include('components.why-chooseus')

    @php $exclude = array('contingent-staffing', 'msp-partnership', 'short-term-engagement'); @endphp
    @if(in_array(Request::route()->getName(), $exclude))
        @include('components.sourcing')
    @else
        @include('components.testimonial')
    @endif

@endsection

@section('script')
    {{-- <script>
        $(document).ready(function(){
            $( ".accordion-header" ).mouseover(function(){
            $( ".accordion-button" ).trigger( "click" );
            });
        });	
    </script> --}}
@endsection
