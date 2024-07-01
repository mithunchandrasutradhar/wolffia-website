      <section class="award-area award-bg fix p-relative pt-100 tp-large-box"
         data-background="/assets/img/banner/award-bg-2.png">
         <div class="award-shape d-none d-xl-block">
            <div class="award-shape-one">
               <img src="/assets/img/shape/services-2shape-3.png" alt="">
            </div>
            <div class="award-shape-two">
               <img src="/assets/img/shape/services-2shape-4.png" alt="">
            </div>
         </div>
         <div class="container">
            <div class="row justify-content-center mb-50">
               <div class="col-lg-8">
                  <div class="tpsection-wrapper text-center pb-60">
                     <h2 class="tpsection-title-two">
                        <span>Worldwide Clients
                           <svg width="256" height="26" viewBox="0 0 256 26" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.3235 15.8532C3.3235 15.8532 161.626 -4.27683 250.369 10.281" stroke="#3db54a"
                                 stroke-width="5" stroke-linecap="round" />
                              <path d="M3.59665 12.5096C3.59665 12.5096 164.84 -0.133887 253.255 18.3596"
                                 stroke="#3db54a" stroke-width="5" stroke-linecap="round" />
                           </svg>
                        </span>
                        
                     </h2>
                  </div>
               </div>
            </div>
            <div class="award-brand">
               <div class="row gx-7 gx-md-2 row-cols-4 tp-row-cols-md-7  tp-row-cols-xl-7">

                  <?php
                     $dirname = "assets/img/clients/best/";

                     $images = glob($dirname."*.jpg");
                     $images = array_slice($images, 0, 7);
                     $item = 1;

                     foreach($images as $image) {
                        $filename = basename($image, ".jpg"); 
                        echo '<div class="col"><a href="/clients">
                     <div class="award-anim wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                        <div class="award-item award-item'.$item.'">
                           <img src="'.$image.'" alt="'.$filename.'" width="121" height="121">
                        </div>
                     </div></a>
                  </div>';
                  $item++;
                     }
                  ?>               
                  
               </div>
               <div class="row justify-content-center pb-20">
                  <div class="col-xl-6 col-lg-8 col-md-10">
                     <div class="services-bottom text-center">
                        <div class="servics-details-4 d-flex align-items-center justify-content-center">
                           <p>
                              Visit our top
                              <a href="/clients">
                                 Clients
                                 <i class="d-none d-md-block">
                                    <svg width="60" height="7" viewBox="0 0 60 7" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1.19582 4.26135C22.5561 -1.51199 38.7792 0.327797 59.246 6.22031"
                                          stroke="#3db54a" stroke-linecap="round" />
                                    </svg>
                                 </i>
                              </a>
                              around the worldwide.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>