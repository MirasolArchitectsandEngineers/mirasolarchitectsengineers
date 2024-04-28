<!doctype html>
<html lang="en">
  <head>
    <title>Mirasol Architects and Engineers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="html, css, javascript, jquery">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ asset('front/css/vendor/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/vendor/jquery.fancybox.min.css') }}">


    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

  </head>
  <body data-spy="scroll" data-target=".site-nav-target" data-offset="20">

    <nav class="unslate_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="unslate_co--site-wrap">

      <div class="unslate_co--site-inner">


        <!-- END lines -->

      <nav style="background:rgba(0,0,0,.5);" class="unslate_co--site-nav site-nav-target">

        <div     class="container">

          <div   class="row align-items-center justify-content-between text-left">
            <div   class="col-md-5 text-right">
              <ul  class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li class="has-children">
                  <a  href="/" class="nav-link">Home</a>

                </li>

                <li><a href="/about" class="nav-link">About</a></li>
                <li><a href="/services" class="nav-link">Services</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <a href="/home" class="unslate_co--site-logo"> <img src="{{ asset('front/images/companyLogo.png') }}" class="lazyload  img-fluid" alt="Images" /></a>
            </div>
            <div  class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">

                <li><a href="/partnership" class="nav-link">Partnership</a></li>
                <li><a href="/ourworks" class="nav-link">Our Works</a></li>
                <li><a href="/contactus" class="nav-link">Contact Us</a></li>

              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>
      <!-- END nav -->

      <div class="cover-v1 jarallax" style="background-image: url('{{ asset('front/images/ourworks.jpg') }}');" id="home-section">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-7 mx-auto text-center">


              <h1 class="heading gsap-reveal-hero text-primary">OUR WORKS</h1>
              <h2 style="font-size: 18px;" class="subheading gsap-reveal-hero text-primary">HOME-OUR WORKS</h2>
            </div>

          </div>
        </div>


      <a href="#portfolio-section" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label">Scroll</span>
        </a>

      </div>
      <!-- END .cover-v1 -->



     <div class="unslate_co--section" id="this-section">
        <div class="col-12">


            <div class="relative"><div class="loader-this-wrap">
                <div class="loader-this"></div>
            </div>
        </div>
        <div id="this-single-holder" class="flex justify-between"></div>

          <div class="this-wrapper">





            <div id="posts" class="row gutter-isotope-item">


          <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="{{ asset('front/images/311735634_186902230508098_8401930685156898117_n.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Watch">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Residential</h3>

                      </div>
                    </div>
                    <img src="{{ asset('front/images/311735634_186902230508098_8401930685156898117_n.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>

              </div>
                 <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="{{ asset('front/images/313020122_188432873688367_8565865133771706285_n.jpg') }}" class="this-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="Modern Building">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Corporate / Office</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/313020122_188432873688367_8565865133771706285_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>
              </div>
          <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="{{ asset('front/images/382230286_331340362730950_4183704594503918235_n.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Watch">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Retail / Commercial</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/382230286_331340362730950_4183704594503918235_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>

              </div>
            <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="{{ asset('front/images/363359676_301862389012081_1941683697978561029_n.jpg') }}" class="this-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="Modern Building">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Property & Land Development</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/363359676_301862389012081_1941683697978561029_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>
              </div>
            <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="{{ asset('front/images/312912065_188432883688366_8688871015789825250_n.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Watch">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Project Management</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/312912065_188432883688366_8688871015789825250_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>

              </div>

                <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="{{ asset('front/images/310432111_186902260508095_4822510034040461973_n.jpg') }}" class="this-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="Modern Building">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Fabrication</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/310432111_186902260508095_4822510034040461973_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>
              </div>

            </div>

          </div>
          <div class="this-wrapper">





            <div id="posts" class="row gutter-isotope-item">


          <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="{{ asset('front/images/311735634_186902230508098_8401930685156898117_n.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Watch">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Residential</h3>

                      </div>
                    </div>
                    <img src="{{ asset('front/images/311735634_186902230508098_8401930685156898117_n.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>

              </div>
                 <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="{{ asset('front/images/313020122_188432873688367_8565865133771706285_n.jpg') }}" class="this-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="Modern Building">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Corporate / Office</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/313020122_188432873688367_8565865133771706285_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>
              </div>
          <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="{{ asset('front/images/382230286_331340362730950_4183704594503918235_n.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Watch">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Retail / Commercial</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/382230286_331340362730950_4183704594503918235_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>

              </div>
            <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="{{ asset('front/images/363359676_301862389012081_1941683697978561029_n.jpg') }}" class="this-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="Modern Building">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Property & Land Development</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/363359676_301862389012081_1941683697978561029_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>
              </div>
            <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="{{ asset('front/images/312912065_188432883688366_8688871015789825250_n.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Watch">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Project Management</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/312912065_188432883688366_8688871015789825250_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>

              </div>

                <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="{{ asset('front/images/310432111_186902260508095_4822510034040461973_n.jpg') }}" class="this-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="Modern Building">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Fabrication</h3>

                      </div>
                    </div>
                    {{-- <img src="{{ asset('front/images/310432111_186902260508095_4822510034040461973_n.jpg') }}" class="lazyload  img-fluid" alt="Images" /> --}}
                  </a>
              </div>

            </div>

          </div>


        </div>

      </div>

      <div style="background:black;" class="unslate_co--section" id="contact-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2  class="heading-h2 text-center divider"><span style="color:white; border-bottom: white solid 2px;" class="gsap-reveal">Get In Touch</span></h2>

          </div>


          @include('shared.contact-us')
        </div>
      </div>
      </div> <!-- END .unslate_co-site-inner -->

      <footer class="unslate_co--footer unslate_co--section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">

              <div class="footer-site-logo"><a href="#"><img src="{{ asset('front/images/companyLogo.png') }}" class="lazyload  img-fluid" alt="Images" /></a></div>

              <ul class="footer-site-social">
                <li><a href="https://www.facebook.com/Mirasol.Architecs.Engineers">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>

              </ul>

              <p class="site-copyright">


                 &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> Mirasol Architects and Engineers, Inc. All rights reserved.


              </p>

            </div>
          </div>
        </div>
      </footer>


    </div>


    <!-- Loader -->
    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
      <div class="site-loader"></div>
    </div>

    <script src="{{ asset('front/js/scripts-dist.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>

  </body>
</html>
