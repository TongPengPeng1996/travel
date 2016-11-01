<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dekorate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="/Public/css/style3.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="/Public/css/chocolat.css" type="text/css" media="screen">
<script src="/Public/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/Public/js/move-top.js"></script>
<script type="text/javascript" src="/Public/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

<!-- Add fancyBox main JS and CSS files -->
		<script src="/Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="/Public/css/magnific-popup3.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
</head>
<body>
<!--start-home-->
		<div class="banner" id="home">
		    <div class="container">
			   <div class="top-strip"> 
			   <p class=" phone"><i class="glyphicon glyphicon-phone"></i> 656 2068 54892</p>
				 <div class="search-box">
					    <div class="b-search">
								<form>
										<input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}">
										<input type="submit" value="">
								</form>
							</div>
						</div>
					<div class="clearfix"></div>
				</div>
			 <div class="header-top">
					<div class="logo">
						<a href="index.html"><h1>Dekorate</h1></a>
					</div>
					<!--top-nav-->
				<span class="menu"> </span>
				<div class="top-menu">
				<nav class="cl-effect-21">
					<ul>
						<li><a class="active" href="index.html">Home</a></li>
						<li><a class="scroll" href="#about">About</a></li>
						<li><a class="scroll" href="#service">Services</a></li>
						<li><a class="scroll" href="#team">Team</a></li>
						<li><a class="scroll" href="#news">News</a></li>
						<li><a class="scroll" href="#gallery">Gallery</a></li>
						<li><a class="scroll" href="#contact">Contact</a></li>
					</ul>
				</nav>		
				</div>
				<!-- script-for-menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!--script-for-menu-->
		   </div>
		<div class="banner-slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider4">
					    <li>
						  <div class="banner-img">
						     <img src="/Public/images/1.jpg" class="img-responsive" alt="" />
						  </div>
						    <h4> We Design Interior Projects</h4>
						   <div class="banner-info">
							      <h3>Let Your Home</h3>
								  <p>Be unique and Stylish</p>
							  </div>
						</li>
						<li>
						  <div class="banner-img">
						    <img src="/Public/images/2.jpg" class="img-responsive" alt="" />
						  </div>
						   <h4> We Design Interior Projects</h4>
						   <div class="banner-info">
							      <h3>Modern Sofa</h3>
								   <p>Highest quality</p>
						   </div>
					  </li>
					</ul>
			  </div>
	    </div>
		<!--banner Slider starts Here-->
	  	<script src="/Public/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:false,
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
			  </script>
		</div>
	</div>
