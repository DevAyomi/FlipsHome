

<!DOCTYPE html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Flips~Home Projects</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
      <!-- Font -->
      <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('backend/css/elegant-font.css') }}">
      <!-- SCROLL BAR MOBILE MENU
         ================================================== --> 
      <link rel="stylesheet" href="{{ asset('backend/css/jquery.mCustomScrollbar.css') }}" />
      <!-- Main Style -->
      <link rel="stylesheet" href="{{ asset('backend/style.css') }}">
      <!-- color scheme -->
      <link rel="stylesheet" href="{{ asset('backend/switcher/demo.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('backend/switcher/colors/yellow.css') }}" type="text/css" id="colors">
      <!-- Favicons
         ================================================== -->
   </head>
   <body>
    
     
      <!--Add Mobile nav here--->
        @include('components.mobile')
      <!-- End Mobile Menu -->

      <div class="modal fade modal-search" id="myModal" tabindex="-1" role="dialog"   aria-hidden="true">
         <button type="button" class="close" data-dismiss="modal">×</button>
         <div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body">
                  <form role="search" method="get" class="search-form"  >
                     <input class="search-field" placeholder="Search here..." value="" title="" type="search">
                     <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- End Modal Search-->
      <div id="page">
         <div id="skrollr-body">

             <!--Header Here--->
               @include('components.header')
              <!-- End  Header -->

            <section>
               <div class="sub-header sub-header-1 sub-header-portfolio-grid-1 fake-position">
                  <div class="sub-header-content">
                     <h2 class="text-cap white-text">Portfolio Grid</h2>
                     <ol class="breadcrumb breadcrumb-arc text-cap">
                        <li>
                           <a href="#">Home</a>
                        </li>
                        <li class="active">Portfolio Grid</li>
                     </ol>
                  </div>
               </div>
            </section>
            <!-- End Section Sub Header -->
            <section class="padding bg-grey padding-bottom-0">
               <div class="lastest-project-warp portfolio-grid-2-warp clearfix">
                  <div class="projectFilter project-terms line-effect-2">
                     <a href="#" data-filter="*" class="current text-cap">
                        <h4>All Projects</h4>
                     </a>
                  </div>
                  <!-- End Project Fillter -->
                  <div class="clearfix projectContainer portfolio-grid-2-container">
                     <div class="element-item  Residential">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/1.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap text-cap">Dream House</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Residential</a>
                        </div>
                     </div>
                     <div class="element-item Residential ">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/2.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">Wood Wall City</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Ecommercial</a>
                        </div>
                     </div>
                     <div class="element-item Ecommercial">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/3.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">Bathroom furniture</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Residential</a>
                        </div>
                     </div>
                     <div class="element-item Ecommercial ">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/4.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">Living Room Decor</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Resident</a>
                        </div>
                     </div>
                     <div class="element-item Office">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/5.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">open Space House</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Residential</a>
                        </div>
                     </div>
                     <div class="element-item Office">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/6.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">Sky Hotel</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Ecommercial</a>
                        </div>
                     </div>
                     <div class="element-item Hospital ">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/7.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">Ogrange Corporate</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Office</a>
                        </div>
                     </div>
                     <div class="element-item Hospital">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/8.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">Ocean view Building</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Residential</a>
                        </div>
                     </div>
                     <div class="element-item  Residential">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/9.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap text-cap">Modern Design</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Resident</a>
                        </div>
                     </div>
                     <div class="element-item Residential ">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/10.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">Dream house</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Residential</a>
                        </div>
                     </div>
                     <div class="element-item Ecommercial">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/12.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">Living Room Art</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Residential</a>
                        </div>
                     </div>
                     <div class="element-item Ecommercial ">
                        <a class="portfolio-img-demo" href="portfolioDetail_1.html"><img src="images/Project/12.jpg" class="img-responsive" alt="Image"></a>
                        <div class="project-info">
                           <a href="portfolioDetail.html">
                              <h4 class="title-project text-cap">Bedroom Design Awward</h4>
                           </a>
                           <a href="portfolioDetail.html" class="cateProject">Residential</a>
                        </div>
                     </div>
                  </div>
                  <!-- End project Container -->
               </div>
               <!-- End  -->
               <div class="overlay-arc">
                  <div class="layer-1">
                     <a href="#" class="ot-btn btn-border btn-border-dark btn-long text-cap">Get a Quote</a>
                  </div>
               </div>
            </section>
            <!-- End Section Isotop Lastest Project -->
            <footer class="footer-v1">
               <div class="footer-left">
                  <a href="index.html">
                  <img src="images/Header/logo-invest.png " class="img-responsive" alt="Image">
                  </a>
               </div>
               <!-- End Left Footer -->
               <nav>
                  <ul>
                     <li>
                        <a class="text-cap" href="#">Gallery</a>
                     </li>
                     <li>
                        <a class="text-cap" href="#">Products</a>
                     </li>
                     <li>
                        <a class="text-cap" href="#">News</a>
                     </li>
                     <li>
                        <a class="text-cap" href="#">About</a>
                     </li>
                     <li>
                        <a class="text-cap" href="#">Privacy Policy</a>
                     </li>
                  </ul>
               </nav>
               <!-- End Nav Footer -->
               <div class="footer-right">
                  <ul class="social social-footer">
                     <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                     <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
               </div>
               <!-- End Right Footer -->
            </footer>
            <!-- End Footer -->
            <section class="copyright">
               <p>Copyright © 2016 Designed by <a href="#">AuThemes</a>. All rights reserved.</p>
            </section>
         </div>
      </div>
      <!-- End page -->
      <a id="to-the-top"><i class="fa fa-angle-up"></i></a> 
      <!-- Back To Top -->
      <!-- SCRIPT -->
      <script src="{{ asset('backend/js/vendor/jquery.min.js') }}"></script>
      <script src="{{ asset('backend/js/vendor/bootstrap.min.js') }}"></script>
      <script src="{{ asset('backend/js/plugins/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('backend/js/plugins/wow.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('backend/js/plugins/skrollr.min.js') }}"></script>
      <!-- Switcher
         ================================================== -->
      <script src="{{ asset('backend/switcher/demo.js') }}"></script>
      <!-- Mobile Menu
         ================================================== --> 
      <script src="{{ asset('backend/js/plugins/jquery.mobile-menu.js') }}"></script>  
      <!-- Initializing the isotope
         ================================================== --> 
      <script src="{{ asset('backend/js/plugins/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('backend/js/plugins/custom-isotope.js') }}"></script>
      <!-- PreLoad
       ================================================== --> 
      <script type="text/javascript" src="{{ asset('backend/js/plugins/royal_preloader.min.js') }}"></script>
      <script type="text/javascript">
      (function($) { "use strict";
                  Royal_Preloader.config({
                      mode:           'logo', // 'number', "text" or "logo"
                      timeout:       1,
                      showInfo:       false,
                      opacity:        1,
                      background:     ['#FFFFFF']
                  });
      })(jQuery);
      </script>

      <!-- Global Js
       ================================================== --> 
      <script src="{{ asset('backend/js/plugins/custom.js') }}"></script>
   </body>
</html>

