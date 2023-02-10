@extends('layouts.pages')

@section('customcss')

<link rel="stylesheet" href="https://unpkg.com/tippy.js@1.1.3/dist/tippy.css">

<style type="text/css">
.map-container{padding:3.2rem .8rem;position:relative;display:inline-block}.map-container img{width:100%}.map-container .point{cursor:pointer;position:absolute;width:0.9rem;height:0.9rem;background-color:orange;border-radius:50%;transition:.3s;will-change:transform,box-shadow;transform:translate(-50%,-50%);box-shadow:0 0 0 rgba(0,172,193,.4);animation:3s infinite pulse}.map-container .point:hover{animation:none;transform:translate(-50%,-50%) scale3D(1.35,1.35,1);box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23)}
.map-container .Hubli{top:48%;left:68%}
.map-container .Bengaluru{top:48%;left:69%}
.map-container .Mumbai{top:45%;left:68%}
.map-container .JammuKashmir{top:38%;left:69%}
.map-container .Hyderabad{top:46%;left:69%}
.map-container .Chennai{top:50%;left:70%}
.map-container .DelhiNCR    {top:42%;left:69%}
.map-container .UnitedStates{top:35%;left:15%}
.map-container .SingaporeAPAC{top:55%;left:80%}
.map-container .Dubai{top:48%;left:59%}
.map-container .india{ top:58%;left:68% } @keyframes pulse{0%{box-shadow:0 0 0 0 rgba(0,172,193,.5)}70%{box-shadow:0 0 0 25px rgba(0,172,193,0)}100%{box-shadow:0 0 0 0 rgba(0,172,193,0)}}
</style>
@endsection

@section('content')

    <section class="mt-5">
        <div class="container" style="display: flex; align-items: center; justify-content: center;">
            <div class="map-container">
              <img src="http://res.cloudinary.com/slzr/image/upload/v1500321012/world-map-1500_vvekl5.png">
              @foreach ($locations as $singlelocation)
              <a href="https://www.google.com/maps?q={{ $singlelocation['address'] }}" target="_blank">
                <div class="point {{ str_replace(array('&', '/', '-'), '', str_replace(' ','-', $singlelocation['city']))  }} tippy" title="<b>{{ $singlelocation['company'] }}</b><br>{{ $singlelocation['address'] }}"></div>
              </a>
              @endforeach
            </div>
        </div>
    </section>


    <!-- Contact area start -->
    <section class="contact__area-6">

        <div class="container g-0 line pt-120 pb-110">
            <span class="line-3"></span>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="contact__text">
                        <p>Great! We're excited to hear from you and let's start
                            something special togerter. call us for any inquery.</p>
                    </div>
                </div>
            </div>
            <div class="row contact__btm">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="contact__info">
                        <h3 class="sub-title-anim-top animation__word_come">Don't be afraid man ! <br>say hello</h3>
                        <ul>
                            <li><a href="tel:08041502234">080 4150 2234</a></li>
                            <li><a href="mailto:info@fidelisgroup.in">info@fidelisgroup.in</a></li>
                            <li><span>No. 357, 2nd Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka 560034</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="contact__form">
                        <form action="https://wealcoder.com/dev/html/axtra/assets/mail.php" method="POST">
                            <div class="row g-3">
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="text" name="name" placeholder="Name *">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="email" name="email" placeholder="Email *">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="tel" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="text" name="subject" placeholder="Subject *">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <textarea name="message" placeholder="Messages *"></textarea>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="btn_wrapper">
                                        <button class="wc-btn-primary btn-hover btn-item"><span></span> Send <br>Messages <i
                                                class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact area end -->
@endsection

@section('script')

<script src="https://unpkg.com/tippy.js@1.1.3/dist/tippy.min.js"></script>

<script>
    $(document).ready(function(){
        tippy('.tippy', {
        theme: 'light',
        size: 'big',
        arrow: true
        })
    });
</script>


@endsection