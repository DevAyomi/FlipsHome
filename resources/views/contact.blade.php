<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Flips~Home Contact</title>

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
	  	<link rel="shortcut icon" href="favicon.png">
	  	
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
				<div class="sub-header sub-header-1 sub-header-contact fake-position">
					<div class="sub-header-content">
						<h2 class="text-cap white-text">Contact Us</h2>
						<ol class="breadcrumb breadcrumb-arc text-cap">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li class="active">Contact Us</li>
						</ol>
					</div>
				</div>
			</section>
			<!-- End Section Sub Header -->
			

			<!-- Section form contact -->
		    <section class="padding padding-top-20">
		    	<div class="container">
		    		<div class="row">
		    			<div class="contact-warp">
		    				<div class="col-md-12 ">
		    					<div class="left-contact contact-form-1-cols">
		    						<h3 class="text-cap"> Send Us a Message</h3>
		    						<div>
		    							<div id="res"></div>
		    						</div>
		    						<br>
		          					<form class="form-inline form-contact-arc" id="contact-frm" name="contact" method="post" action="{{ route('contact-frm') }}">
		          						<input type="hidden" name="_token" id="token" value=" {{ @csrf_token() }} ">
		            					<div class="row">
		        							  <div class="form-group col-md-4 ">
		        							    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
		        							  </div>
		        							  <div class="form-group col-md-4">
		        							    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
		        							  </div>
		        							  <div class="form-group col-md-4">
		        							    <input type="text" class="form-control" name="desription" id="description" placeholder="Desription" >
		        							  </div>
		      						    </div>
		      						    <div class="input-content padding-top-20">
		        						  	<div class="form-group form-textarea">
		        					  			<textarea id="message" class="form-control" name="message" rows="6" placeholder="Your Messages" ></textarea>
		        						  	</div>
		        						  </div>
		                      			<button  class="ot-btn btn-main-color btn-long text-cap btn-submit">Send Mail</button>
		      					 	</form> <!-- End Form -->
		    					</div> <!-- End col -->
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    </section>
		    <!-- End Section -->

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
    <!-- Initializing Google Maps -->
    <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>  
	<script src="{{ asset('backend/js/plugins/maplace.js') }}"></script>
	<!-- PreLoad
    ================================================== --> 
    <script type="text/javascript" src="js/plugins/royal_preloader.min.js"></script>
	<script type="text/javascript">
	(function($) { "use strict";
	            Royal_Preloader.config({
	                mode:           'logo', // 'number', "text" or "logo"
	                logo:           'images/Header/logo.png',
	                timeout:       1,
	                showInfo:       false,
	                opacity:        1,
	                background:     ['#FFFFFF']
	            });
	})(jQuery);
	</script>

	<script>
		$(document).ready(function(){
			$("#contact-frm").submit(function(e){
				e.preventDefault();
				let url = $(this).attr('action');
				console.log("Working Properly")
				
				$.post(url, {
					'_token': $('#token').val(),
					name: $('#name').val(),
					email: $('#email').val(),
					description: $('#description').val(),
					message: $('#message').val(),
				},
				 function(response){
					if(response.code == 400){
						let error = '<span class="alert alert-danger pb-3">'+response.msg+'</span>';
						$("#res").html(error);
					}
				})
			});
		});
	</script>

 	<!-- Global Js
    ================================================== --> 
    <script src="{{ asset('backend/js/plugins/custom.js') }}"></script>
    <script type="text/javascript">
    	
	var LocsA = [
    {
        lat: 37.774509,
        lon: -122.411727,
        title: 'San Francisco',
       	html: [ 
        	'<h3>We in  San Francisco</h3>',
        	'<p>24/7 Support</p>'
        ].join(''),
        icon: 'images/Contact/cd-icon-location.png',
        animation: google.maps.Animation.DROP,
        zoom:10
    },
    {
        lat: 34.298450, 
        lon: -111.714435,
        title: 'Arizona',
        html: '<h3>We in Arizona</h3>',
        icon: 'images/Contact/cd-icon-location.png',
        show_infowindow: true,
        animation: google.maps.Animation.DROP,
        zoom:4
    },
    {
        lat: 35.775319, 
        lon: -79.708533,
        title: 'North Carolina',
        html: [
            '<h3>We in North Carolina</h3>',
            '<p>We Are Architect</p>'
        ].join(''),
        icon: 'images/Contact/cd-icon-location.png',
        animation: google.maps.Animation.DROP,
        zoom:4
    },
    {
        lat: 39.952644,
        lon: -75.165247,
        title: 'Philadelphia',
        html: [
            '<h3>We in Philadelphia</h3>',
            '<p> 4th floor, 129 Hudson St, Philadelphia</p>'
        ].join(''),
        icon: 'images/Contact/cd-icon-location.png',
        animation: google.maps.Animation.DROP,
        zoom:8
    }
];



new Maplace({
    locations: LocsA,
    map_div: '#gmap-menu',
    controls_type: 'list',
    controls_on_map: false,
    map_options: {
	scrollwheel: false
	},
    start:1,
    styles: {
        'Night': [{
            featureType: 'all',
            stylers: [
                { invert_lightness: 'true' }
            ]
        }],
        'Greyscale': [{
            featureType: 'all',
            stylers: [
                { saturation: -100 },
                { gamma: 0.50 }
            ]
        }],
        
        "Ultra Light": [
		    {
		        "featureType": "landscape",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 65
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "poi",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 51
		            },
		            {
		                "visibility": "simplified"
		            }
		        ]
		    },
		    {
		        "featureType": "road.highway",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "visibility": "simplified"
		            }
		        ]
		    },
		    {
		        "featureType": "road.arterial",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 30
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "road.local",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "lightness": 40
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "transit",
		        "stylers": [
		            {
		                "saturation": -100
		            },
		            {
		                "visibility": "simplified"
		            }
		        ]
		    },
		    {
		        "featureType": "administrative.province",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "labels",
		        "stylers": [
		            {
		                "visibility": "on"
		            },
		            {
		                "lightness": -25
		            },
		            {
		                "saturation": -100
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "hue": "#ffff00"
		            },
		            {
		                "lightness": -25
		            },
		            {
		                "saturation": -97
		            }
		        ]
		    }
		],
    }
}).Load();
    </script>
	</body>
</html>