<!--/welcome-->
	<div class="about-section" id="about">
		<div class="container">
		      <h3 class="tittle">About Us</h3>
			  <div class="ab-top">
				<div class="col-md-6 about-top">
					<h2>Hello! We’are Decorate</h2>
					<p>Earlier this year we gave ourselves a challenge: to re-imagine the traditional approach to packaging coffee and create something that we could share with our clients and friends - and so, Wishbone Brew was born.</p>
					<p>Cu tibique omnesque platonem sea. Cu assum oportere vix, exerci definiebas vel id. Duo suas ocurreret imperdiet ad. Eum in porro scripta. Mea an ceteros fierent, aliquid propriae expetendis et duo. Mazim dictas legendos no usu, in debitis omittantur sea. Ei eos reque partem.</p>
				</div>
				<div class="col-md-6 about-img">
			     <iframe src="https://player.vimeo.com/video/52866630?color=f2dc5a&amp;title=0&amp;byline=0&amp;portrait=0"></iframe>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
   <!--//about-->
   <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
   <!--services-->
		  <div class="top-places" id="service">
		     <div class="container">
			     <h3 class="tittle two">Services</h3>
			    <div class="tip-main">
			      <div class="col-md-4 top-grid">
					 <i class="icon glyphicon glyphicon-tint"></i>
					 <h4 class="ser">We’re Professional</h4>
					 <p class="ser">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac tempus eros, non tempus massa. Vivamus ut nisl mauris.</p>
				  </div>		
				    <div class="col-md-4 top-grid">
					  <i class="icon glyphicon glyphicon-thumbs-up"></i>
					 	<h4 class="ser">We’re Passionate</h4>
						 <p class="ser">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac tempus eros, non tempus massa. Vivamus ut nisl mauris.</p>
				  </div>	
				   <div class="col-md-4 top-grid">
				           <i class="icon glyphicon glyphicon-pushpin"></i>
					 	 <h4 class="ser">We’re Friendly</h4>
						  <p class="ser">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac tempus eros, non tempus massa. Vivamus ut nisl mauris. </p>
				  </div>	
					<div class="clearfix"> </div>				
				</div>
			</div>
	     </div>

   <!--team-->
	<div class="staff" id="team">
      <div class="container_wrap">
        <div class="col-md-3 staff1">
        	<h3 class="tittle team">Team</h3>
        	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
            <p class="staff_desc">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim</p> 
        </div>
        <div class="col-md-3 staff2">
        	<div class="view view-fifth">
                <div class="mask1"><img src="/Public/images/t1.jpg" alt="image" class="img-responsive zoom-img" /></div>
                    <div class="mask">
                       <a class="popup-with-zoom-anim" href="#small-dialog1"> <div class="info"><i class="glyphicon glyphicon-zoom-in"></i></div></a>
		                  <div id="small-dialog1" class="mfp-hide">
							   <div class="pop_up2">
							   	  <img src="/Public/images/t1.jpg" class="img-responsive" alt=""/>
								     <h3>About</h3>
							   	  <p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
							   </div>
							 </div>
					</div>
        	 <h3><a href="#">John</a></h3>
        	      <p>Designer</p>
        			<ul class="s_social">
						<li><a href=""> <i class="fb1"> </i> </a></li>
						<li><a href=""><i class="tw1"> </i> </a></li>
					    <li><a href=""><i class="linked1"> </i> </a></li>
						<li><a href=""><i class="google1"> </i> </a></li>
		 			</ul>
          </div>
        </div>
        <div class="col-md-3 staff2">
        	<div class="view view-fifth">
                <div class="mask1"><img src="/Public/images/t2.jpg" alt="image" class="img-responsive zoom-img" /></div>
                    <div class="mask">
                       <a class="popup-with-zoom-anim" href="#small-dialog2"> <div class="info"><i class="glyphicon glyphicon-zoom-in"></i></div></a>
		                  <div id="small-dialog2" class="mfp-hide">
							   <div class="pop_up2">
							   	  <img src="/Public/images/t2.jpg" class="img-responsive" alt=""/>
								     <h3>About</h3>
							   	   <p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
							   </div>
						  </div>
					</div>
        	  <h3><a href="#">Jessi</a></h3>
        	      <p>Designer</p>
        			<ul class="s_social">
						<li><a href=""> <i class="fb1"> </i> </a></li>
						<li><a href=""><i class="tw1"> </i> </a></li>
					    <li><a href=""><i class="linked1"> </i> </a></li>
						<li><a href=""><i class="google1"> </i> </a></li>
		 			</ul>
          </div>
        </div>
        <div class="col-md-3 staff2">
        	<div class="view view-fifth">
                <div class="mask1"><img src="/Public/images/t3.jpg" alt="image" class="img-responsive zoom-img" /></div>
                    <div class="mask">
                       <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><i class="glyphicon glyphicon-zoom-in"></i></div></a>
		                  <div id="small-dialog3" class="mfp-hide">
							   <div class="pop_up2">
							   	  <img src="/Public/images/t3.jpg" class="img-responsive" alt=""/>
								   <h3>About</h3>
							   	   <p class="popup_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </p>
							   </div>
						  </div>
					</div>
        	       <h3><a href="#">Joseph</a></h3>
        	      <p>Designer</p>
        			<ul class="s_social">
						<li><a href=""> <i class="fb1"> </i> </a></li>
						<li><a href=""><i class="tw1"> </i> </a></li>
					    <li><a href=""><i class="linked1"> </i> </a></li>
						<li><a href=""><i class="google1"> </i> </a></li>
		 			</ul>
             </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
	 <!--//team-->
    <div class="news" id="news">
    	 <div class="col-md-8 news_right">
	    	<div class="col_1_of_middle span_1_of_middle">
		 	   <h3><a href="#">Duis autem vel eum iriure dolor in hendrerit</a></h3>
		 	   <p class="date"><time datetime="2014-01-01" title="date">25.08.2015</time></p>
               <div class="mask1"><img src="/Public/images/n1.jpg" alt="image" class="img-responsive zoom-img" /></div>
               <p class="news_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
               <a href="#" class="btn1">read more</a>
               <div class="clearfix"></div>
            </div>
		 	<div class="col_1_of_middle span_1_of_middle">
		 	
		 	   <h3><a href="#">Ut wisi enim ad minim veniam, quis nostrud </a></h3>
		 	   <p class="date"><time datetime="2014-01-01" title="date">30.08.2015</time></p>
               <div class="mask1"><img src="/Public/images/n2.jpg" alt="image" class="img-responsive zoom-img" /></div>
               <p class="news_desc">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
               <a href="#" class="btn1">read more</a>
               <div class="clearfix"></div>
            </div>
			<div class="clearfix"></div>
		 </div>
		 <div class="col-md-4 news_left">
    		<h3 class="tittle new">News</h3>
    		<div class="clearfix"></div>
    	</div>
		 <div class="clearfix"></div>
	</div>
	<!--gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3 class="tittle">Gallery</h3>
			<div class="sap_tabs">			
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item"><span>All</span></li>
						<li class="resp-tab-item"><span>Category1</span></li>
						<li class="resp-tab-item"><span>Category2</span></li>
						<li class="resp-tab-item"><span>Category3</span></li>					
					</ul>	
					<div class="clearfix"> </div>	
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 img-top ">
								   <a href="/Public/images/g1.jpg">
									<img src="/Public/images/g1.jpg" class="img-responsive" alt="">
										<div class="link-top">
										</div>
								   </a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g2.jpg">
										<img src="/Public/images/g2.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g3.jpg">
										<img src="/Public/images/g3.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
											<i class="link"> </i>
										</div>
									</a>
								</div>
							</div>
							<div class="tab_img">
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g5.jpg">
										<img src="/Public/images/g5.jpg" class="img-responsive" alt="">
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g6.jpg">
										<img src="/Public/images/g6.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g1.jpg">
										<img src="/Public/images/g7.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								
							</div>	
							<div class="tab_img">
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g4.jpg">
										<img src="/Public/images/g4.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g4.jpg">
										<img src="/Public/images/g4.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g2.jpg" class="thickbox">
										<img src="/Public/images/g2.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">								
							<div class="tab_img">
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g7.jpg">
										<img src="/Public/images/g7.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g1.jpg">
										<img src="/Public/images/g1.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g2.jpg">
										<img src="/Public/images/g2.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>						
								<div class="clearfix"> </div>
							</div>																					 	        					 
						</div>
						<div class="tab-1 resp-tab-content">								
							<div class="tab_img">
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g1.jpg">
										<img src="/Public/images/g1.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g3.jpg">
										<img src="/Public/images/g3.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g2.jpg">
										<img src="/Public/images/g2.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>	
							<div class="tab_img">
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g1.jpg">
										<img src="/Public/images/g1.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g4.jpg">
										<img src="/Public/images/g4.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>							
								<div class="clearfix"> </div>
							</div>	        					 
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g6.jpg">
										<img src="/Public/images/g6.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g7.jpg">
										<img src="/Public/images/g7.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g5.jpg">
										<img src="/Public/images/g5.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab_img">
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g3.jpg">
										<img src="/Public/images/g3.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>
								<div class="col-md-4 img-top ">
									<a href="/Public/images/g1.jpg">
										<img src="/Public/images/g1.jpg" class="img-responsive" alt=""/>
										<div class="link-top">
										</div>
									</a>
								</div>							
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>	
					</div>		
				</div>
			</div>
		</div>
	</div>
	<!--//gallery-->
	<script src="/Public/js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
					
	</script>
	<!--script-->
	<script src="/Public/js/jquery.chocolat.js"></script>		
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
					$('.img-top a').Chocolat({overlayColor:'#000',leftImg:'images/leftw.gif',rightImg:'images/rightw.gif',closeImg:'images/closew.gif'});
				});
		</script>
