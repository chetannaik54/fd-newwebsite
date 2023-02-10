<!-- Header area start -->
<header class="header__area-3">
    <div class="header__inner-3">
      <div class="header__logo-2">
        <a href="{{ route('welcome') }}" class="logo-dark"><img src="{{  asset('assets/imgs/logo/fidelis-logo.png') }}" class="w-75" alt="Site Logo"></a>
        <a href="{{ route('welcome') }}" class="logo-light"><img src="{{ asset('assets/imgs/logo/fidelis-logo.jpeg') }}" class="w-75" alt="Site Logo"></a>
      </div>
      <div class="header__nav-2">
        <ul class="main-menu-3 menu-anim">
          <li><a href="{{ route('about-us') }}">about</a></li>
          <li><a href="{{ route('solutions') }}">Solutions</a>
            <ul class="main-dropdown">
              <li><a href="#">Managed Services</a>
                <ul class="sub-dropdown">
                  <li><a href="#">Cloud Computing</a>
                    <ul class="sub-dropdown">
                      <li><a href="{{ route('noc') }}">NOC</a></li>
                      <li><a href="{{ route('soc') }}">SOC</a></li>
                      <li><a href="{{ route('ams') }}">AMS</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Applications</a>
                <ul class="sub-dropdown">
                  <li><a href="{{ route('application-development') }}">Application Development</a></li>
                  <li><a href="{{ route('erp-application-development-services') }}">ERP Application Management Services</a></li>
                  <li><a href="{{ route('application-management') }}">Application Management</a></li>
                  <li><a href="{{ route('application-QA-&-validation') }}">Application QA & Validation</a></li>
                  <li><a href="{{ route('devops-advisory') }}">Devops Advisory</a></li>
                </ul>
              </li>
              <li><a href="#">Staffing Solutions</a>
                <ul class="sub-dropdown">
                  <li><a href="{{ route('contingent-staffing') }}">Contigent Staffing</a></li>
                  <li><a href="{{ route('msp-parternship') }}">MSP Partnerships</a></li>
                  <li><a href="{{ route('short-term-engagement') }}">Short term engagement</a></li>
                  <li><a href="{{ route('talent-kloud') }}">Talent.Kloud</a></li>
                  <li><a href="{{ route('compliance') }}">Compliance</a></li>
                </ul>
              </li>
              <li><a href="#">Platform & Infrastructure</a>
                <ul class="sub-dropdown">
                  <li><a href="{{ route('it-&-infra-management') }}">IT & Infra Management</a></li>
                  <li><a href="{{ route('data-center-enablement') }}">Data Center Enablement</a></li>
                  <li><a href="{{ route('robotic-process-automation') }}">Robotic Process Automation</a></li>
                </ul>
              </li>
              <li><a href="#">Information Management</a>
                <ul class="sub-dropdown">
                  <li><a href="{{ route('business-intelligence-analytical-services') }}">Business Intelligence & Analytics Services</a></li>
                  <li><a href="{{ route('database-storage-admin') }}">Database & Storage Admin</a></li>
                </ul>
              </li>
              <li><a href="{{ route('learning-academy') }}">Learning Academy</a></li>
            </ul>
          </li>
          <li><a href="{{ route('industries') }}">Industries</a></li>

          <li><a href="{{ route('case-studies') }}">Case Studies</a></li>

          <li><a href="{{ route('life-fidelis') }}">Careers</a>
            <ul class="main-dropdown">
              <li><a href="{{ route('life-fidelis') }}">Life@Fidelis</a></li>
              <li><a href="{{ route('life-fidelis') }}">Jobs@Fidelis</a></li>
              <li><a href="{{ route('life-fidelis') }}">Refer</a></li>
            </ul>
          </li>
          <li><a href="{{ route('blogs') }}">Blogs</a></li>
          <li><a href="{{ route('contact-us') }}">contact</a></li>
          <li>
            <a href="{{ route('free-demo') }}" class="cta" style="padding: 10px 0px; width: 230px;">
              <span>Free demo</span>
            </a>
          </li>

        </ul>
      </div>
      <div class="header__nav-icon-3">
        <button class="search-icon" id="search_icon"><i class="fa-solid fa-magnifying-glass"></i></button>
        <button class="search-icon" id="search_close"><i class="fa-solid fa-xmark"></i></button>
        <button id="open_offcanvas"><img src="{{ asset('assets/imgs/icon/menu-black.png') }}" alt="Menubar Icon"></button>
      </div>
    </div>
  </header>
  <div class="header__search">
    <form action="#">
      <input type="text" name="s" id="s" placeholder="Search..">
    </form>
  </div>
  <!-- Header area end -->


    <!-- Offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__body">
          <div class="offcanvas__left">
            <div class="offcanvas__logo">
              <a href="{{ route('welcome') }}"><img src="{{ asset('assets/imgs/logo/fidelis-logo.png') }}" class="w-50" alt="Offcanvas Logo"></a>
            </div>
            <div class="offcanvas__social">
              <h3 class="social-title">Follow Us</h3>
              <ul>
                <li><a href="#">Linkedin</a></li>
                <li><a href="#">Facebook</a></li>
              </ul>
            </div>
            <div class="offcanvas__links">
              <ul>
              </ul>
            </div>
          </div>
          <div class="offcanvas__mid">
            <div class="offcanvas__menu-wrapper">
              <nav class="offcanvas__menu">
                <ul class="menu-anim">
                  <li><a href="{{ route('about-us') }}">about</a></li>
                  <li><a href="portfolio.html">Solutions</a>
                    <ul>
                      <li><a href="#">Managed Services</a>
                        <ul class="sub-dropdown">
                          <li><a href="#">Cloud Computing</a>
                            <ul class="sub-dropdown">
                              <li><a href="{{ route('noc') }}">NOC</a></li>
                              <li><a href="{{ route('soc') }}">SOC</a></li>
                              <li><a href="{{ route('ams') }}">AMS</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">Applications</a>
                        <ul class="sub-dropdown">
                          <li><a href="{{ route('application-development') }}">Application Development</a></li>
                          <li><a href="{{ route('erp-application-development-services') }}">ERP Application Management Services</a></li>
                          <li><a href="{{ route('application-management') }}">Application Management</a></li>
                          <li><a href="{{ route('application-QA-&-validation') }}">Application QA & Validation</a></li>
                          <li><a href="{{ route('devops-advisory') }}">Devops Advisory</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Staffing Solutions</a>
                        <ul class="sub-dropdown">
                          <li><a href="{{ route('contingent-staffing') }}">Contigent Staffing</a></li>
                          <li><a href="{{ route('msp-parternship') }}">MSP Partnerships</a></li>
                          <li><a href="{{ route('short-term-engagement') }}">Short term engagement</a></li>
                          <li><a href="{{ route('talent-kloud') }}">Talent.Kloud</a></li>
                          <li><a href="{{ route('compliance') }}">Compliance</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Platform & Infrastructure</a>
                        <ul class="sub-dropdown">
                          <li><a href="{{ route('it-&-infra-management') }}">IT & Infra Management</a></li>
                          <li><a href="{{ route('data-center-enablement') }}">Data Center Enablement</a></li>
                          <li><a href="{{ route('robotic-process-automation') }}">Robotic Process Automation</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Information Management</a>
                        <ul class="sub-dropdown">
                          <li><a href="{{ route('business-intelligence-analytical-services') }}">Business Intelligence & Analytics Services</a></li>
                          <li><a href="{{ route('database-storage-admin') }}">Database & Storage Admin</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ route('learning-academy') }}">Learning Academy</a></li>
        

                    </ul>
                  </li>
                  <li><a href="{{ route('industries') }}">Industries</a></li>
        
                  <li><a href="{{ route('case-studies') }}">Case Studies</a></li>
        
                  <li><a href="{{ route('life-fidelis') }}">Careers</a>
                    <ul>
                      <li><a href="{{ route('life-fidelis') }}">Life@Fidelis</a></li>
                      <li><a href="{{ route('life-fidelis') }}">Jobs@Fidelis</a></li>
                      <li><a href="{{ route('life-fidelis') }}">Refer</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('blogs') }}">Blogs</a></li>
                  <li><a href="{{ route('contact-us') }}">contact</a></li>
                  <li><a href="{{ route('free-demo') }}">Free demo</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="offcanvas__right">
            <div class="offcanvas__search">
              <form action="#">
                <input type="text" name="search" placeholder="Search keyword">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
            </div>
            <div class="offcanvas__contact">
              <h3>Get in touch</h3>
              <ul>
                <li><a href="tel: 08041502234">08041502234</a></li>
                <li><a href="mailto:info@fidelisgroup.com">info@fidelisgroup.com</a></li>
                <li>No. 357, 2nd Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka 560034</li>
              </ul>
            </div>
            <img src="{{ asset('assets/imgs/shape/11.png') }}" alt="shape" class="shape-1">
            <img src="{{ asset('assets/imgs/shape/12.png') }}" alt="shape" class="shape-2">
          </div>
          <div class="offcanvas__close">
            <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
          </div>
        </div>
      </div>
      <!-- Offcanvas area end -->
    
