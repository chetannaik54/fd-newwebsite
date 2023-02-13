@extends('layouts.pages')

@section('content')

    <!-- Hero area start -->
    <section class="solution__area">
        <div class="container hero-line"></div>
        <div class="solution__wrapper">
            <div class="solution__left">
                <div class="solution__img-1">
                    <img src="{{ asset('assets/imgs/thumb/solution.png') }}" alt="Solution Image">
                </div>
                <div class="solution__img-2">
                    <img src="{{ asset('assets/imgs/thumb/solution-2.png') }}" alt="Solution Image">
                </div>
            </div>

            <div class="solution__mid">
                <h1 class="solution__title animation__char_come">Industries</h1>
                <p>Fidelis aims at delivering a comprehensive and accurate suite of tools that
                    enables organisations to converge all of their IT operations efficiently under a single pane of
                    glass utilising genuine workflow integrations all over the world.</p>
            </div>

            <div class="solution__right">
                <div class="solution__img-3">
                    <img src="{{ asset('assets/imgs/thumb/solution-3.png') }}" alt="Solution Image">
                </div>
            </div>
        </div>

        <div class="container pb-130">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="solution__btm">
                        <ul>
                            <li>Approch</li>
                            <li>Creativity</li>
                            <li>Experienced</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="solution__shape">
            <img src="{{ asset('assets/imgs/icon/1.png') }}" alt="Shape Image" class="shape-1">
            <img src="{{ asset('assets/imgs/icon/2.png') }}" alt="Shape Image" class="shape-2">
            <img src="{{ asset('assets/imgs/icon/3.png') }}" alt="Shape Image" class="shape-3">
            <img src="{{ asset('assets/imgs/icon/4.png') }}" alt="Shape Image" class="shape-4">
            <img src="{{ asset('assets/imgs/icon/5.png') }}" alt="Shape Image" class="shape-5">
        </div>
    </section>
    <!-- Hero area end -->


    <!-- Service area start -->
    <section class="service__area-6">
        <div class="container">
            <div class="row inherit-row">
                <div class="col-xxl-12">
                    <div class="content-wrapper">
                        <div class="left-content">
                            <ul class="service__list-6">
                                <li class="active"><a href="#service_1">Banking <br></a></li>
                                <li><a href="#service_2">Fintech<br></a></li>
                                <li><a href="#service_3">Healthcare <br></a></li>
                                <li><a href="#service_4">Manufacturing <br> </a></li>
                                <li><a href="#service_5">Enterprise <br>Technology</a></li>
                                <li><a href="#service_6">Retail & <br> Ecommerce</a></li>
                            </ul>
                        </div>

                        <div class="mid-content">
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/industries/banking.jpg') }}" alt="Service Image">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/industries/fintech.jpg') }}" alt="Service Image">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/industries/Healthcare.jpg') }}" alt="Service Image">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/industries/manufacturing.jpg') }}" alt="Service Image">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/industries/enterprise.jpg') }}" alt="Service Image">
                            </div>
                            <div class="service__image">
                                <img src="{{ asset('assets/imgs/industries/retail-ecommerce.jpg') }}" alt="Service Image">
                            </div>
                        </div>

                        <div class="right-content">
                            <div class="service__items-6">

                                <div class="service__item-6 has__service_animation" id="service_1" data-secid="1">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/1.jpg') }}" alt="Service Image">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Banking Industry</h2>
                                        <p>The banking industry in India is adequately capitalised and well-regulated, leading to better
                                            financial and economic circumstances than any other nation. Indian banks are usually robust
                                            and have performed well throughout the global recession. India&#39;s Immediate Payment
                                            Service (IMPS) has seen the most development among the world&#39;s 25 digital payment
                                            systems, while the Unified Payments Interface (UPI) has expanded its worldwide reach and
                                            revolutionised real-time payments.</p>
                                        <p>In addition to cooperative credit institutions, The Indian banking system includes 12 public
                                            sector banks, 22 private sector banks, 46 foreign banks, 56 regional rural banks, 1485 urban
                                            cooperative banks, and 96,000 rural cooperative banks. Credit growth is expected to reach
                                            10% in 2022-2023.</p>
                                        <ul style="grid-template-columns: 310px;
">
                                            <li>+ Security Operations Center</li>
                                            <li>+ Network Operations Center</li>
                                            <li>+ Application Management Advisory</li>
                                            <li>+ Across Managed Services</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('free-demo') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get free <br>Demo <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_2" data-secid="2">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/2.jpg') }}" alt="Service Image">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Fintech</h2>
                                        <p>India has seen a boom in fintech and microfinancing in recent years. Due to a five-
                                            fold growth in digital disbursements, India&#39;s digital lending, which stood at US$ 75 billion in
                                            FY18, is predicted to increase to US$ 1 trillion by FY23. Since January 2017 to July 2022, the
                                            Indian fintech market has generated $29 billion in capital across 2,084 transactions, making
                                            up 14% of the world&#39;s funding and placing second in terms of deal volume. India&#39;s fintech
                                            business is anticipated to grow to 6.2 trillion rupees (US$ 83.48 billion) by 2025.</p>
                                        <ul style="grid-template-columns: 310px;