<div class="testimonials" id="test">	
	  <div class="container">
	   <h3 class="tittle">Testimonials</h3>
		<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="testi-text">
								<div class="testi-img">
									<img src="/Public/images/client2.jpg" alt=""/>
								</div>
								<h4>John</h4>
								<p>Duis vitae feugiat lorem. Mauris eget ipsum sapien. Praesent euismod nec risus id tempor In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt</p>								
							</div>
						</li>
						<li>
							<div class="testi-text">
								<div class="testi-img">
									<img src="/Public/images/client.jpg" alt=""/>
								</div>
								<h4>Joseph</h4>
								<p>Vitae duis  feugiat lorem. Mauris eget ipsum sapien. Praesent euismod nec risus id tempor In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt</p>
							</div>
						</li>
						<li>
							<div class="testi-text">
								<div class="testi-img">
									<img src="/Public/images/client2.jpg" alt=""/>
								</div>
					            <h4>John</h4>
								<p>Praesent vitae feugiat lorem. Mauris eget ipsum sapien.Duis euismod nec risus id tempor In sit amet sapien eros. Integer in tincidunt velit. Ut in tincidunt</p>
							</div>
						</li>
					</ul>
				</div>
		</div>
	</div>
	<!--banner-text Slider starts Here-->
		<script src="/Public/js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
				$(function () {
				// Slideshow 3
					$("#slider3").responsiveSlides({
					auto: true,
					pager:true,
					nav:false,
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

<!--my-skill-->
  <div class="my-skills text-center" id="skill">
	<div class="container">
		<h3 class="tittle two cap">Interiors Capabilities</h3>
		<div class="skill-grids">
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-1"></div>
						<p>CREATIVE</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-2"></div>
						<p>DESIGN</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-3"></div>
						<p>DEVELOPER</p>
					</div>
					<div class="col-md-3 skills-grid text-center">
						<div class="circle" id="circles-4"></div>
						<p>SOLUTION</p>
					</div>
					<div class="clearfix"> </div>
				 <script type="text/javascript" src="/Public/js/circles.js"></script>
					         <script>
								var colors = [
										['#524B46', '#ffffff'], ['#524B46', '#ffffff'], ['#524B46', '#ffffff'], ['#524B46', '#ffffff'], ['#524B46', '#ffffff'], ['#524B46', '#ffffff']
									];
								for (var i = 1; i <= 7; i++) {
									var child = document.getElementById('circles-' + i),
										percentage = 30 + (i * 10);
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[i - 1]
									});
								}
						
				</script>
		</div>
	</div>	
</div>
<!--//my-skill-->
	<!--contact-->
  <div class="contact" id="contact">
	<div class="col-md-6 contact_left">
		<form>
				<input type="text" class="textbox" value="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
				<input type="text" class="textbox" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
				<input type="text" class="textbox" value="Subject" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}">
				<textarea onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
				<div class="contact_btn">
			        <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Send"></label>
			    </div>
		</form>	   
	</div>
	<div class="col-md-6 contact_right">
		<div class="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
			 </div>
		<ul class="address">
			<li class="address_icon glyphicon glyphicon-map-marker"></li>
			<li class="add_right">
				<p>Lorem ipsum dolor,Jasmin Dr 40 Fe 72. New York</p>
				<p>Phone : 91-001-2010102</p>
				<p><a href="mailto:info@example.com">mail@example.com</a></p>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
	<!--//contact-->
	<div class="copy">
		<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
	</div>
	<!--start-smoth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>