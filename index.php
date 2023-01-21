<?php include 'header.php';?>

      <!--hero section-->
      <section class="jumbotron">
         <!--social media-->
         <div class="icon-bar animate__animated animate__flipInY" >
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
         </div>
         <div class="card mb-3" >
            <div class="row no-gutters">
               <div class="col-md-5 hero-text text-left">
                  <div class="card-body">
                     <h5 class="card-title" data-aos="fade-right">Dotun</h5>
                     <h4 class="card-title" data-aos="fade-left">Asunmo</h4>
                     <h6 class="card-title" data-aos="fade-right">Web Developer</h6>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="card image-card">
                     <div class="card-body hero-text-bio" data-aos="fade-right">
                        <p class="card-text">I'm a Designer Developer based in the UK, and I'm very passionate and dedicated to my work.
                           This portfolio contains studied content on my web developer training course as well as further self taught topics.

                           <ul class="list-group">
                             <li class="list-group-item"><i class="fa fa-cog fa-spin"></i>  I love watching 80s and 90s commercials [“don’t ask”];</li>
                             <li class="list-group-item"><i class="fa fa-cog fa-spin"></i>  Mint in chocolate tastes like toothpaste ["yea i said it"];</li>
                             <li class="list-group-item"><i class="fa fa-cog fa-spin"></i>  'Don't like Raisins. They should not be in cookies.</li>
                           </ul>
                        </p>
                     </div>
                     <div class="image animate__animated animate__zoomIn main_image">
                        <img onmouseover="setNewImage()" onmouseout="setOldImage()"src="img/me.jpeg" class="card-img-bottom" alt="..." id="profile_pic">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="svg-container">
         <div class="custom-shape-divider-bottom-1673741298">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
               <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
         </div>
      </div>
      <section class="container-fluid biography-container pt-5">
         <!-- start event block -->
         <div class="row align-items-center event-block no-gutters margin-40px-bottom">
            <div class="col-lg-5 col-sm-12">
               <div class="position-relative text-right" data-aos="fade-down">
                  <p class="num">01</p>
               </div>
            </div>
            <div class="col-lg-7 col-sm-12 biography-text">
               <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                  <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500 pt-5" data-aos="fade-left">ABOUT ME</h5>
                  <hr align="left" data-aos="fade-right">
                  <div id="content">
                     <p  class="pt-4" data-aos="fade-up">My last role revolved around designing and developing websites and web applications for the education sector, ensuring that schools and educational trusts have a highly functional website that fulfils their requirements.
                        Prior to my last development role, I had a lengthy career at Sky television that spanned 7 years.<br/>
                       I worked in various roles across different sky sites across the country ranging from telecommunications to media, with my last role being a media coordinator where I was responsible for coordinating Skys entertainment boxset line-up for their digital online platform and liaising with major studios and production houses such as Disney, Nickelodeon, BBC, universal studios, ESPN etc. regarding licensing issues.
                       After speaking to a few developers at Sky, I decided to enrol at university and studied for a Masters degree in Web Design which is where my interest into coding began.<br/> 
                       Web development enables me the opportunity to fuse creativity and technology to bring ideas to life. It's an opportunity for me to create something potentially new and helpful to a client.
                       <br/>
                       When I’m not keeping busy with the fast-paced world of web design, I enjoy photography, learning Spanish and watching travel documentaries.
                     </p>
                     <p data-aos="fade-left">CURRENT TECH STACK</p>
                     <p>
                     <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-cog fa-spin"></i> HTML</li>
                        <li class="list-group-item"><i class="fa fa-cog fa-spin"></i> CSS</li>
                        <li class="list-group-item"><i class="fa fa-cog fa-spin"></i> BOOTSTRAP</li>
                        <li class="list-group-item"><i class="fa fa-cog fa-spin"></i> JAVASCRIPT</li>
                        <li class="list-group-item"><i class="fa fa-cog fa-spin"></i> PHP</li>
                        <li class="list-group-item"><i class="fa fa-cog fa-spin"></i> SQL/MySQL</li>
                        <li class="list-group-item"><i class="fa fa-cog fa-spin"></i> GIT</li>
                     </ul>
                     </p>
                  </div>
               </div>
               <div class="pl-5 mt-4 read-more">
                  <button type="button" class="btn btn-outline-light btn-lg" id="read-more" data-aos="fade-right">Read More</button>
               </div>
            </div>
         </div>
         <!-- end event block -->
         <!-- start event block -->
         <div id="projects"></div><!-- anchor -->

         <div class="row align-items-center event-block no-gutters">
            <div class="col-lg-7 project-text">
               <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                  <h5 class="card-title pt-4 event-location muted event-location" data-aos="fade-up">University of Greenwich</h5>
                  <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500" data-aos="fade-right">MY LATEST PROJECTS</h5>
                  <hr align="right" data-aos="fade-left">
               </div>
            </div>
            <div class="col-lg-3">
               <div class="position-relative text-center" data-aos="fade-down">
                  <p class="num">02</p>
               </div>
            </div>
         </div>
         <!-- end event block -->
         <!--content-->
         <div class="container container-one" data-aos="fade-up">
            <div class="card-deck">
               <div class="card mb-5">
                  <a href="https://www.toonsville.co.uk/"><img class="card-img-top" src="img/img1.png" alt="Card image cap"></a>
                  <div class="card-body">
                     <h5 class="card-title pt-4">CUSTOM WORDPRESS WEBSITE</h5>
                     <h6 class="card-text pb-2">
                     TOONSVILLE
                     <h6>
                     <hr align="center">
                     <p class="card-text pt-2"><small>Final year project for retro cartoon site.</small></p>
                  </div>
               </div>
               <div class="card mb-5">
                  <img class="card-img-top" src="img/img2.png" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title pt-4">JAVASCRIPT PRACTICE</h5>
                     <h6 class="card-text pb-2">
                     MEDIA PLAYER
                     <h6>
                     <hr align="center">
                     <p class="card-text pt-2"><small>Javascript media player</small></p>
                  </div>
               </div>
               <div class="card mb-5">
                  <img class="card-img-top" src="img/img3.png" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title pt-4">PHP</h5>
                     <h6 class="card-text pb-2">
                     UI DESIGN WITH PHP
                     <h6>
                     <hr align="center">
                     <p class="card-text pt-2"><small>Ui design with PHP practice</small></p>
                  </div>
               </div>
            </div>
            <div class="text-center">
            <a href="content.php"><button type="button" class="btn btn-outline-light btn-lg">View More</button></a>
            </div>
         </div>
         <!-- start event block -->
         <div class="row align-items-center event-block no-gutters event-3">
            <div class="col-lg-5">
               <div class="position-relative text-right" data-aos="fade-down">
                  <p class="num">03</p>
               </div>
            </div>
            <div class="col-lg-7 text-left">
               <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                  <h5 class="card-title pt-4 event-location muted" data-aos="fade-up">Schudio Ltd.</h5>
                  <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500" data-aos="fade-left">MY LATEST PROJECTS</h5>
                  <hr align="left" data-aos="fade-right">
               </div>
            </div>
         </div>
         <!-- end event block -->
         <!--content-->
         <div class="container container-one" data-aos="fade-up">
            <div class="card-deck">
               <div class="card mb-5">
                  <a href="https://stmartinsschoolderby.co.uk/"><img class="card-img-top" src="img/img10.png" alt="Card image cap"></a>
                  <div class="card-body">
                     <h5 class="card-title pt-4">SPECIAL NEEDS SCHOOL</h5>
                     <h6 class="card-text pb-2">
                     ST MARTINS SCHOOL DERBY
                     <h6>
                     <hr align="center">
                     <p class="card-text pt-2"><small>Website design for Derby School</small></p>
                  </div>
               </div>
               <div class="card mb-5">
                  <img class="card-img-top" src="img/img11.png" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title pt-4">WEBSITE TEMPLATE</h5>
                     <h6 class="card-text pb-2">
                     HIGH SCHOOL PROTOTYPE
                     <h6>
                     <hr align="center">
                     <p class="card-text pt-2"><small>Features Content Section</small></p>
                  </div>
               </div>
               <div class="card mb-5">
                  <img class="card-img-top" src="img/img12.png" alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title pt-4"> FORM TEMPLATE</h5>
                     <h6 class="card-text pb-2">
                     APPLICATION FORM PROTOTYPE
                     <h6>
                     <hr align="center">
                     <p class="card-text pt-2"><small>6th form school prototype</small></p>
                  </div>
               </div>
            </div>
            <div class="text-center pb-5">
               <button type="button" class="btn btn-outline-light btn-lg">View More</button>
            </div>
         </div>
      </section>
      <?php include 'footer.php';?>

