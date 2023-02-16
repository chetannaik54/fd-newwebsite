<!-- Workflow area start -->
<section class="workflow__area-3">
    <div class="workflow__wrapper-3">
        <div class="choose-wrapper wf_panel">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="choose-title-wrapper">
                            <h2 class="choose-title title-anim">why <br> choose fidelis</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="research__area wf_panel pt-150" style="overflow: hidden">
            <div class="container inner_content">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-sub-title">why <br>choose fidelis</h2>
                            <h3 class="sec-title">Highly customisable IT solutions</h3>
                            <p class="mw-100">At Fidelis Group, we converge highly customisable IT solutions,
                                revolutionary opportunities,
                                value-based governance, the creation of business processes, and an interface to
                                collective
                                consulting for the customers. Leading the industry for more than a decade, we
                                endeavoured
                                creating improved innovative systems, executions, and sustainable development for our
                                customers augmented by expertise, knowledge, intelligence, seamless solutions, research,
                                collaboration, talent, the industry and stakeholders.
                            </p>
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
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="counter__wrapper-3">
                            <div class="counter__item-3">
                                <h2 class="counter__number">2000+</h2>
                                <p>Projects <br>completed</p>
                            </div>
                            <div class="counter__item-3">
                                <h2 class="counter__number">10+</h2>
                                <p>Global <br> in the world</p>
                            </div>
                            <div class="counter__item-3">
                                <h2 class="counter__number">15+</h2>
                                <p>Years <br>experiences</p>
                            </div>
                            <div class="counter__item-3">
                                <h2 class="counter__number">2500+</h2>
                                <p>Fulltime <br>employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <div class="counter__img-3">
                            <video preload="auto" playsinline controls="off" src="{{ asset('assets/video/videoplayback.mp4') }}" style="max-width:130%; border-radius: 2%;"></video>
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
                            {{-- <p class="cta__sub-title-2">Let’s build together.</p> --}}
                            <h2 class="cta__title-2">Let’s make something great together!</h2>
                            <div class="btn_wrapper">
                                <a href="{{ route('contact-us') }}"
                                    class="wc-btn-black btn-hover btn-item"><span></span>Contact
                                    <br>us <i class="fa-solid fa-arrow-right"></i></a>
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
                        <h2 class="counter__number">2000+</h2>
                        <p>Projects executed</p>
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
                        <h2 class="sec-title title-anim">Awards &<br> Recognition</h2>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-8">
                    <div class="award__mid-7 text-anim">
                        <p>We bring to the table a leadership of industry veterans, advisory and think tanks who have been instrumental in focusing future driven solutions.</p>
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
                                <h3 class="title">MSP Alliance</h3>
                            </div>
                            <div class="award__item-7 zoom_in">
                                <img src="{{ asset('assets/imgs/awards/award2.png') }}" alt="Image">
                                <h3 class="title">ISO Certified</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Award area end -->

<script>
    function playPauseVideo() {
        document.querySelectorAll("video").forEach(e => {
            e.muted = !0;
            let a = e.play();
            void 0 !== a && a.then(a => {
                new IntersectionObserver(a => {
                    a.forEach(a => {
                        1 === a.intersectionRatio || e.paused ? e.paused && e.play() : e
                            .pause()
                    })
                }, {
                    threshold: .2
                }).observe(e)
            })
        })
    }
    playPauseVideo();
</script>
