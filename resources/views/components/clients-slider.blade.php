@php
    $path = public_path('assets/imgs/brand/');
    $files = File::allFiles($path);
@endphp

            <!-- Brand area start -->
                <section class="brand__area">
                    <div class="container g-0 line pt-140 pb-40">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper">
                                    {{-- <h2 class="sec-sub-title title-anim">International Brands</h2> --}}
                                    <h3 class="sec-title title-anim">Our partial list of clients.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Brand area end -->
                <section class="pb-130">
                    <div class="swiper" id="clientLogo">
                        <div class="swiper-wrapper">
                            @foreach ($files as $item)
                            <div class="swiper-slide">
                                <img src="{{ str_replace(public_path('/'),'', $item) }}"  class="w-75" alt="Brand Logo" style="max-width: 200px;">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