">
                                            <li>+ Security Operations Center</li>
                                            <li>+ Network Operations Center</li>
                                            <li>+ Application Management Advisory</li>
                                            <li>+ Across Managed Services</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('free-demo') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get free <br>Demo <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_3" data-secid="3">

                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/3.jpg') }}" alt="Service Image">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Healthcare</h2>
                                        <p>By 2022, the Indian healthcare industry is anticipated to reach US$ 372 billion,
                                            driven by increased income, improved health awareness, lifestyle illnesses, and more
                                            insurance access.</p>
                                        <p>With 4.7 million workers as of 2021, the Indian healthcare industry is one of the country&#39;s
                                            top employers.</p>
                                        <p>According to the Economic Survey of 2022, India&#39;s public health expenditure increased from
                                            1.8% of GDP in 2020–2021 to 2.1% in 2021–2022.</p>
                                        <ul style="grid-template-columns: 310px;
">
                                            <li>+ Security Operations Center</li>
                                            <li>+ Network Operations Center</li>
                                            <li>+ Application Management Advisory</li>
                                            <li>+ Across Managed Services</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('free-demo') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get free <br>Demo <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_4" data-secid="4">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/4.jpg') }}" alt="Service Image">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Manufacturing</h2>
                                        <p>India&#39;s market for appliances and consumer electronics (ACE) is anticipated
                                            to increase from US$ 10.93 billion in 2019 to US$ 21.18 billion in 2025.</p>
                                        <p>The Department for Promotion of Industry and Internal Trade (DPIIT) estimates that in FY
                                            2021–2022, India got a total inflow of US$ 58.77 billion in foreign direct investment (FDI).</p>
                                        <ul style="grid-template-columns: 310px;
">
                                            <li>+ Security Operations Center</li>
                                            <li>+ Network Operations Center</li>
                                            <li>+ Application Management Advisory</li>
                                            <li>+ Across Managed Services</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('free-demo') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get free <br>Demo <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_5" data-secid="5">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/5.jpg') }}" alt="Service Image">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Enterprise Technology</h2>
                                        <p>By 2025, it is anticipated that India&#39;s market for IT and business
                                            services would be worth US$19.93 billion.  There are distribution centres for Indian IT
                                            companies all around the world.</p>
                                        <p>India&#39;s standing in the 2022 edition of the Global Innovation Index (GII) increased by six
                                            spots to take up position 40.</p>
                                        <p>With 608,000 cloud expertise across all industry sectors, including technology, India came in
                                            third place globally in FY21.</p>
                                        <p>Between April 2000 and June 2022, India&#39;s computer software and hardware industry
                                            received cumulative foreign direct investment (FDI) inflows of US$ 88.94 billion.</p>
                                        <ul style="grid-template-columns: 310px;">
                                            <li>+ Security Operations Center</li>
                                            <li>+ Network Operations Center</li>
                                            <li>+ Application Management Advisory</li>
                                            <li>+ Across Managed Services</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('free-demo') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get free <br>Demo <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="service__item-6" id="service_6" data-secid="6">
                                    <div class="image-tab">
                                        <img src="{{ asset('assets/imgs/service/4.jpg') }}" alt="Service Image">
                                    </div>

                                    <div class="animation__service_page">
                                        <h2 class="service__title-6">Retail & Ecommerce</h2>
                                        <p>With a CAGR of 55–60%, social commerce in India has the potential
                                            to develop to US$16–20 billion in FY25. India&#39;s e-commerce sector is anticipated to grow to
                                            111 billion and 200 billion US dollars by 2024 and 2026, respectively.</p>
                                        <p>The Indian e-commerce sector is expected to grow by 21.5% and reach $74.8 billion in 2022.
                                            By 2030, it is anticipated that India&#39;s e-commerce business would be worth US$350 billion.</p>
                                        <ul style="grid-template-columns: 310px;
">
                                            <li>+ Security Operations Center</li>
                                            <li>+ Network Operations Center</li>
                                            <li>+ Application Management Advisory</li>
                                            <li>+ Across Managed Services</li>
                                        </ul>
                                        <div class="btn_wrapper">
                                            <a href="{{ route('free-demo') }}" class="wc-btn-secondary btn-item btn-hover"><span></span>Get free <br>Demo <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end -->

    


    <!-- Brand area start -->
    <section class="brand__area">
        <div class="container line pt-140 pb-100">
            <span class="line-3"></span>
            <div class="row">
                <div class="col-xxl-12">
                    <h2 class="brand__title-3 title-anim">We are happy to work with global
                        largest brands</h2>
                    <div class="brand__list brand-gap">
                        @for($i = 2; $i < 20; $i++)
                        <div class="brand__item fade_bottom">
                          <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Picture{{ $i }}.png" class="w-75" alt="Brand Logo">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand area end -->

    @endsection