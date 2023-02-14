
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{  ucfirst(str_replace('-', ' ', Request::route()->getName())) }} - Fidelisgroup</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/favicon.ico') }}">
  <link rel="shortcut icon" href="{{ asset('assets/imgs/logo/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('assets/imgs/logo/favicon.ico') }}" type="image/x-icon">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
  <!-- Cursor Animation -->
  <div class="cursor" id="team_cursor">Drag</div>
  <div class="cursor1"></div>
  <div class="cursor2"></div>

  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
      <img src="{{ asset('assets/imgs/loader.gif') }}" alt="Page Loading">
    </div>
  </div>

  <div class="sticky-left-container">
    <ul class="sticky-left">
        <li>
            <a target="_blank" href="tel:+918041502234">
              <img src="{{ asset('assets/imgs/icon/phone-call.png') }}" alt="Phone" style="background: white;">
                <p>Phone</p>
              </a>
          </li>
        <li>
            <a target="_blank" href="https://wa.me/+918041502234?text=� Hi, i wanted to know more about NOC. SOC software">
                <img src="{{ asset('assets/imgs/icon/whatsapp.png') }}" alt="whatsapp" style="background: white;">
                <p>Whatsapp</p>
            </a>
        </li>
        <li>
            <a target="_blank" href="mailto:info@fidelisgroup.in">
                <img src="{{ asset('assets/imgs/icon/email.png') }}" alt="Email" style="background: white;">
                <p>Email</p>
            </a>
        </li>
    </ul>
</div>

  <!-- Switcher Area Start -->
  {{-- <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Cursor</h2>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">mode</h2>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="light">light</button>
          <button data-mode="dark">dark</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Language Support</h2>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Switcher Area End -->

  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>

  @include('components.nav')
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>
        @yield('content')
      </main>

    @include('components.footer')
    </div>
  </div>


  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet"> 

  <!-- All CSS files -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/master.min.css') }}">
  @yield('customcss')

  <!-- All JS files -->
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
  <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
  <script src="{{ asset('assets/js/chroma.min.js') }}"></script>
  <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('assets/js/vanilla-tilt.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @yield('script')
  <script>(function(w, d) { w.CollectId = "63a30c509eed8935fca503b5"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</body>


</html>