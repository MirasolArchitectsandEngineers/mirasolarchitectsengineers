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
                <li><a href="/contact" class="nav-link">Contact Us</a></li>

              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>
      <!-- END nav -->

      {{-- <div class="cover-v1 jarallax" style="background-image: url('{{ asset('front/images/278049545_144464124751909_5915077704219102873_n.jpg') }}');" id="home-section"> --}}
      <div class="cover-v1 jarallax" style="background-image: url('{{ asset('front/images/pambuhan2.jpg') }}');" id="home-section">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-7 mx-auto text-center">



              <h1 class="heading gsap-reveal-hero">ABOUT US</h1>
              <h2 style="font-size: 18px;" class="subheading gsap-reveal-hero">HOME-ABOUT US</h2>
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

     <div class="unslate_co--section" id="about-section">
        <div class="col-12">



          <div class="row mt-5 justify-content-between">
            <div class="col-lg-6 mb-5 mb-lg-10">
              <figure class="dotted-bg gsap-reveal-img ">
                <img src="{{ asset('front/images/242237323_106140008490225_1268871086896176952_n.jpg') }}" alt="Image" class="img-fluid">
              </figure>
            </div>

            <div class="col-lg-5 pr-lg-4">
                  <br>  <br>
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal">Misson:</span></h3>
              <p class="lead gsap-reveal">To be the company who excel in designing and project management.</p>
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal">Vision:</span></h3>
              <p class="lead gsap-reveal">To continually deliver excellent, value and innovative project construction solution that will meet the client’s requirements.</p>

            </div>
          </div>
        </div>
      </div>







 <div  style="background-image: url('{{ asset('front/images/architecture-building.png') }}');" class="unslate_co--section section-counter" id="skills-section">
        <div class="container">



          <div class="row pt-5">

            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">

              <div class="counter-v1 text-center">

                <img src="{{ asset('front/images/companyLogo.png') }}" alt="Image" class="img-fluid">
                <span class="number-wrap">
<br>
                  <span class="number number-counter" data-number="6">0</span>


                </span>
                <span class="counter-label">Residential</span>

              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="counter-v1 text-center">

                <img src="{{ asset('front/images/companyLogo.png') }}" alt="Image" class="img-fluid">
                <span class="number-wrap">
<br>
                  <span class="number number-counter" data-number="12">0</span>

                </span>
                <span class="counter-label">Commercial Building</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="counter-v1 text-center">

                <img src="{{ asset('front/images/companyLogo.png') }}" alt="Image" class="img-fluid">
                <span class="number-wrap">
<br>
                  <span class="number number-counter" data-number="18">0</span>

                </span>
                <span class="counter-label">Offices</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="counter-v1 text-center">

                <img src="{{ asset('front/images/companyLogo.png') }}" alt="Image" class="img-fluid">
                <span class="number-wrap">
<br>
                  <span class="number number-counter" data-number="25">0</span>

                </span>
                <span class="counter-label">Up Projects</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END .counter -->



      <div class="unslate_co--section" id="journal-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Our Architecture team</span></h2>
            <span class="gsap-reveal"><img src="{{ asset('front/images/divider.png') }}" alt="divider" width="76"></span>
          </div>


          <div class="row gutter-v4 align-items-stretch">
            <div class="col-sm-6 col-md-6 col-lg-8 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="this-item-content">
                    <h3>NAME: Aaron Enova Mirasol</h3>
                    <p class="post-meta">Position <span class="small">&bullet;</span> Managing Director</p>
                  </div>
                </div>
                <img src="{{ asset('front/images/boss.jpg') }}" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="this-item-content">
                    <h3>NAME: Hazel Mirasol</h3>
                    <p class="post-meta">Position <span class="small">&bullet;</span> none</p>
                  </div>
                </div>
                <img src="{{ asset('front/images/mamhazel.jpg') }}" class="lazyload" alt="Image" />
              </a>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="this-item-content">
                    <h3>NAME:Architect</h3>
                    <p class="post-meta">Position <span class="small">&bullet;</span> none</p>
                  </div>
                </div>
                <img src="{{ asset('front/images/person_man_2.jpg') }}" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="this-item-content">
                    <h3>NAME:Architect</h3>
                    <p class="post-meta">Position <span class="small">&bullet;</span> none</p>
                  </div>
                </div>
                <img src="{{ asset('front/images/person_woman_2.jpg') }}" class="lazyload" alt="Image" />
              </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="this-item-content">
                    <h3>NAME:Architect</h3>
                    <p class="post-meta">Position <span class="small">&bullet;</span> none</p>
                  </div>
                </div>
                <img src="{{ asset('front/images/person_woman_3.jpg') }}" class="lazyload" alt="Image" />
              </a>
            </div>


          </div>

        </div>
      </div>
      <!-- END blog posts -->



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
