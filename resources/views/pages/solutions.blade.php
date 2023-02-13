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


    <!-- Workflow area start -->
    <section class="workflow__area-6">
        <div class="container g-0 line pb-130">
            <div class="line-3"></div>
            <div class="workflow__wrapper-6">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="workflow__slide-6">
                            <h6 class="workflow__title-6">Planning and <br>sketching</h6>
                            <p>Modern and unique design practically point of view, it risks not meeting the huge
                                expectations
                            </p>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="workflow__slide-6">
                            <h6 class="workflow__title-6">Team <br>working</h6>
                            <p>Modern and unique design practically point of view, it risks not meeting the huge
                                expectations
                            </p>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="workflow__slide-6">
                            <h6 class="workflow__title-6">Flowchart and <br>wireframe</h6>
                            <p>Modern and unique design practically point of view, it risks not meeting the huge
                                expectations
                            </p>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                        <div class="workflow__slide-6">
                            <h6 class="workflow__title-6">User experience <br>Testing</h6>
                            <p>Modern and unique design practically point of view, it risks not meeting the huge
                                expectations
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Workflow area end -->


    <!-- Service detail area start -->
    <section class="service__detail">
        <div class="container g-0 line pb-140">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title title-anim" style="max-width:100%;">Choosing Fidelis solutions for unparalleled
                            infrastructure support, maximizing uptime, and enhancing the quality of your IT operations.</h2>
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
                        {{-- <p><strong>Healthcare:</strong> In the healthcare industry, NOC solutions are critical for ensuring
                            that patient data is
                            protected and that medical equipment is functioning properly. Fidelis NOC solutions can help
                            healthcare organizations monitor and manage their infrastructure, ensuring that any issues are
                            detected and resolved quickly.</p>
                        <p><strong>Retail:</strong> In the retail industry, NOC solutions are essential for ensuring that
                            point-of-sale (POS) systems
                            are functioning properly and that customer data is protected. Fidelis NOC solutions can help
                            retailers
                            monitor and manage their infrastructure, ensuring that any issues are detected and resolved
                            quickly.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service detail area end -->

    <!-- FAQ area start -->
    <section class="faq__area">
        <div class="container g-0 line pb-140">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="faq__img">
                        <img src="/assets/imgs/thumb/faq.jpg" alt="FAQ Image" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="faq__content">
                        <h2 class="faq__title title-anim">Across Managed Services</h2>

                        <div class="faq__list">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            IT Service Desk Management
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Data Center Management
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Cloud Migration
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Application Management
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Network Management
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            End User Services
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Tools
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Support
                                        </button>
                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ area end -->

    <!-- Workflow area start -->
    <section class="workflow__area-3">
        <div class="workflow__wrapper-3">
            <div class="choose-wrapper wf_panel">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="choose-title-wrapper">
                                <h2 class="choose-title title-anim">why <br> choose us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="research__area wf_panel pt-150">
                <div class="container inner_content">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title">why <br>choose us</h2>
                                <h3 class="sec-title">Highly customisable IT solutions,</h3>
                                <p>At Fidelis Group, we converge highly customisable IT solutions, revolutionary
                                    opportunities,
                                    value-based governance, the creation of business processes, and an interface to
                                    collective
                                    consulting for the customers. Leading the industry for more than a decade, we
                                    endeavoured
                                    creating improved innovative systems, executions, and sustainable development for our
                                    customers augmented by expertise, knowledge, intelligence, seamless solutions, research,
                                    collaboration, talent, the industry, and stakeholders.
                                </p>
                            </div>
                            <ul class="research__tools">
                                <li><a href="#">SOC</a></li>
                                <li><a href="#">AMS</a></li>
                            </ul>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="research__list">
                                <div class="research__item">
                                    <div class="research__number">
                                        <span>60%</span>
                                    </div>
                                    <div class="research__info">
                                        <h4 class="research__title">Our Strategy</h4>
                                        <p>Your marketing strategy optimizing performances doesn’t have to be a guessing
                                            game.</p>
                                    </div>
                                </div>

                                <div class="research__item">
                                    <div class="research__number">
                                        <span>95%</span>
                                    </div>
                                    <div class="research__info">
                                        <h4 class="research__title">Our Expertise</h4>
                                        <p>Your marketing strategy optimizing performances doesn’t have to be a guessing
                                            game.</p>
                                    </div>
                                </div>

                                <div class="research__item">
                                    <div class="research__number">
                                        <span>70%</span>
                                    </div>
                                    <div class="research__info">
                                        <h4 class="research__title">Our Accuracy</h4>
                                        <p>Your marketing strategy optimizing performances doesn’t have to be a guessing
                                            game.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="counter__area-3 wf_panel">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title">Why <br>Choose Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <div class="counter__wrapper-3">
                                <div class="counter__item-3">
                                    <h2 class="counter__number">20k</h2>
                                    <p>Sourcing <br>completed</p>
                                </div>
                                <div class="counter__item-3">
                                    <h2 class="counter__number">82+</h2>
                                    <p>Happy <br>customers</p>
                                </div>
                                <div class="counter__item-3">
                                    <h2 class="counter__number">16</h2>
                                    <p>Years <br>experiences</p>
                                </div>
                                <div class="counter__item-3">
                                    <h2 class="counter__number">98</h2>
                                    <p>Awards <br>achievement</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="counter__img-3">
                                <img src="/assets/imgs/thumb/counter-3.png" alt="Counter Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA area start -->
            <div class="cta__area-3 wf_panel">
                <div class="container pt-150 pb-150">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="cta__content-3">
                                <p class="cta__sub-title-2">Have you project in mind?</p>
                                <h2 class="cta__title-2">Let’s make something great together!</h2>
                                <div class="btn_wrapper">
                                    <a href="{{ route('contact-us') }}"
                                        class="wc-btn-black btn-hover btn-item"><span></span>Contact
                                        <br>with
                                        us <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA area end -->

        </div>
    </section>
    <!-- Workflow area end -->

    <!-- Award area start -->
    <section class="award__area-7">
        <div class="container">
            <div class="row inherit_row">
                <div class="col-xxl-12">
                    <div class="award__top-7">
                        <div class="award__counter fade_bottom_2">
                            <h2 class="counter__number">20K+</h2>
                            <p>Resources Allocated</p>
                        </div>
                        <div class="award-video-7">
                            <video loop muted autoplay playsinline style="width: 50%; left: 30%;">
                                <source src="/assets/video/video.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <div class="award__btm-7">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                        <div class="award__left-7">
                            <h2 class="sec-title title-anim">Projects <br> awards</h2>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-8">
                        <div class="award__mid-7 text-anim">
                            <p>Holisticly actualize new clients for high-quality initiatives for ompellingly
                                enhance users whereas.</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="award__right-7">
                            <div class="award__list-7">
                                <div class="award__item-7 zoom_in">
                                    <img src="{{ asset('assets/imgs/awards/award1.png') }}" alt="Image">
                                    <h3 class="title">INDIA SME 100</h3>
                                </div>
                                <div class="award__item-7 zoom_in">
                                    <img src="{{ asset('assets/imgs/awards/msp-alliance.png') }}" alt="Image">
                                    <h3 class="title">ISO Certified</h3>
                                </div>
                                <div class="award__item-7 zoom_in">
                                    <img src="{{ asset('assets/imgs/awards/award2.png') }}" alt="Image">
                                    <h3 class="title">MSP Alliance</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Award area end -->


    <!-- Testimonial area start -->
    <section class="testimonial__area-4  pt-110">
        <div class="container g-0 line_4">
            <div class="line-col-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="row">
                <div class="col-xxl-12">
                    <div class="testimonial__sec-title text-anim">
                        <h2 class="sec-subtile-6">Testimonials</h2>
                        <h3 class="sec-title-6 title-anim">What our customer speaks</h3>
                        <p>We are Trusted by 10,000+ global customers.</p>
                    </div>
                </div>
                <div class="swiper testimonial__slider-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide testimonial__slide-4">
                            <img class="testimonial__img-4" src="https://ui-avatars.com/api/?name=Priyanka+MR"
                                alt="Testimonial Image">
                            <div class="testimonial__info-4">
                                <p>Fidelis has been a wonderful company starting out. Several things worth pointing out are
                                    within the overall atmosphere. Since Fidelis is in it's growth phase, it allows the
                                    management team to easily help everyone get acquainted with the overall job feel. My
                                    fellow team members and HR have been wonderful</p>
                                <h5 class="testimonial__name-4">Priyanka MR</h5>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial__slide-4">
                            <img class="testimonial__img-4" src="https://ui-avatars.com/api/?name=Vasim+Sutar"
                                alt="Testimonial Image">
                            <div class="testimonial__info-4">
                                <p>I must say you will get alot of opportunities to grow yourself here. Fidelis is a great
                                    organisation to work.
                                    A dedicated team of HR personnel to assist in recruitment to IT,Non-IT, Retail and other
                                    Sector.
                                    Awesome/Supportive Management and on Time salary.</p>
                                <h5 class="testimonial__name-4">Vasim Sutar</h5>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial__slide-4">
                            <img class="testimonial__img-4" src="https://ui-avatars.com/api/?name=Manikandan+ns"
                                alt="Testimonial Image">
                            <div class="testimonial__info-4">
                                <p>Fidelis is good place to work and has huge potential to grow. Management gives you space
                                    and opportunity to build yourself. Happy with the team I'm working with. Want to see
                                    Fidelis Technology to grow to next level</p>
                                <h5 class="testimonial__name-4">Manikandan ns</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__btn-4">
                        <div class="next-button swipper-btn"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="prev-button swipper-btn"><i class="fa-solid fa-arrow-right"></i></div>
                        <div class="pagination testimonial__pagination-4">
                            <div class="pag"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial area end -->
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
