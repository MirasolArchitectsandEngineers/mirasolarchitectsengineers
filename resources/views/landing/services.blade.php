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
              <a href="/" class="unslate_co--site-logo"> <img src="{{ asset('front/images/companyLogo.png') }}" class="lazyload  img-fluid" alt="Images" /></a>
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

      <div class="cover-v1 jarallax " style="background-image: url('{{ asset('front/images/services.jpg') }}');" id="home-section">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-7 mx-auto text-center">



              <h1 class="heading gsap-reveal-hero text-primary">SERVICES</h1>
              <h2 style="font-size: 18px;" class="subheading gsap-reveal-hero text-primary">HOME-SERVICES</h2>
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
    <div class="unslate_co--section" id="about-section">
        <div class="col-12">



            <div class="row mt-5 justify-content-between">
                <div class="col-lg-6 mb-5 mb-lg-10">
                <figure class="dotted-bg gsap-reveal-img ">
                    <img src="{{ asset('front/images/architecture-building.png') }}" alt="Image" class="img-fluid">
                </figure>
                </div>

                <div class="col-lg-5 pr-lg-4">

                    <div class="feature-v1 gsap-reveal" data-aos="fade-up" data-aos-delay="0">
                    <div class="wrap-icon mb-3">
                        <img src="{{ asset('front/images/svg/001-options.svg') }}" alt="Image" width="45">
                        <span class="ml-2 d-inline-flex">
                            <h1>Architectural</h1>
                        </span>
                    </div>
                <div class="d-flex justify-content-between">
                    <div class="">
                        <h3 >Design</h3>
                        <ul class="list-item">
                            <li class="list-item">Architectural Plan</li>
                            <li class="list-item">Perspective</li>
                            <li class="list-item">Proposal</li>
                            <li class="list-item">Costing <br>- estimate project cost</li>
                        </ul>
                    </div>
                    <div class="d-sm-flex">
                        <h3 class="">Build</h3>
                        <ul class="list-item">
                            <li class="list-item">Constructions</li>
                            <li class="list-item">Renovation</li>

                        </ul>
                    </div>

                    <div class="">

                    </div>

                    </div>
                    {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. </p> --}}
                </div>

                <br><br>
                <div class="feature-v1 gsap-reveal" data-aos="fade-up" data-aos-delay="0">
                    <div class="wrap-icon mb-3">
                        <img src="{{ asset('front/images/svg/001-options.svg') }}" alt="Image" width="45">
                        <span class="ml-2 d-inline-flex">
                            <h3>Other Services:</h3>
                        </span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <ul class="list-item">
                            <li class="list-item">Structural</li>
                            <li class="list-item">Electrical</li>
                            <li class="list-item">Plumbing</li>
                            <li class="list-item">Reinstatement / Demolition</li>
                            <li class="list-item">Mechanical</li>
                            <li class="list-item">Fire Protection</li>
                            <li class="list-item">Project Management</li>
                        </ul>
                    </div>
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

              <div class="footer-site-logo"><a href="#" class="flex justify-center"><img src="{{ asset('front/images/companyLogo.png') }}" class="lazyload  img-fluid" alt="Images" /></a></div>

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
