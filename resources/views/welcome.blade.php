<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flips~Home</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
        <!-- Font -->
        <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/css/elegant-font.css') }}">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/revolution/css/settings.css') }}">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/revolution/css/layers.css') }}">
        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/revolution/css/navigation.css') }}">
        <!-- OWL CAROUSEL
        ================================================== --> 
        <link rel="stylesheet" href="{{ asset('backend/css/owl.carousel.css') }}">
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
        <link rel="shortcut icon" href="favicon.png">
    </head>
    <body>
      

        <!--Add Mobile nav here--->
        @include('components.mobile')
        <!-- End Mobile Menu -->

        
        <!-- End Modal Search-->
        <div id="page">
            <div id="skrollr-body">

               <!--Header Here--->
               @include('components.header')
                <!-- End  Header -->

                <section>
                    <div class="rev_slider_wrapper">            
                    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                    <div id="slider-h1" class="rev_slider slider-home-1" data-version="5.0">
                        <ul>    
                            <!-- SLIDE  -->
                            <li data-transition="parallaxtoright" data-masterspeed="1000" >
                                
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('backend/images/Slider/1.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">                           

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption heading-2 white-text"                            
                                     data-x="center" 
                                     data-y="center"  data-voffset="-80"                                     
                                     data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" 
                                     data-transform_out="y:-80px;opacity:0;s:300;" 
                                
                                     data-start="1000"                                          
                                    >Flips~Home Interior
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption heading-1 white-text text-cap "                      
                                     data-x="center" 
                                     data-y="center"                    
                                     data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" 
                                     data-transform_out="y:80px;opacity:0;s:300;" 
                                     data-start="1400" 
                                    >Company
                                </div>
                                
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption btn-1"                           
                                     data-x="center"  data-hoffset="-85"
                                     data-y="center"  data-voffset="100" 
                                     data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" 
                                    data-transform_out="y:200px;opacity:0;s:300;" 
                                     data-start="1600" 
                                    >   
                                    <a href="portfolioGrid_1.html" class="ot-btn btn-main-color text-cap ">Our Projects</a>  
                                    
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption btn-2"                           
                                     data-x="center"  data-hoffset="85"
                                     data-y="center"  data-voffset="100" 
                                     data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" 
                                     data-transform_out="y:200px;opacity:0;s:300;" 

                                     data-start="1600" 
                                    >   
                                    <a href="contact.html" class="ot-btn btn-sub-color text-cap  ">Let's Deal</a> 
                                </div>
                                
                            </li>
                            <li data-transition="parallaxtoright" data-masterspeed="1000" >
                                
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('backend/images/Slider/2.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">                           

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption heading-2 white-text"                            
                                     data-x="center" 
                                     data-y="center"  data-voffset="-80"                                     
                                     data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" 
                                     data-transform_out="y:-80px;opacity:0;s:300;" 
                                
                                     data-start="1000"                                          
                                    >Home of beauty and
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption heading-1 white-text text-cap "                      
                                     data-x="center" 
                                     data-y="center"                    
                                     data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" 
                                     data-transform_out="y:80px;opacity:0;s:300;" 
                                     data-start="1400" 
                                    >Passion
                                </div>
                                
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption btn-1"                           
                                     data-x="center"  data-hoffset="-85"
                                     data-y="center"  data-voffset="100" 
                                     data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" 
                                    data-transform_out="y:200px;opacity:0;s:300;" 
                                     data-start="1600" 
                                    >   
                                    <a href="portfolioGrid_1.html" class="ot-btn btn-main-color text-cap ">Our Projects</a>  
                                    
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption btn-2"                           
                                     data-x="center"  data-hoffset="85"
                                     data-y="center"  data-voffset="100" 
                                     data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" 
                                     data-transform_out="y:200px;opacity:0;s:300;" 

                                     data-start="1600" 
                                    >   
                                    <a href="{{ url('/contact') }}" class="ot-btn btn-sub-color text-cap  ">Get a Quote</a> 
                                </div>
                                
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition="parallaxtoright" data-masterspeed="1000" >
                                
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('backend/images/Slider/3.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">                           

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption heading-2 white-text"                            
                                     data-x="center" 
                                     data-y="center"  data-voffset="-80"                                     
                                     data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" 
                                     data-transform_out="y:-80px;opacity:0;s:300;" 
                                
                                     data-start="1000"                                          
                                    >Creativty is our power
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption heading-1 white-text text-cap "                      
                                     data-x="center" 
                                     data-y="center"                    
                                     data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" 
                                     data-transform_out="y:80px;opacity:0;s:300;" 
                                     data-start="1400" 
                                    >Design Awards
                                </div>
                                
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption btn-1"                           
                                     data-x="center"  data-hoffset="-85"
                                     data-y="center"  data-voffset="100" 
                                     data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" 
                                    data-transform_out="y:200px;opacity:0;s:300;" 
                                     data-start="1600" 
                                    >   
                                    <a href="{{ url('/gallery') }}" class="ot-btn btn-main-color text-cap ">Our Projects</a>  
                                    
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption btn-2"                           
                                     data-x="center"  data-hoffset="85"
                                     data-y="center"  data-voffset="100" 
                                     data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" 
                                     data-transform_out="y:200px;opacity:0;s:300;" 

                                     data-start="1600" 
                                    >   
                                    <a href="{{ url('/contact') }}" class="ot-btn btn-sub-color text-cap  ">Get a Quote</a>  
                                </div>
                                
                            </li>
                
                        </ul>           
                    </div><!-- END REVOLUTION SLIDER -->
                    </div><!-- END REVOLUTION SLIDER WRAPPER -->    
                </section>
                <!-- End Section Slider -->
        
                <section class="padding">
                    <div class="container">
                    <div class="row">
                        <div class="title-block">
                            <h2 class="title text-cap" >What we do</h2>
                            <div class="divider divider-1">
                                <svg class="svg-triangle-icon-container">
                                  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                                </svg>
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="block-img-right">
                                    
                                    <div class="img-block"><img src="{{ asset('backend/images/Services/1.jpg') }}" class="img-responsive" alt="Image"></div>
                                    <div class="text-box">
                                        <h4 class="text-cap"><mark>Residential</mark> design</h4>
                                        <p>
                                            Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id diam at
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-img-left">
                                    <div class="img-block"><img src="{{ asset('backend/images/Services/2.jpg') }}" class="img-responsive" alt="Image"></div>
                                    <div class="text-box">
                                        <h4 class="text-cap"><mark>Ecommercial</mark> design</h4>
                                        <p>
                                            Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id diam at
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-img-right mgb0">
                                    <div class="img-block"><img src="{{ asset('backend/images/Services/3.jpg') }}" class="img-responsive" alt="Image"></div>
                                    <div class="text-box">
                                        <h4 class="text-cap"><mark>Office</mark> design</h4>
                                        <p>
                                            Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id diam at
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block-img-left mgb0">
                                    <div class="img-block"><img src="{{ asset('backend/images/Services/4.jpg') }}" class="img-responsive" alt="Image"></div>
                                    <div class="text-box">
                                        <h4 class="text-cap"><mark>Hospital</mark> design</h4>
                                        <p>
                                            Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id diam at
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
                <!-- End Section What we do -->

                <section>
                    <div class="promotion-box">
                        <figure class="effect-layla">
                            <img src="{{ asset('backend/images/Promotion/1.jpg') }}" alt="img06"/>
                            <figcaption>
                                <h3 class="text-cap white-text">Green Design</h3>
                                <p>Inspired by nature and created comfortable space for your life</p>
                                <a href="servicesList.html" class="ot-btn btn-main-color text-cap">View Service</a>
                            </figcaption>           
                        </figure>
                        <figure class="effect-layla">
                            <img src="{{ asset('backend/images/Promotion/2.jpg') }}" alt="img06"/>
                            <figcaption>
                                <h3 class="text-cap white-text">we love space</h3>
                                <p>Inspired by nature and created comfortable space for your life</p>
                                <a href="portfolioGrid_1.html" class="ot-btn btn-main-color text-cap">Our Project</a>
                            </figcaption>           
                        </figure>
                        <figure class="effect-layla">
                            <img src="{{ asset('backend/images/Promotion/3.jpg') }}" alt="img06"/>
                            <figcaption>
                                <h3 class="text-cap white-text">Expert interior</h3>
                                <p>Inspired by nature and created comfortable space for your life</p>
                                <a href="shop_cart.html" class="ot-btn btn-main-color text-cap">View Shop</a>
                            </figcaption>           
                        </figure>
                    </div>
                </section>
                <!-- End Section Promotion -->

                <section class="padding clearfix fixbug-inline-block ">
                    <div class="container">
                    <div class="row">
                        <div class="title-block">
                            <div class="title-block">
                                <h2 class="title text-cap">Why Choose Us ?</h2>
                                <div class="divider divider-1">
                                    <svg class="svg-triangle-icon-container">
                                      <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="chooseus-container text-center">
                                <div class="chooseus-item">
                                    <h4 class="text-cap">Creative</h4>
                                    <div class="chooseus-canvas-item">
                                           <svg class="svg-hexagon">
                                                <polygon class="hexagon" points="285 100,285 250,155 325,25 250,25 100,155 25"></polygon>
                                            </svg>
                                            <!-- End Hexagon -->
                                            <svg class="svg-triangle-dotted"  >
                                              <polygon class="triangle-div" points="2 220,254 220,128 0"></polygon>
                                            </svg>
                                            <!-- End Triangle Dotted -->
                                            <div class="triangle-img-warp tri">
                                                <img src="{{ asset('backend/images/Whychooseus/1.jpg') }}" class="img-responsive" alt="Image">
                                            </div>
                                    </div>
                                </div>  

                                <!-- End -->                

                                <div class="chooseus-item">
                                    <a href="#"><h4 class="text-cap">Know - How</h4></a>
                                    <div class="chooseus-canvas-item">
                                           <svg class="svg-hexagon">
                                                <polygon class="hexagon" points="285 100,285 250,155 325,25 250,25 100,155 25"></polygon>
                                            </svg>
                                            <!-- End Hexagon -->
                                            <svg class="svg-triangle-dotted svg-tri-2"  >
                                              <polygon class="triangle-div" points="2 220,254 220,128 0"></polygon>
                                            </svg>
                                            <!-- End Triangle Dotted -->
                                            <div class="triangle-img-warp tri2">
                                                <img src="{{ asset('backend/images/Whychooseus/2.jpg') }}" class="img-responsive" alt="Image">
                                            </div>
                                    </div>
                                </div>

                                <!-- End -->

                                <div class="chooseus-item mgb0">
                                    <a href="#"><h4 class="text-cap">Devoted</h4></a>
                                    <div class="chooseus-canvas-item">
                                           <svg class="svg-hexagon">
                                                <polygon class="hexagon" points="285 100,285 250,155 325,25 250,25 100,155 25"></polygon>
                                            </svg>
                                            <!-- End Hexagon -->
                                            <svg class="svg-triangle-dotted svg-tri-3"  >
                                              <polygon class="triangle-div" points="2 220,254 220,128 0"></polygon>
                                            </svg>
                                            <!-- End Triangle Dotted -->
                                            <div class="triangle-img-warp tri3">
                                                <img src="{{ asset('backend/images/Whychooseus/3.jpg') }}" class="img-responsive" alt="Image">
                                            </div>
                                    </div>
                                </div>

                                 <!-- End -->

                                <div class="chooseus-item mgb0">
                                    <a href="#"><h4 class="text-cap">Caring</h4></a>
                                    <div class="chooseus-canvas-item">
                                           <svg class="svg-hexagon">
                                                <polygon class="hexagon" points="285 100,285 250,155 325,25 250,25 100,155 25"></polygon>
                                            </svg>
                                            <!-- End Hexagon -->
                                            <svg class="svg-triangle-dotted svg-tri-4"  >
                                              <polygon class="triangle-div" points="2 220,254 220,128 0"></polygon>
                                            </svg>
                                            <!-- End Triangle Dotted -->
                                            <div class="triangle-img-warp tri4">
                                                <img src="{{ asset('backend/images/Whychooseus/4.jpg') }}" class="img-responsive" alt="Image">
                                            </div>
                                    </div>
                                </div>
                        </div>                      
                    </div>
                    </div>
                </section>
                <!-- End Section Why Choose Us -->

                <section class="padding bg-grey padding-bottom-0">
                    <div class="title-block">
                        <h2 class="title text-cap">Lastest Projects</h2>
                        <div class="divider divider-1">
                            <svg class="svg-triangle-icon-container">
                              <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                            </svg>
                        </div>
                    </div>
                        <!-- End Title -->
                          <div class="lastest-project-warp clearfix">
                                <div class="projectFilter project-terms line-effect-2">
                                        <a href="#" data-filter="*" class="current text-cap"><h4>All Projects</h4></a>
                                        <a href="#" data-filter=".Residential" class="text-cap"><h4>Residential</h4></a>
                                        <a href="#" data-filter=".Ecommercial" class="text-cap"><h4>Ecommercial</h4></a>
                                        <a href="#" data-filter=".Office" class="text-cap"><h4>Office</h4></a>
                                        <a href="#" data-filter=".Hospital" class="text-cap"><h4>Hospital</h4></a>
                                </div> <!-- End Project Fillter -->

                                <div class="clearfix projectContainer">
                 
                                  <div class="element-item  Residential">
                                        
                                          <img src="{{ asset('backend/images/Project/1.jpg') }}" class="img-responsive" alt="Image">
                                        <div class="project-info">
                                            <a href="portfolioDetail.html"><h4 class="title-project text-cap text-cap">Dream House</h4></a>
                                            <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                        </div>
                                  </div>
                               
                                  <div class="element-item Residential ">
                                        
                                        <img src="{{ asset('backend/images/Project/2.jpg') }}" class="img-responsive" alt="Image">
                        
                                        <div class="project-info">
                                           <a href="portfolioDetail.html"><h4 class="title-project text-cap">Wood Wall City</h4></a>
                                            <a href="portfolioDetail.html" class="cateProject">Ecommercial</a>
                                      </div>
                                  </div>    
                               
                                  <div class="element-item Ecommercial">
                                        <a class="img-contain-isotope" href="portfolioDetail.html">
                                           <img src="{{ asset('backend/images/Project/3.jpg') }}" class="img-responsive" alt="Image">
                                           </a>
                                           <div class="project-info">
                                           <a href="portfolioDetail.html"><h4 class="title-project text-cap">Bathroom furniture</h4></a>
                                          <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                        </div>
                                  </div>
                                   
                                  <div class="element-item Ecommercial ">
                                        <a class="img-contain-isotope" href="portfolioDetail.html">
                                          <img src="{{ asset('backend/images/Project/4.jpg') }}" class="img-responsive" alt="Image">
                                          </a>
                                          <div class="project-info">
                                          <a href="portfolioDetail.html"><h4 class="title-project text-cap">Living room decor</h4></a>
                                              <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                        </div>
                                  </div>
                               
                                  <div class="element-item Office">
                                        <a class="img-contain-isotope" href="portfolioDetail.html">
                                         <img src="{{ asset('backend/images/Project/5.jpg') }}" class="img-responsive" alt="Image">
                                         </a>
                                         <div class="project-info">
                                         <a href="portfolioDetail.html"><h4 class="title-project text-cap">open Space House</h4></a>
                                              <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                        </div>
                                  </div>
                               
                                  <div class="element-item Office">
                                        <a class="img-contain-isotope" href="portfolioDetail.html">
                                          <img src="{{ asset('backend/images/Project/6.jpg') }}" class="img-responsive" alt="Image">
                                          </a>
                                          <div class="project-info">
                                          <a href="portfolioDetail.html"><h4 class="title-project text-cap">Sky Hotel</h4></a>
                                              <a href="portfolioDetail.html" class="cateProject">Ecommercial</a>
                                        </div>
                                  </div>
                               
                                  <div class="element-item Hospital ">
                                        <a class="img-contain-isotope" href="portfolioDetail.html">
                                           <img src="{{ asset('backend/images/Project/7.jpg') }}" class="img-responsive" alt="Image">
                                           </a>
                                           <div class="project-info">
                                           <a href="portfolioDetail.html"><h4 class="title-project text-cap">Ogrange Corporate</h4></a>
                                              <a href="portfolioDetail.html" class="cateProject">Office</a>
                                        </div>
                                  </div>    
                                   
                                  <div class="element-item Hospital">
                                        
                                          <img src="{{ asset('backend/images/Project/8.jpg') }}" class="img-responsive" alt="Image">
                                        <div class="project-info">
                                         <a href="portfolioDetail.html"><h4 class="title-project text-cap">Ocean view Building</h4></a>
                                              <a href="portfolioDetail.html" class="cateProject">Residential</a>
                                        </div>
                                  </div>
                                </div>  <!-- End project Container -->
                          </div> <!-- End  -->
                            <div class="overlay-arc">
                                <div class="layer-1">
                                    <a href="portfolioGrid_1.html" class="ot-btn btn-dark-color text-cap">View all project</a>
                                </div>
                            </div>
                </section>
                <!-- End Section Isotop Lastest Project -->

                <section class="padding bg-grey">
                    <div class="container">
                    <div class="row">
                        <div class="title-block">
                            <h2 class="title text-cap">Our Partners</h2>
                            <div class="divider divider-1">
                                <svg class="svg-triangle-icon-container">
                                  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                                </svg>
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="owl-partner-warp" >
                            <div class="customNavigation">
                                <a class="btn prev-partners"><i class="fa fa-angle-left"></i></a>
                                <a class="btn next-partners"><i class="fa fa-angle-right"></i></a>
                            </div><!-- End owl button -->

                            <div id="owl-partners" class="owl-carousel owl-theme owl-partners clearfix">
                                    <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/1.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/2.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div>
                                     <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/3.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div>
                                     <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/4.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div>
                                     <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/5.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/1.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/2.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div>
                                     <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/3.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div>
                                     <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/4.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div>
                                     <div class="item">
                                        <a href="#">
                                          <img src="{{ asset('backend/images/Partner/5.png') }}" class="img-responsive" alt="Image">
                                        </a>
                                    </div> 
                            </div>
                      </div><!-- End row partners -->
                    </div>
                    </div>
                </section>
                <!-- End Section Owl Partners -->

                <section class="padding bg-parallax section-dark-testimonials">
                    <div class="container">
                    <div class="row">
                        <div class="title-block">
                            <h2 class="title text-cap">What Our Client Says</h2>
                            <div class="divider divider-2">
                                <svg class="svg-triangle-icon-container">
                                  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                                </svg>
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="testimonial-warp testimonial-2-col">
                              <div class="customNavigation">
                                <a class="btn prev-testimonials-2-columns"><i class="fa fa-angle-left"></i></a>
                                <a class="btn next-testimonials-2-columns"><i class="fa fa-angle-right"></i></a>
                              </div>  
                              <div id="owl-testimonials-2-columns" class="owl-carousel owl-theme clearfix">
                              <div class="item item-testimonials text-left">
                                  <p class="quote-icon">“</p>
                                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                                  <div class="avatar-testimonials">
                                    <img src="{{ asset('backend/images/Testimonials/1.jpg') }}" class="img-responsive" alt="Image">
                                  </div>
                                  <h4 class="name-testimonials text-cap">Linda Campbell</h4>
                                  <span class="job-testimonials">CEO Finanace Theme Group</span>
                              </div><!-- end item -->
                              <div class="item item-testimonials text-left">
                                  <p class="quote-icon">“</p>
                                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                                  <div class="avatar-testimonials">
                                    <img src="{{ asset('backend/images/Testimonials/2.jpg') }}" class="img-responsive" alt="Image">
                                  </div>
                                  <h4 class="name-testimonials text-cap">John Walker</h4>
                                  <span class="job-testimonials">Photographer</span>
                              </div><!-- end item -->
                              <div class="item item-testimonials text-left">
                                  <p class="quote-icon">“</p>
                                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                                  <div class="avatar-testimonials">
                                    <img src="{{ asset('backend/images/Testimonials/3.jpg') }}" class="img-responsive" alt="Image">
                                  </div>
                                  <h4 class="name-testimonials text-cap">Cheryl Cruz</h4>
                                  <span class="job-testimonials">Marketing Manager</span>
                              </div><!-- end item -->
                              <div class="item item-testimonials text-left">
                                  <p class="quote-icon">“</p>
                                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                                  <div class="avatar-testimonials">
                                    <img src="{{ asset('backend/images/Testimonials/4.jpg') }}" class="img-responsive" alt="Image">
                                  </div>
                                  <h4 class="name-testimonials text-cap">James Smith</h4>
                                  <span class="job-testimonials">Senior Finance Manager</span>
                              </div><!-- end item -->
                              <div class="item item-testimonials text-left">
                                  <p class="quote-icon">“</p>
                                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                                  <div class="avatar-testimonials">
                                    <img src="{{ asset('backend/images/Testimonials/5.jpg') }}" class="img-responsive" alt="Image">
                                  </div>
                                  <h4 class="name-testimonials text-cap">Maria Garcia</h4>
                                  <span class="job-testimonials">Finance Director Theme Group</span>
                              </div><!-- end item -->
                              <div class="item item-testimonials text-left">
                                  <p class="quote-icon">“</p>
                                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                                  <div class="avatar-testimonials">
                                    <img src="{{ asset('backend/images/Testimonials/6.jpg') }}" class="img-responsive" alt="Image">
                                  </div>
                                  <h4 class="name-testimonials text-cap">Robert Johnson</h4>
                                  <span class="job-testimonials">Finance Assistant - PR Agency</span>
                              </div><!-- end item -->
                              </div>
                        </div>
                    </div>  
                    </div>
                </section>
                <!-- End Section Owl Testimonials -->

                <section class="padding ">
                    <div class="container">
                    <div class="row">
                        <div class="title-block">
                            <h2 class="title text-cap">Don't forget to sign up!</h2>
                            <div class="divider divider-1">
                                <svg class="svg-triangle-icon-container">
                                  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                                </svg>
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="form-subcribe">

                            <p class="text-center">Find out early about all upcoming promotions and new products releases with<br> our newsletter.</p>
                            <form  method="post">                        
                                <input class="newsletter-email input-text" placeholder="email@example.com" type="email">
                                <button class="ot-btn btn-main-color text-cap" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </section>
                <!-- End Section subcribe -->

                <footer class="footer-v1">
                    <div class="footer-left">
                        <a href="index.html">
                            <h4>FlipsHome</h4>
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
                            <li class="facebook active"><a href="#"><i class="fa fa-facebook"></i></a></li>
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
                    <p>Copyright © 2016 Designed by <a href="#">Devayomi</a>. All rights reserved.</p>
                </section>
            </div>
        </div>
        <!-- End page -->
       
        <a id="to-the-top"><i class="fa fa-angle-up"></i></a> 
        <!-- Back To Top -->


        <!-- SCRIPT -->
        <script src="{{ asset('backend/js/vendor/jquery.min.js')  }}"></script>
        <script src="{{ asset('backend/js/vendor/bootstrap.min.js')  }}"></script>
        <script src="{{ asset('backend/js/plugins/jquery.mCustomScrollbar.concat.min.js')  }}"></script>
        <script src="{{ asset('backend/js/plugins/wow.min.js')  }}"></script>
        <script type="text/javascript" src="{{ asset('backend/js/plugins/skrollr.min.js')  }}"></script>
        <!-- Switcher
        ================================================== -->
        <script src="switcher/demo.js"></script>
            
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="{{ asset('backend/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
            (Load Extensions only on Local File Systems !  
            The following part can be removed on Server for On Demand Loading) -->  
        <script type="text/javascript" src="{{ asset('backend/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('backend/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>   
        <!-- Intializing Slider-->
        <script type="text/javascript" src="{{ asset('backend/js/plugins/slider.js') }}"></script>

         <!-- Mobile Menu
        ================================================== --> 
         <script src="{{ asset('backend/js/plugins/jquery.mobile-menu.js') }}"></script>  

        <!-- Initializing the isotope
        ================================================== --> 
        <script src="{{ asset('backend/js/plugins/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugins/custom-isotope.js') }}"></script>
        <!-- Initializing Owl Carousel
        ================================================== -->
        <script src="{{ asset('backend/js/plugins/owl.carousel.js') }}"></script>
        <script src="{{ asset('backend/js/plugins/custom-owl.js') }}"></script>
        


        <!-- PreLoad
        ================================================== --> 
        <script type="text/javascript" src="{{ asset('backend/js/plugins/royal_preloader.min.js') }}"></script>
        <script type="text/javascript">
        (function($) { "use strict";
                    Royal_Preloader.config({
                        mode:           'logo',
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