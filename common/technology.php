<div class="brand-area pb-30 pt-85">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-10 col-xl-8 col-lg-10">
                  <div class="tpbrand tpbrand-active">

                  <?php
                  $dirname = "assets/img/technology/";

                  $images = glob($dirname."*.svg");


                  foreach($images as $image) {
                       $filename = basename($image, ".svg"); 
                     echo '<div class="tpbrand-item ">
                     <img src="'.$image.'" alt="'.$filename.'" width="150" heigh="25" style="height: 40px; object-fit: contain;">
                     </div>';
                  }
                  ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>