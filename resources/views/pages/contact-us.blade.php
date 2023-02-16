@extends('layouts.pages')

@section('customcss')
<style>
    iframe{ max-height: 850px; height: 850px; }
    @media (max-width: 480px) { 
        iframe{ max-height: 250px; height: 250px; }
    }
</style>
@endsection

@section('content')

    <section class="mt-5">
        <h1 class="mt-5 pt-5 text-center">We are located globally</h1>
        <iframe src="{{ route('map') }}" frameborder="0" style="width: 100%;"></iframe>
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
                            something special together. call us for any inquiry.</p>
                    </div>
                </div>
            </div>
            <div class="row contact__btm">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="contact__info">
                        <ul>
                            <li><a href="tel:+91 804150 2234">+91 804150 2234 / 36</a></li>
                            <li><a href="mailto:info@fidelisgroup.in">info@fidelisgroup.in</a></li>
                            <li><span>No. 357,1st & 2nd Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka - 560034</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="contact__form">
                        <form action="" method="POST" id="user-contact-form" data-action="{{ route('contactRequestPost') }}">
                            @csrf
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
                            <div class="row">
                                <div id="error" style="color: red;"></div>
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
<script>
    $(document).ready(function(){

    var form = '#user-contact-form';

    $(form).on('submit', function(event){
        event.preventDefault();

        var url = $(this).attr('data-action');
        $('.wc-btn-primary').html("Sending... <i class='fa fa-spinner fa-spin' style='font-size:24px'></i>");

        $.ajax({
            url: url,   
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                $(form).trigger("reset");
                $('.wc-btn-primary').html("Thank You... <i class='fa fa-thumbs-o-up' aria-hidden='true'></i>");
            },
            error: function(response) {
                $('.wc-btn-primary').html("Oops... <i class='fa fa-thumbs-o-down' aria-hidden='true'></i>");
                $('#error').html(response);
            }
        });
    });
});

</script>
@endsection