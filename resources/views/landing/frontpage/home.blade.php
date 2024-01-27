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
    {{-- <link rel="stylesheet" href="css/vendor/icomoon/style.css"> --}}
    {{-- <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vendor/animate.min.css">
    <link rel="stylesheet" href="css/vendor/aos.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/jquery.fancybox.min.css"> --}}


    <!-- Theme Style -->
    {{-- <link rel="stylesheet" href="css/style.css"> --}}

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
                  <a  href="home.html" class="nav-link">Home</a>

                </li>

                <li><a href="about.html" class="nav-link">About</a></li>
                <li><a href="services.html" class="nav-link">Services</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <a href="home.html" class="unslate_co--site-logo"> <img src="{{ asset('front/images/companyLogo.png') }}" class="lazyload  img-fluid" alt="Images" /></a>
            </div>
            <div  class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">

                <li><a href="testimonial.html" class="nav-link">Testimonials</a></li>
                <li><a href="works.html" class="nav-link">Our Works</a></li>
                <li><a href="contact.html" class="nav-link">Contact Us</a></li>

              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>
      <!-- END nav -->

      <div class="cover-v1 jarallax" style="background-image: url('{{ asset('front/images/297881865_172689311929390_1950189024350130841_n.jpg') }}');" id="home-section">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-md-7 mx-auto text-center">


              <h1 class="heading gsap-reveal-hero"><img src="{{ asset('front/images/Untitled-2.png') }}" class="lazyload  img-fluid" alt="Images" /></h1>
              <h2 class="subheading gsap-reveal-hero">BUILDING DESIGN SERVICES</h2>
            </div>

          </div>
        </div>


        <a href="#this-section" class="mouse-wrap smoothscroll">

          <span style="color: white;
            font-family: sans-serif;
            padding: 15px 25px;
            font-size: 0.875rem;
            text-decoration: none;
            top: 50%;
            transition: 0.3s;
            letter-spacing: 0.05rem;
            border: 2px solid white;" class="mouse-label">Get Started</span>
        </a>

      </div>
      <!-- END .cover-v1 -->

     <div class="unslate_co--section" id="about-section">
        <div class="col-12">



          <div class="row mt-5 justify-content-between">
            <div class="col-lg-6 mb-5 mb-lg-10">
              <figure class="dotted-bg gsap-reveal-img ">
                <img src="{{ asset('front/images/310432111_186902260508095_4822510034040461973_n.jpg') }}" alt="Image" class="img-fluid">
              </figure>
            </div>

            <div class="col-lg-5 pr-lg-4">
                  <br><br>  <br>
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal">"Work until you no need to introduce yourself"</span></h3>
              <p class="lead gsap-reveal">text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... </p>
              <p class="mb-4 gsap-reveal">text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... </p>

            </div>
          </div>
        </div>
      </div>

      <div class="unslate_co--section" id="this-section">
        <div class="col-12">


          <div class="relative"><div class="loader-this-wrap"><div class="loader-this"></div></div> </div>
          <div id="this-single-holder"></div>

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
                        <h3>Corporate</h3>

                      </div>
                    </div>
                    <img src="{{ asset('front/images/313020122_188432873688367_8565865133771706285_n.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>
          <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="{{ asset('front/images/382230286_331340362730950_4183704594503918235_n.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Watch">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Retail/Commercial</h3>

                      </div>
                    </div>
                    <img src="{{ asset('front/images/382230286_331340362730950_4183704594503918235_n.jpg') }}" class="lazyload  img-fluid" alt="Images" />
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
                    <img src="{{ asset('front/images/363359676_301862389012081_1941683697978561029_n.jpg') }}" class="lazyload  img-fluid" alt="Images" />
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
                    <img src="{{ asset('front/images/312912065_188432883688366_8688871015789825250_n.jpg') }}" class="lazyload  img-fluid" alt="Images" />
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
                    <img src="{{ asset('front/images/310432111_186902260508095_4822510034040461973_n.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

            </div>

          </div>


        </div>
      </div>


      <div class="unslate_co--section" id="testimonial-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Client Testemonials</span></h2>
            <span class="gsap-reveal"><img src="{{ asset('front/images/divider.png') }}" alt="divider" width="76"></span>
          </div>
        </div>

        <div style="color:white;" class="owl-carousel testimonial-slider" data-aos="fade-up">
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>

              <div class="testimonial-author-info">
                <img style="filter: blur(4px)" src="{{ asset('front/images/person_man_1.jpg') }}" alt="Image">
                <h3>Eric Ingram</h3>
                <span class="d-block position">Product Designer @facebook</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>

              <div class="testimonial-author-info">
                <img style="filter: blur(4px)" src="{{ asset('front/images/person_man_2.jpg') }}" alt="Image">
                <h3>Ryan Mullins</h3>
                <span class="d-block position">Product Designer @Shopify</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </blockquote>
              </div>

              <div class="testimonial-author-info">
                <img style="filter: blur(4px)" src="{{ asset('front/images/person_woman_1.jpg') }}" alt="Image">
                <h3>Erica Miller</h3>
                <span class="d-block position">Product Designer @Twitter</span>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!-- END testimonial -->





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
                  <a href="#" class="contact-info-val">info.mae@gmail.com</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Phone</span>
                  <a href="#" class="contact-info-val">09157769382 / 09621539726</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Address</span>
                  <address class="contact-info-val">Lot 1. Magnolia St.Greenview <br> Daet Camarines Norte</address>
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
