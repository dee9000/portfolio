<div id="contact"></div><!--anchor-->
<footer class="footer py-5 pt-5">
         <button type="button" class="btn" id="btn-back-to-top"><span> &uarr; <span></button>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-7 mb-3">
                  <div class="text-center">
                     <p class="text-muted para-desc mx-auto mt-3">Contact Me to Launch your campaign and benefit from my expertise on designing and creating a brand for your site.</p>
                     <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item">
                           <a href="javascript:void(0)" class="rounded">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook fea icon-sm fea-social">
                                 <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                              </svg>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="javascript:void(0)" class="rounded">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social">
                                 <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                 <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                 <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                              </svg>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="javascript:void(0)" class="rounded">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter fea icon-sm fea-social">
                                 <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                              </svg>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a href="javascript:void(0)" class="rounded">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin fea icon-sm fea-social">
                                 <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                 <rect x="2" y="9" width="4" height="12"></rect>
                                 <circle cx="4" cy="4" r="2"></circle>
                              </svg>
                           </a>
                        </li>
                     </ul>
                     <!--end icon-->
                  </div>
               </div>
               <!--end col-->
            </div>
            <!--end row-->
         </div>
         <!--end container-->
      </footer>
      <footer class="footer-bar bg-dark footer">
         <div class="container">
            <div class="row text-center">
               <div class="col-sm-6 footer-bar">
                  <div class="text-sm-left">
                     <p class="mb-0 footer-text para-desc mx-auto">&copy; 2023 Dotun Asunmo Designs.</p>
                  </div>
               </div>
               <!--end col-->
               <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                  <ul class="list-unstyled terms-service text-sm-right mb-0">
                     <li class="list-inline-item mb-0"><a href="#" class="footer-text mr-2">About</a></li>
                     <li class="list-inline-item mb-0"><a href="#" class="footer-text mr-2">Services</a></li>
                     <li class="list-inline-item mb-0"><a href="#" class="footer-text mr-2">FAQs</a></li>
                     <li class="list-inline-item mb-0"><a href="#" class="footer-text">Contact</a></li>
                  </ul>
               </div>
               <!--end col-->
            </div>
            <!--end row-->
         </div>
         <!--end container-->
      </footer>
   </body>
   <!--onmouseout and onmouseover effect-->
   <script>
      function setNewImage(){
        document.getElementById('profile_pic').src="img/cat.gif";
      }
      function setOldImage(){
        document.getElementById('profile_pic').src="img/me.jpeg";
      }
   </script>
   <!--read more button expansion javascript-->
   <script>
      let content = document.getElementById("content");
      let button = document.getElementById("read-more");

      button.onclick = function(){
        if(content.className == "open"){
          //shrink the box
          content.className = "";
          button.innerHTML = "Read More";

        }else{
          //expand the box
          content.className = "open";
          button.innerHTML = "Show Less";
        }
      };

   </script>
   <!-- JQUERY -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <!-- navigation Toggle -->
   <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
   </script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <!-- scroll animation -->
   <script>
      AOS.init({
        offset:100,
        duration:1000
      });
   </script>
   <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'cc069ceb-d684-4869-94c5-df07ee0030eb', f: true }); done = true; } }; })();</script>
   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      -->
   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   <!--Start of Tawk.to Script-->
   <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/63b75e2bc2f1ac1e202bf4fe/1gm24fmmc';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
   </script>
   <!--End of Tawk.to Script-->
   <!--jumpt to top-->
   <script>
      function reveal() {
      var reveals = document.querySelectorAll(".reveal");

      for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;

      if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
      } else {
      reveals[i].classList.remove("active");
      }
      }
      }

      window.addEventListener("scroll", reveal);
   </script>
   <script>
      //Get the button fast button to take you to top of screen
      let mybutton = document.getElementById("btn-back-to-top");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      // When the user clicks on the button, scroll to the top of the document
      mybutton.addEventListener("click", backToTop);

      function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
   </script>
   </body>
</html>