<?= $this->extend('Layout/header') ?>
<?= $this->section('content') ?> 

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel & Enjoy</span>
               <h3>travel arround the world</h3>
               <a href="package" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel & Enjoy</span>
               <h3>discover the new places</h3>
               <a href="package" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel & Enjoy</span>
               <h3>make your tour worthwhile</h3>
               <a href="package" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

</div>

</section>



<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
         <a href="services" class="btn">click Here</a>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
         <a href="services" class="btn">click Here</a>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
         <a href="services" class="btn">click Here</a>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
         <a href="services" class="btn">click Here</a>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
         <a href="services" class="btn">click Here</a>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
         <a href="services" class="btn">click Here</a>
      </div>
      
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
         <a href="services" class="btn">click Here</a>
      </div>


   </div>

</section>



<section class="home-about">

   <div class="image">
      <img src="images/about.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p> The best tourism advisor or guidance website.Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours.[2] The World Tourism Organization defines tourism more generally, in terms which go "beyond the common perception of tourism as being limited to holiday activity only", as people "travelling to and staying in places outside their usual environment for not more than one consecutive year</p>
      <a href="about" class="btn">read more</a>
   </div>

</section>



<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Taj Mahal Agra</h3>
            <p>Shah Jahan in memory of his favourite wife, the Taj Mahal is the jewel one of the universally admired masterpieces of the heritage.!</p>
            <a href="book" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bhan1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bhandardara Lake</h3>
            <p>Bhandardara Lake Is The Creation Of Bhandardara Dam.It Is 2 Hrs Journey From Igatpuri.The Road To Bhandardara Dam...!</p>
            <a href="book" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/lona.jpg" alt="">
         </div>
         <div class="content">
            <h3>Lonavala - Hill Station Tour From Mumbai</h3>
            <p>The way to visit the ancient rock temples.Lonavala to take in the views and fresh air!</p>
            <a href="book" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package" class="btn">load more</a> </div>

</section>



<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Get 50 % off on to visit any top destinations on our website offer till valid upto on 15 feb 2023..!</p>
      <a href="book" class="btn">book now</a>
   </div>
</section>


<?= $this->endSection('content') ?>









