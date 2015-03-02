<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
            $(function(){
                $('#menu1').slicknav({
                    prependTo:'#navigation-menu1'
                });
            });
            $(function(){
                $('#menu2').slicknav({
                    prependTo:'#navigation-menu2'
                });
            });
            $(function(){
                $('#menu3').slicknav({
                    prependTo:'#navigation-menu3'
                });
            });
            $(function(){
                $('#menu4').slicknav({
                    prependTo:'#navigation-menu4'
                });
            });
            $(function(){
                $('#menu5').slicknav({
                    prependTo:'#navigation-menu5'
                });
            });
            $(function(){
                $('#menu6').slicknav({
                    prependTo:'#navigation-menu6'
                });
            });
            $(function(){
                $('#menu7').slicknav({
                    prependTo:'#navigation-menu7'
                });
            });
            $(function(){
                $('#menu8').slicknav({
                    prependTo:'#navigation-menu8'
                });
            });
            $(function(){
                $('#menu9').slicknav({
                    prependTo:'#navigation-menu9'
                });
            });
            $(function(){
                $('#menu10').slicknav({
                    prependTo:'#navigation-menu10'
                });
            });
            $(function(){
                $('#menu11').slicknav({
                    prependTo:'#navigation-menu11'
                });
            });
            $(function(){
                $('#menu12').slicknav({
                    prependTo:'#navigation-menu12'
                });
            });
            $(function(){
                $('#menu13').slicknav({
                    prependTo:'#navigation-menu13'
                });
            });
            $(function(){
                $('#menu14').slicknav({
                    prependTo:'#navigation-menu14'
                });
            });
            $(function(){
                $('#menu15').slicknav({
                    prependTo:'#navigation-menu15'
                });
            });


			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Mobile Site<a href="http://m.doggiedepot.com" rel="external">  Clasic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider1.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider2.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider3.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/slider4.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider5.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				
					
						<div data-role="collapsible-set">	

							<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
							   <h3>About US</h3>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#our" data-transition="<?php echo $transitionefect ?>">Our Mission</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#bus" data-transition="<?php echo $transitionefect ?>">Bussines hours</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#build" data-transition="<?php echo $transitionefect ?>">Building Profile</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a>

							</div>
                            <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                <h3>Daycare</h3>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#enr" data-transition="<?php echo $transitionefect ?>">Enrollment</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#faqs" data-transition="<?php echo $transitionefect ?>">Faqs</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#rates" data-transition="<?php echo $transitionefect ?>">Rates</a>
                            </div>
                            <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                <h3>Training</h3>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#services" data-transition="<?php echo $transitionefect ?>">Services</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#enroll" data-transition="<?php echo $transitionefect ?>">Enrollment</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#meet" data-transition="<?php echo $transitionefect ?>">Meet our trainer</a>
                            </div>
                            <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                <h3>Photos</h3>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#dog" data-transition="<?php echo $transitionefect ?>">Dog of the month</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#ph" data-transition="<?php echo $transitionefect ?>">Photo gallery</a>

                            </div>
						</div>						
					
				
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#groming" data-transition="<?php echo $transitionefect ?>">Grooming</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>				   
		  </div>
		  
		 
		</div>
		<!-- about ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="about" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu" class="naziv">
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
							<li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
							<li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
			        <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>
					

				</div>

			</div>	
				
				
		</div>
		

        <!-- daycare///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="daycare" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu1">
                        <ul id="menu1" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- training///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="training" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu2">
                        <ul id="menu2" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>
        <!-- boarding///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="boarding" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu3">
                        <ul id="menu3" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>
        <!--groming///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="groming" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu4">
                        <ul id="menu4" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>
        <!--photos///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="photos" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu5">
                        <ul id="menu5" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>
        <!-- our///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="our" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu6">
                        <ul id="menu6" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- bus///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="bus" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu7">
                        <ul id="menu7" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- build///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="build" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu8">
                        <ul id="menu8" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- enr///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="enr" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu9">
                        <ul id="menu9" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- faqs///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="faqs" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-men10">
                        <ul id="menu10" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- rates///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="rates" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu11">
                        <ul id="menu11" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- services///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="services" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu12">
                        <ul id="menu12" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- enroll///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="enroll" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu13">
                        <ul id="menu13" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- meet///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="meet" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu14">
                        <ul id="menu14" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- dog///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="dog" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu15">
                        <ul id="menu15" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>

        <!-- ph///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="ph" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu16">
                        <ul id="menu16" class="naziv">
                            <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#daycare" data-transition="<?php echo $transitionefect ?>">Daycare</a></li>
                            <li><a href="#training" data-transition="<?php echo $transitionefect ?>">Training</a></li>
                            <li><a href="#boarding" data-transition="<?php echo $transitionefect ?>">Boarding</a></li>
                            <li><a href="#groming" data-transition="<?php echo $transitionefect ?>">Groming</a></li>
                            <li><a href="#photos" data-transition="<?php echo $transitionefect ?>">Photos</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website</p>
                    <p>Please contact our official Sales representative for <strong>Full Functional Version</strong></p>


                </div>

            </div>


        </div>





        <!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>

<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>
					
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
