<!doctype html>
<html class="no-js" lang="zxx">

<head>

<?php
require_once ('common/header.php');
?>

  <title>Worldwide Clients of Wolffia Digital Solutions</title>
  <meta property="og:title" content="Worldwide Clients of Wolffia Digital Solutions">
  <meta name="twitter:title" content="Worldwide Clients of Wolffia Digital Solutions">

  <meta name="description"
  content="Boost your online presence with a leading Digital Marketing Company in Bangladesh. Discover the tailored Website Design, Graphics Design, Video & Animation and innovative digital marketing from an expert team to elevate your brand today.">
  <meta property="og:description"
  content="Boost your online presence with a leading Digital Marketing Company in Bangladesh. Discover the tailored Website Design, Graphics Design, Video & Animation and innovative digital marketing from an expert team to elevate your brand today.">
  <meta name="twitter:description"
  content="Boost your online presence with a leading Digital Marketing Company in Bangladesh. Discover the tailored Website Design, Graphics Design, Video & Animation and innovative digital marketing from an expert team to elevate your brand today.">

  <meta name="keywords"
  content="Digital Marketing Client, Client, Digital Marketing Company Bangladesh, website design in Bangladesh, graphics design in Bangladesh, Video Editing & Animation in Bangladesh, SEO services Bangladesh, social media management, online marketing Bangladesh, digital marketing strategies, boost online presence, maximize ROI, expert digital marketing, Bangladesh marketing agency">
</head>

<body>




<?php 
require('common/menu.php');
?>
  
  <main>

    <!-- banner-area-start -->
    <div class="banner-area tpbanner-space-two" data-background="assets/img/banner/banner-2-bg-1.png">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-9 col-md-11 order-2 order-md-1">
                <div class="tpbanner-content-two text-center">
                    <h1 class="tpbanner-title-two mb-20">Our Worldwide Valued Clients : Success Stories and Partnerships</h1>
                    <p>Discover innovative and results-driven digital marketing strategies tailored to elevate your brand, engage your audience, and drive growth. Partner with us to unlock your business's full potential in the digital landscape.</p>
                    <div class="tpbanner-two-rating">
                      <span>Excellent</span>
                      <img src="/assets/img/shape/rating-1.png" alt="">
                      <p>Trustpilot</p>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </div>
    <!-- banner-area-end -->
<section class="award-area pt-80">
        <div class="container">
          <div class="row">
                <?php
                     $dirname = "assets/img/clients/";

                     $images = glob($dirname."*.jpg");

                     foreach($images as $image) {
                        $filename = basename($image, ".jpg"); 
                        $filename = str_replace("-"," ", $filename);
                        echo '
                                      <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="tpaward text-center mb-30 shadow-sm client-items">
                    <div class="tpaward-icon mb-15">
                      <img src="'.$image.'" alt="'.$filename.'" width="121" height="121">
                    </div>
                    <div class="tpaward-content">
                      <h4 class="title mb-5">'.$filename.'</h4>
                    </div>
                </div>
              </div>';
                     }
                  ?>  

              
          </div>
        </div>
    </section>
    <!-- sevice-category-area-start -->
    <section class="seo-area pt-100 position-relative z-index-1">
        <div class="container">
          <div class="row justify-content-center mb-50">
              <div class="col-lg-9">
                <div class="tpsection-wrapper text-center">
                    <h2 class="tpsection-title-two">Innovative Digital Solutions for<br>
                      <span class="big-shape">Brand Growth
                          <svg width="335" height="33" viewBox="0 0 335 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.64842 20.1323C2.64842 20.1323 211.522 -6.39416 328.614 12.7876"
                                stroke="#3db54a" stroke-width="5" stroke-linecap="round" />
                            <path d="M3.01153 15.7265C3.01153 15.7265 215.763 -0.925266 332.424 23.448"
                                stroke="#3db54a" stroke-width="5" stroke-linecap="round" />
                          </svg>
                      </span>
                    </h2>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="tpseo p-relative mb-40">
                    <div class="tpseo-bg tpseo-bg3"></div>
                    <div class="tpseo-content">
                      <h4 class="tpseo-title mb-15">Web <br>Design</h4>
                      <div class="tpseo-info">
                          <p>Crafting visually stunning, user-friendly websites that engage and convert visitors into leads. Elevate your online presence with creative web design.</p>
                          <div class="tpseo-details">
                            <a href="/web-design/">Learn More <i class="fa-light fa-arrow-right"></i></a>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="tpseo p-relative mb-40">
                    <div class="tpseo-bg tpseo-bg1"></div>
                    <div class="tpseo-content">
                      <h4 class="tpseo-title mb-15">Graphics <br>Design</h4>
                      <div class="tpseo-info">
                          <p>Creating captivating visuals that clarify your brand's message and enhance its identity. Stand out with our professional graphic design services.</p>
                          <div class="tpseo-details">
                            <a href="/graphics-design/">Learn More <i class="fa-light fa-arrow-right"></i></a>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="tpseo p-relative mb-40">
                    <div class="tpseo-bg tpseo-bg3"></div>
                    <div class="tpseo-content">
                      <h4 class="tpseo-title mb-15">Video & <br>Animation</h4>
                      <div class="tpseo-info">
                          <p>Bringing your brand to life through dynamic visuals that captivate and inspire. Elevate engagement with our expert video and animation services.</p>
                          <div class="tpseo-details">
                            <a href="/video-animation/">Learn More <i class="fa-light fa-arrow-right"></i></a>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="tpseo p-relative mb-40">
                    <div class="tpseo-bg tpseo-bg1"></div>
                    <div class="tpseo-content">
                      <h4 class="tpseo-title mb-15">Digital <br>Marketing</h4>
                      <div class="tpseo-info">
                          <p>Accelerating your online success with tailored strategies that drive business growth. Partner with us for impactful digital marketing solutions.</p>
                          <div class="tpseo-details">
                            <a href="/digital-marketing/">Learn More <i class="fa-light fa-arrow-right"></i></a>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="services-bottom text-center">
                    <div class="servics-details-4 d-flex align-items-center justify-content-center">
                      <img src="/assets/img/shape/header-rocket.png" alt="">
                      <p>
                          You can also find our
                          <a href="/services/">
                            Services
                            <i class="d-none d-md-block">
                                <svg width="60" height="7" viewBox="0 0 60 7" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path d="M1.19582 4.26135C22.5561 -1.51199 38.7792 0.327797 59.246 6.22031"
                                      stroke="#3db54a" stroke-linecap="round" />
                                </svg>
                            </i>
                          </a>
                          to contact for the consulting.
                      </p>
                    </div>
                </div>
              </div>
          </div>
        </div>
    </section>
    <!-- sevice-category-area-end -->

    
    <!-- cta-area-start -->
          <?php 
  require_once('common/cta.php');
  ?>
    <!-- cta-area-end -->

    <!-- technology-area-start -->
        <?php 
  require_once('common/technology.php');
  ?>
    <!-- technology-area-end -->

  </main>

  <!-- footer-area-start -->
  <?php 
  require_once('common/footer.php');
  ?>
  <!-- footer-area-end -->


  <?php 
  require_once('common/script.php');
  ?>
</body>

</html>