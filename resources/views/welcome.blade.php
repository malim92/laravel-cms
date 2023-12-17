<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="TemplateMo">

  <title>First Portfolio Bootstrap 5 Theme</title>

  <!-- CSS FILES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/templatemo-first-portfolio-style.css') }}" rel="stylesheet">

</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a href="index.html" class="navbar-brand mx-auto mx-lg-0">First</a>

      <div class="d-flex align-items-center d-lg-none">
        <i class="navbar-icon bi-telephone-plus me-3"></i>
        <a class="custom-btn btn" href="#section_5">
          120-240-9600
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-lg-5">
          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_1">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_2">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_3">News</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_4">Projects</a>
          </li>

          <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_5">Contact</a>
          </li>
        </ul>

        <div class="d-lg-flex align-items-center d-none ms-auto">
          <i class="navbar-icon bi-telephone-plus me-3"></i>
          <a class="custom-btn btn" href="#section_5">
            120-240-9600
          </a>
        </div>
      </div>

    </div>
  </nav>

  <main>
  
    <section class="hero d-flex justify-content-center align-items-center" id="section_1">
      <div class="container">
        <div class="row">

          <div class="col-lg-7 col-12">
            <div class="hero-text">
              <div class="hero-title-wrap d-flex align-items-center mb-4">

                <h1 class="hero-title ms-3 mb-0">{{$heroTitle}}</h1>
              </div>

              <h2 class="mb-4">{{$heroDescription}}</h2>
              <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Read More</a></p>
            </div>
          </div>
          
          <div class="col-lg-5 col-12 position-relative">
            <div class="hero-image-wrap"></div>
            <img src="{{ asset('assets/images/logo.webp') }}" class="hero-image img-fluid" alt="">
          </div>

        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#535da1" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path>
      </svg>
    </section>

    <section class="services section-padding" id="section_3">
      <div class="container">
        <div class="row">

          <div class="col-lg-10 col-12 mx-auto">
            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
              <h2 class="text-white ms-4 mb-0">POSTS</h2>
            </div>

            <div class="row pt-lg-5">
              <div class="col-lg-6 col-12">
                <div class="services-thumb">
                  <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                    <h3 class="mb-0">Websites</h3>

                    <div class="services-price-wrap ms-auto">
                      <p class="services-price-text mb-0">$2,400</p>
                      <div class="services-price-overlay"></div>
                    </div>
                  </div>

                  <p>You may want to explore Too CSS for great collection of free HTML CSS templates.</p>

                  <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                  <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                    <i class="services-icon bi-globe"></i>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-12">
                <div class="services-thumb services-thumb-up">
                  <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                    <h3 class="mb-0">Branding</h3>

                    <div class="services-price-wrap ms-auto">
                      <p class="services-price-text mb-0">$1,200</p>
                      <div class="services-price-overlay"></div>
                    </div>
                  </div>

                  <p>You can explore more CSS templates on TemplateMo website by browsing through different tags.</p>

                  <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                  <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                    <i class="services-icon bi-lightbulb"></i>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-12">
                <div class="services-thumb">
                  <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                    <h3 class="mb-0">Ecommerce</h3>

                    <div class="services-price-wrap ms-auto">
                      <p class="services-price-text mb-0">$3,600</p>
                      <div class="services-price-overlay"></div>
                    </div>
                  </div>

                  <p>If you need a customized ecommerce website for your business, feel free to discuss with me.</p>

                  <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                  <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                    <i class="services-icon bi-phone"></i>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-12">
                <div class="services-thumb services-thumb-up">
                  <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                    <h3 class="mb-0">SEO</h3>

                    <div class="services-price-wrap ms-auto">
                      <p class="services-price-text mb-0">$1,450</p>
                      <div class="services-price-overlay"></div>
                    </div>
                  </div>

                  <p>To list your website first on any search engine, we will work together. First Portfolio is one-page CSS Template for free download.</p>

                  <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                  <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                    <i class="services-icon bi-google"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="projects section-padding" id="section_4">
      <div class="container">
        <div class="row">

          <div class="colcol-lg-10 col-12 mx-auto">
            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">

              <h2 class="text-white ms-4 mb-0">Projects</h2>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="col-lg-4 col-md-6 col-12">
            <div class="projects-thumb">
              <div class="projects-info">
                <small class="projects-tag">Branding</small>

                <h3 class="projects-title">Zoik agency</h3>
              </div>

              <a href="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="popup-image">
                <img src="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="projects-image img-fluid" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12">
            <div class="projects-thumb">
              <div class="projects-info">
                <small class="projects-tag">Photography</small>

                <h3 class="projects-title">The Watch</h3>
              </div>

              <a href="images/projects/the-5th-IQYR7N67dhM-unsplash.jpg" class="popup-image">
                <img src="images/projects/the-5th-IQYR7N67dhM-unsplash.jpg" class="projects-image img-fluid" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12">
            <div class="projects-thumb">
              <div class="projects-info">
                <small class="projects-tag">Website</small>

                <h3 class="projects-title">Polo</h3>
              </div>

              <a href="images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg" class="popup-image">
                <img src="images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg" class="projects-image img-fluid" alt="">
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 col-12">
          <div class="copyright-text-wrap">
            <p class="mb-0">
              <span class="copyright-text">Copyright © 2023 <a href="#"></a> Company. All rights reserved.</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JAVASCRIPT FILES -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.sticky.js"></script>
  <!-- <script src="assets/js/click-scroll.js"></script> -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/magnific-popup-options.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>