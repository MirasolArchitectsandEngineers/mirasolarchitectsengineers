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
                  <a  id="home" href="" class="nav-link">Home</a>

                </li>

                <li><a href="/about" id="about" class="nav-link">About</a></li>
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
                {{-- <img src="{{ asset('front/images/310432111_186902260508095_4822510034040461973_n.jpg') }}" alt="Image" class="img-fluid"> --}}
                <video autoplay muted loop class="md:auto border-2 rounded">
                    <source src="{{ asset('videos/mae.mp4') }}" type="video/mp4">
                </video>
              </figure>
            </div>

            <div class="col-lg-5 pr-lg-4">

              <h3 class="mb-4 heading-h3"><span class="gsap-reveal">"Work until you no need to introduce yourself"</span></h3>

              <p class="font-serif lead gsap-reveal bg-gray-900">Mirasol Architects & Engineers “Building Design Services”,
                is a Company that specialize in Project & Construction
                Services. (DTI Reg. 2968629) <br><br>
                Formerly A.E.M. Plans & Design, it was organized to
                cater and help supporting client on Space Planning,
                Designing, Costing, Project Development & Project
                Management / Supervision assistance.<br><br>
                Now, M.A.E is a team of license and Experience
                Professional in each individual field related to project
                and construction.
                And the company main objective is to help client
                organize & lesser their burden through the Team and
                Collaboration with specific scope and other project
                related services in a Professional way .
                </p>
              {{-- <p class="mb-4 gsap-reveal">text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... text.......... </p> --}}

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

                <a href="{{ asset('front/images/residential.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox data-caption="Residential">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Residential</h3>

                      </div>
                    </div>
                    <img src="{{ asset('front/images/residential.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>

              </div>
                 <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="{{ asset('front/images/313020122_188432873688367_8565865133771706285_n.jpg') }}" class="this-item item-portrait isotope-item gsap-reveal-img " data-fancybox data-caption="Corporate">
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

                <a href="{{ asset('front/images/382230286_331340362730950_4183704594503918235_n.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox data-caption="Retail">
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
                <a href="{{ asset('front/images/Pambuhan.jpg') }}" class="this-item item-portrait isotope-item gsap-reveal-img " data-fancybox data-caption="Property & Land Development">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Property & Land Development</h3>

                      </div>
                    </div>
                    <img src="{{ asset('front/images/Pambuhan.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>
          <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="{{ asset('front/images/312912065_188432883688366_8688871015789825250_n.jpg') }}" class="this-item isotope-item gsap-reveal-img" data-fancybox data-caption="Project Management">
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
                <a href="{{ asset('front/images/fabrication.jpg') }}" class="this-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="Fabrication">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="this-item-content">
                        <h3>Fabrication</h3>

                      </div>
                    </div>
                    <img src="{{ asset('front/images/fabrication.jpg') }}" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

            </div>

          </div>


        </div>
      </div>


      <div class="unslate_co--section" id="testimonial-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Client Feedback</span></h2>
            <span class="gsap-reveal"><img src="{{ asset('front/images/divider.png') }}" alt="divider" width="76"></span>
          </div>
        </div>

        <div style="color:white;" class="owl-carousel testimonial-slider" data-aos="fade-up">
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                    I am a residential owner who had the privilege of working with Mirasol Architects & Engineers for the design of my beautiful and artistic residential project. I am extremely pleased with the quality services provided by their Managing Director, Arch. Aaron Enova Mirasol, and his project team.
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
                    From the start, Arch. Aaron Enova Mirasol exhibited a high level of professionalism and expertise. He took the time to understand my vision and preferences for the project, and his team translated them into a remarkable design. His attention to detail and commitment to delivering exceptional results were evident throughout the entire process.
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
                    Arch. Aaron Enova Mirasol and his project team were always available to address any concerns or questions I had. Their communication skills were excellent, and they kept me informed about the progress of the project at every stage. Their project management abilities ensured that the project ran smoothly and efficiently.
                </blockquote>
              </div>

              <div class="testimonial-author-info">
                <img style="filter: blur(4px)" src="{{ asset('front/images/person_woman_1.jpg') }}" alt="Image">
                <h3>Erica Miller</h3>
                <span class="d-block position">Product Designer @Twitter</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                    The quality of the services provided by Mirasol Architects & Engineers was outstanding. Arch. Aaron Enova Mirasol and his team demonstrated a deep understanding of architectural principles and design concepts. They utilized high-quality materials and incorporated innovative ideas into the project, resulting in a residential space that exceeded my expectations.
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
                    I was particularly impressed by Arch. Aaron Enova Mirasol’s creativity and ability to think outside the box. He and his team went above and beyond to create a unique and artistic design that truly reflected my personal style. Their attention to detail and commitment to excellence were evident in every aspect of the project.
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
                    I highly recommend Mirasol Architects & Engineers for anyone in need of building design services. Arch. Aaron Enova Mirasol’s leadership and the expertise of his project team are unparalleled. Their dedication to delivering high-quality results and their passion for their work are evident in the beautiful and artistic residential project they completed for me. I am grateful for their exceptional services and the incredible transformation they brought to my home
                </blockquote>
              </div>

              <div class="testimonial-author-info">
                <img style="filter: blur(4px)" src="{{ asset('front/images/person_woman_1.jpg') }}" alt="Image">
                <h3>Erica Miller</h3>
                <span class="d-block position">Product Designer @Twitter</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                    I am absolutely amazed by the resilience and dedication of the Mirasol Architects & Engineers project team. Despite facing stressful situations, unexpected delays, and even personnel changes, they remained committed to delivering our house project.
                </blockquote>
              </div>

              <div class="testimonial-author-info">
                <img style="filter: blur(4px)" src="{{ asset('front/images/person_man_1.jpg') }}" alt="Image">
                <h3>Eric Ingram</h3>
                <span class="d-block position">Product Designer @facebook</span>
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

      {{-- <footer class="unslate_co--footer unslate_co--section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">

              <div class="footer-site-logo"> <a href="#"><img src="{{ asset('front/images/companyLogo.png') }}" class="lazyload  img-fluid" alt="Images" /></a></div>

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
      </footer> --}}
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
