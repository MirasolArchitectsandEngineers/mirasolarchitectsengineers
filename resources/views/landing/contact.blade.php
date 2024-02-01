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


      <div class="cover-v1 jarallax" style="background-image: url('{{ asset('front/images/Balanced-and-symmetrical-kitchen-in-modern-home-explains-the-importance-of-7-principles-of-interior-design-1536x1018.jpg') }}');" id="home-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-7 mx-auto text-center">



              <h1 class="heading gsap-reveal-hero">CONTACT US</h1>
              <h2 style="font-size: 18px;" class="subheading gsap-reveal-hero">
                {{-- <a class="text-lg btn btn-primary" href="https://m.me/106137968490429">Message me on Facebook</a></h2> --}}
                <a href="https://m.me/106137968490429" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Click Me</a>
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







    <div style="background:black;" class="unslate_co--section" id="contact-section">
        <div class="container">
            <div class="section-heading-wrap text-center mb-5">
                <h2  class="heading-h2 text-center divider"><span style="color:white; border-bottom: white solid 2px;" class="gsap-reveal">Get In Touch</span></h2>

            </div>


            <div class="row justify-content-between">

                <div class="col-md-6">
                    <form method="post" class="form-outline-style-v1" id="contactForm">
                        <div class="form-group row mb-0">

                            <div class="col-lg-6 form-group gsap-reveal">
                                <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                  </div>
                  <div class="col-lg-6 form-group gsap-reveal">
                      <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                  </div>
                  <div class="col-lg-12 form-group gsap-reveal">
                    <label for="message">Write your message...</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row gsap-reveal">
                    <div class="col-md-12 d-flex align-items-center">
                        <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Send Message">
                        <span class="submitting"></span>
                    </div>
                </div>
            </form>
            <div id="form-message-warning" class="mt-4"></div>
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>

            <div class="col-md-4">
                <div class="contact-info-v1">
                  <div class="gsap-reveal d-block">
                    <span class="d-block contact-info-label">Email</span>
                    <a href="#" class="contact-info-val">info.mae22@gmail.com</a>
                </div>
                <div class="gsap-reveal d-block">
                    <span class="d-block contact-info-label">Phone</span>
                    <a href="#" class="contact-info-val">09157769382 / 09621539726</a>
                </div>
                <div class="gsap-reveal d-block">
                    <span class="d-block contact-info-label">Address</span>
                    <address class="contact-info-val">Head Office:<br> Daet Camarines Norte</address>
                    <address class="contact-info-val">Warehouse Office: <br> Lot 1&2, LakeTown Village, C6 - Taguig City, Metro Manila</address>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-12">



                <div class="row mt-5 justify-content-between">
                    <div class="col-lg-6 mb-5 mb-lg-10">
                        <figure class="dotted-bg gsap-reveal-img ">



                   <img src="{{ asset('front/images/242237323_106140008490225_1268871086896176952_n.jpg') }}" class="lazyload  img-fluid" alt="Images" />
              </figure>

            </div>

            <div class="col-lg-5 pr-lg-4">
                 <div  style="background-image: url(&quot;https://external.fwnp1-1.fna.fbcdn.net/static_map.php?v=2049&amp;theme=dark&amp;ccb=4-4&amp;size=544x250&amp;language=en_GB&amp;scale=1&amp;zoom=12&amp;center=14.11781797301%2C122.9461327977&amp;marker_list[0]=14.11781797301%2C122.9461327977&amp;_nc_client_id=profile&amp;_nc_client_caller=CometStaticMap.react&quot;); background-repeat: no-repeat; background-size: 100% 100%; height: 250px; width: auto;"></div>

             <a href="#this-section" class="mouse-wrap smoothscroll">

          <span style="color: white;
    font-family: sans-serif;
    padding: 15px 25px;
    font-size: 0.875rem;
    text-decoration: none;
    top: 50%;
    transition: 0.3s;
    letter-spacing: 0.05rem;
    border: 2px solid white;" class="mouse-label">OPEN MAP</span>
        </a>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>





      </div> <!-- END .unslate_co-site-inner -->

      <footer class="unslate_co--footer unslate_co--section">
          <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-7">

                  {{-- <div class="footer-site-logo"><a href="#"><img src="{{ asset('front/images/companyLogo.png') }}" class="lazyload  img-fluid" alt="Images" /></a></div> --}}
                  <div class="footer-site-logo"><a href="https://m.me/106137968490429"><img src="{{ asset('front/images/companyLogo.png') }}" class="lazyload  img-fluid" alt="Images" /></a></div>

                  <ul class="footer-site-social">
                <li><a href="https://m.me/106137968490429">Facebook</a></li>
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
