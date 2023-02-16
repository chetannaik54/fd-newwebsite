@php  $exclude = array('free-demo', 'contact-us'); @endphp
@php $sourcing = array('contingent-staffing', 'msp-partnership', 'short-term-engagement', 'life-fidelis'); @endphp

@if(in_array(Request::route()->getName(), $exclude))

@elseif(in_array(Request::route()->getName(), $sourcing))
    <!-- CTA area start -->
    <section class="cta__area">
        <div class="container line pb-110">
            <div class="line-3"></div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="cta__content">
                        <p class="cta__sub-title">Work with us</p>
                        <h2 class="cta__title title-anim">We are growing, Grow with us.</h2>
                        <div class="btn_wrapper">
                            <a href="{{ route('careers') }}" class="wc-btn-primary btn-item btn-hover"><span></span>Explore job openings <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA area end -->
@else
    <!-- CTA area start -->
        <section class="cta__area">
            <div class="container line pb-110">
                <div class="line-3"></div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content">
                            <p class="cta__sub-title">Work with us</p>
                            <h2 class="cta__title title-anim">We would love to hear more from you.</h2>
                            <div class="btn_wrapper">
                                <a href="{{ route('free-demo') }}" class="wc-btn-primary btn-item btn-hover"><span></span>Get in Touch <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA area end -->
@endif

        <!-- Footer area start -->
        <footer class="footer__area" data-scroll-section>

            <div class="footer__top">
                <div class="container footer-line"></div>
                <div class="daddy"><div class="mommy">@for ($i = 1; $i <= 200; $i++)<div></div>@endfor</div></div>
            </div>

            <div class="footer__btm">
                <div class="container">
                    <div class="row footer__row">
                        <div class="col-xxl-12">

                            <div class="footer__inner">

                                <div class="footer__widget">
                                    {{-- <div>
                                        <div id='stars'>1</div>
                                        <div id='stars2'>2</div>
                                        <div id='stars3'>3</div>
                                    </div> --}}
        
                                    <img class="footer__logo w-50" src="{{ asset('assets/imgs/logo/fidelis-logo.png') }}" alt="Footer Logo">
                                    <p></p>
                                    <ul class="footer__social">
                                        <li><a target="_blank" href="https://www.facebook.com/FidelisGroup.Inc"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                                        <li><a target="_blank" href="https://twitter.com/fidelis_inc"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/fidelisinc/"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                                        <li><a target="_blank" href="https://www.linkedin.com/company/fidelis-technology-services/?viewAsMember=true"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                                    </ul>
                                </div>

                                <div class="footer__widget-2">
                                    <h2 class="footer__widget-title">Information</h2>
                                    <ul class="footer__link">
                                        <li><a href="{{ route('about-us') }}">About Company</a></li>
                                        <li><a href="{{ route('case-studies') }}">Case Study</a></li>
                                        <li><a href="{{ route('life-fidelis') }}">Career</a></li>
                                        <li><a href="{{ route('blogs') }}">Blog</a></li>
                                        <li><a href="{{ route('contact-us') }}">Contact</a></li>
                                    </ul>
                                </div>

                                <div class="footer__widget-3">
                                    <h2 class="footer__widget-title">Contact Us</h2>
                                    <ul class="footer__contact">
                                        <li>Fidelis Technology Services Pvt. Ltd.</li>
                                        <li><strong>Head Quarter (HQ)</strong></li>
                                        <li>No. 357, 1st & 2nd Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka 560034</li>
                                        <li><a href="tel:02574328301" class="phone">+91 080 4150 2234 / 36 </a></li>
                                        <li><a href="mailto:info@fidelisgroup.in">info@fidelisgroup.in</a></li>
                                    </ul>
                                </div>

                                <div class="footer__widget-4">
                                    <h2 class="project-title">Have a project in your mind?</h2>
                                    <div class="btn_wrapper">
                                        <a href="{{ route('contact-us') }}" class="wc-btn-primary btn-hover btn-item"><span></span>contact us <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                    {{-- <h3 class="contact-time">09 : 30 AM - 6 : 30 PM</h3> --}}
                                    {{-- <h4 class="contact-day">Monday - Friday</h4> --}}
                                </div>

                                <div class="footer__copyright">
                                    <p>© 2023 - 2024 | All rights reserved by <a href="https://fidelisgroup.in/" target="_blank">Fidelis Technology Service Pvt. Ltd.</a>
                                    </p>
                                </div>

                                <div class="footer__subscribe">
                                    <form>
                                        <input type="email" name="email" placeholder="Enter your email" id="newsletterEmail">
                                        <button id="newsletterBtn" type="button" class="subs-btn"><i class="fa-solid fa-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer area end -->

        <div class="footer d-block d-sm-none" style="position: fixed;bottom: 0px;z-index: 99999999;width: 100%;">
            <div class="btn-group w-100" role="group" aria-label="Basic example">
                <a style="width: 33%;" class="btn btn-secondary" target="_blank" href="tel:+918041502234"><img src="{{ asset('assets/imgs/icon/phone-call.png') }}" alt="Phone"></a>
                <a style="width: 33%;" class="btn btn-secondary" target="_blank" href="https://wa.me/+919513656006?text=� Hi, i wanted to know more about NOC. SOC software"><img src="{{ asset('assets/imgs/icon/whatsapp.png') }}" alt="whatsapp"></a>
                <a style="width: 33%;" class="btn btn-secondary" target="_blank" href="mailto:info@fidelisgroup.in"><img src="{{ asset('assets/imgs/icon/email.png') }}" alt="Email"></a>
              </div>
        </div>