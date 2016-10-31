<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/Public/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wandering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/Public/js/move-top.js"></script>
<script type="text/javascript" src="/Public/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--header start here-->
<div class="header-strip"> 

</div>
<div class="header">
	<div class="container">
		<div class="header-main">
			  <div class="logo">
			  	<h1><a href="index.html">Wandering</a></h1>
			  </div>
        </div>
	</div>
</div>			
<div class="navg-strip">
    <div class="container">
      <div class="navg-main">
		 <div class="top-nav">
		 	 <span class="menu"> <img src="/Public/images/icon.png" alt=""/></span>
			<ul class="res">
				<li><a href="/index.php/Home/Index/../index.html" class="active">主页</a></li>
				<li><a class="scroll" href="#about">关于我们</a></li>
				<li><a class="scroll" href="#services">服务</a></li>
				<li><a class="scroll" href="#gallery">图册</a></li>
				<li><a class="scroll" href="#contact">联系</a></li>
		
			</ul>
			<!--script-->
						<script>
							$("span.menu").click(function(){
								$("ul.res").slideToggle(500, function(){
								});
							});
					</script>		
		 </div>
		 <div class="header-right">
			<div class="social-icons">
				<ul>
				<li><a href="#"><span class="fa"> </span></a></li>
				<li><a href="#"><span class="tw"> </span></a></li>
				<li><a href="#"><span class="g"> </span></a></li>
				<li><a href="#"><span class="in"> </span></a></li>
				<li><a href="#"><span class="pin"> </span></a></li>
				<li><a href="#"><span class="you"> </span></a></li>
			</ul>
			</div>
			<div class="search-in" >
				<div class="search" >
					<form >
						<input type="text"  class="text">
						<input type="submit" value="SEARCH">
					</form>
					<div class="close-in"><img src="/Public/images/s-close.png" alt="" /></div>
				</div>
				<div class="right"><button> </button></div>
		   </div>
		   <script type="text/javascript">
				$('.search').hide();
				$('button').click(function (){
				$('.search').show();
				$('.text').focus();
				}
				);
				$('.close-in').click(function(){
				$('.search').hide();
				});
			</script>

		  <div class="clearfix"> </div>
		</div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<!--header end here-->
<!--banner start here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
			<h2>Lorem Ipsum is simply text</h2>
			<p>Lorem Ipsum is not simply random text. It has roots in a piece</p>
		</div>
	</div>
</div>
<!--banner end here-->
<!--about start here-->
<div class="about" id="about">
	<div class="container">
		<div class="about-main">
			<div class="about-bottom">
				<!-- 左开始 -->
				<div class="col-md-6 about-left">
					<h4><?php echo ($info["info_title"]); ?></h4>
					<h5><?php echo ($info["info_parofile"]); ?></p>
					<!-- info_内容表 开始-->
					<?php if(is_array($info_content)): foreach($info_content as $key=>$info_content): ?><div class="about-grid">
						
						<div class="ab-sub-gd">
							<span class="glyphicon glyphicon-leaf ab-gd-img" aria-hidden="true"> </span>
							<div class="ab-gd-text">
								<h6><?php echo ($info_content["info_content_title"]); ?></h6>
								<p><?php echo ($info_content["info_contents"]); ?></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div><?php endforeach; endif; ?>
					<!-- info_内容表 结束 -->
				</div>
				<!-- 左结束 -->
				<div class="col-md-6 about-right">
					<a href="/index.php/Home/Index/../Single/index">
						<img src="/Public/images/ab.jpg" alt="" class="img-responsive"></a>
					<p><?php echo ($info["info_discript"]); ?></p>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--about end here-->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
<!--ab-info start here-->
<div class="ab-info">
	<div class="container">
		<div class="ab-info-main">
			<div class="ab-info-bott">
			  <div class="col-md-6 ab-info-left">
			  	<h3>We are Fulfill <span class="ab-info-clr">Your All Dreams</span></h3>
			  	<p>These cases are perfectly simple and easy to distinguish.</p>
			  	<span class="ab-line"> </span>
			  </div>
			  <div class="col-md-6 ab-info-right">
			  	<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
			  	<a href="single.html">Read More</a>
			  </div>
			<div class="clearfix"> </div>
		   </div>
		</div>
	</div>
</div>
<!--ab-info end here-->
<!--services start here-->
<div class="services" id="services">
	<div class="services-main">
		<div class="ser-top">
			<h3>Services</h3>
			<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being</p>
		</div>
		<div class="ser-bottom">
		  <div class="col-md-6 service-left">
		  	<img src="/Public/images/ser1.jpg" alt="" class="img-responsive">
		  </div>
		  <div class="col-md-6 services-right">
		  	<div class="ser-grid">
		  		<span class="glyphicon glyphicon-plane ser-icon" aria-hidden="true"> </span>
		  		<div class="ser-text">
		  			<h4>Nam libero tempore cum soluta</h4>
		  			<p>At vero eos et accusamus dignissimos ducimus qui blanditiis</p>
		  		</div>
		  	   <div class="clearfix"> </div>
		  	</div>
		  	<div class="ser-grid">
		  		<span class="glyphicon glyphicon-glass ser-icon" aria-hidden="true"> </span>
		  		<div class="ser-text">
		  			<h4>These cases are perfectly simple.</h4>
		  			<p>At vero eos et accusamus dignissimos ducimus qui blanditiis</p>
		  		</div>
		  	   <div class="clearfix"> </div>
		  	</div>
		  	<div class="ser-grid">
		  		<span class="glyphicon glyphicon-cutlery ser-icon" aria-hidden="true"> </span>
		  		<div class="ser-text">
		  			<h4>Et harum quidem facilis distinct</h4>
		  			<p>At vero eos et accusamus dignissimos ducimus qui blanditiis</p>
		  		</div>
		  	   <div class="clearfix"> </div>
		  	</div>
		  </div>
		   <div class="clearfix"> </div>
	    </div>
	</div>
</div>
<!--services end here-->
<!--dreams start here-->
<div class="dreams">
	<div class="container">
		<div class="dream-main">
			<div class="dream-top">
				<h3>Events</h3>
				<p>Nor again is there anyone who loves or pursues or desires</p>
			</div>
			 <div class="dream-bottom">
			  <div class="col-md-3 dream-grid">
			  	 <h3>9-08-2015</h3>
			  	 <h4>Nam libero tempore eligendi</h4>
			  	 <p>But explain idea of pleasure give you a complete</p>
			  </div>
			  <div class="col-md-3 dream-grid">
			  	 <h3>18-09-2015</h3>
			  	 <h4>Lorem Ipsum is simply text</h4>
			  	 <p>But explain idea of pleasure give you a complete</p>
			  </div>
			  <div class="col-md-3 dream-grid">
			  	 <h3>07-10-2015</h3>
			  	 <h4>There are variations passages</h4>
			  	 <p>But explain idea of pleasure give you a complete</p>
			  </div>
			  <div class="col-md-3 dream-grid">
			  	 <h3>12-11-2015</h3>
			  	 <h4>Nam libero tempore eligendi</h4>
			  	 <p>But explain idea of pleasure give you a complete</p>
			  </div>
			<div class="clearfix"> </div>
		   </div>
		</div>
	</div>
</div>
<!--dreams end here-->
<!--testimonal strat here-->
<div class="testimo">
	<div class="container">
		<div class="testimo-main">
			   <h3>Lorem ipsum dolor consectetur adipiscing </h3>
			   <p>Duis dolor in reprehenderit in voluptate cillum dolore fugiat nulla pariatur.</p>
			   <a href="single.html">Read More</a>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--testimonal end here-->
<!--test grid-img start here-->
<div class="test-grid-img">
	<div class="container">
		<div class="test-grid-img-main">
			  <div class="col-md-4 test-grid">
			  	<a href="#"><img src="/Public/images/t1.jpg" alt="" class="img-responsive"></a>
			  </div>
			  <div class="col-md-4 test-grid">
			  	<a href="#"><img src="/Public/images/t2.jpg" alt="" class="img-responsive"></a>
			  </div>
			  <div class="col-md-4 test-grid">
			  	<a href="#"><img src="/Public/images/t3.jpg" alt="" class="img-responsive"></a>
			  </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--test grid img end here-->
<!--gallery start here-->
<div class="gallery" id="gallery">
	<div class="container">
		<div class="gallery-top">
			<h3>Gallery</h3>
			<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances.</p>
		</div>
		<div class="gallery-bottom">
				<div class="col-md-4 gallery-grid">
					<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="/Public/images/g4.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							<img class="img-responsive" src="/Public/images/g4.jpg" alt="">
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="/Public/images/g3.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							<img class="img-responsive" src="/Public/images/g3.jpg" alt="">
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="/Public/images/g2.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							<img class="img-responsive" src="/Public/images/g2.jpg" alt="">
					</div>
				</div>
                <div class="col-md-4 gallery-grid">
					<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="/Public/images/g5.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							<img class="img-responsive" src="/Public/images/g5.jpg" alt="">
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="/Public/images/g6.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							<img class="img-responsive" src="/Public/images/g6.jpg" alt="">
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="project-eff">
						<div id="nivo-lightbox-demo"> <p> <a href="/Public/images/g1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							<img class="img-responsive" src="/Public/images/g1.jpg" alt="">
					</div>
				</div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="/Public/css/magnific-popup.css">
			<script type="text/javascript" src="/Public/js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>


<!--gallery end here-->
<!--contaact start here-->
<div class="contact" id="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>Contact</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam architecto beatae.</p>
			</div>
		  <div class="contact-bottom">
			<div class="col-md-6 contact-left">
				<input type="text" placeholder="Name" required="">
				<input type="text" placeholder="Email" required="">
				<input type="text" placeholder="Phone" required="">
			</div>
			<div class="col-md-6 contact-right">
				<textarea placeholder="Message" required=""></textarea>
				<input type="submit"  value="Submit">
			</div>
			<div class="clearfix"> </div>
		   </div>
		</div>
	</div>
</div>
<!--contact end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			 <div class="col-md-3 ftr-grd">
                <h3>Information</h3>
                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio.</p>
                <ul class="ftr-icons">
                	<li><a href="#"><span class="cr-fa"> </span></a></li>
                	<li><a href="#"><span class="cr-tw"> </span></a></li>
                	<li><a href="#"><span class="cr-in"> </span></a></li>
                </ul>
             </div>
             <div class="col-md-3 ftr-grd">
                 <h3>Site Link</h3>
                <ul class="ftr-links">
                	<li><a href="index.html" class="active">主页</a></li>
				<li><a class="scroll" href="#about">关于我们</a></li>
				<li><a class="scroll" href="#services">服务</a></li>
				<li><a class="scroll" href="#gallery">图册</a></li>
				<li><a class="scroll" href="#contact">联系</a></li>
                </ul>
             </div>
             <div class="col-md-3 ftr-grd">
                   <h3>Categories</h3>
                   <ul class="ftr-categ">
					<li><a href="#">Featured</a></li>
					<li><a href="#">General</a></li>
					<li><a href="#">Lorem Ipsum</a></li>
					<li><a href="#">literature</a></li>
					<li><a href="#">Videos</a></li>
				</ul>

             </div>
             <div class="col-md-3 ftr-grd">
                   <h3>Recent project</h3>
                   <div class="ftr-gd4-img">
				    <div class="col-md-4 ftr-gd4-1"><a href="single.html"><img src="/Public/images/f1.jpg" alt="" class="img-responsive"></a></div>
				    <div class="col-md-4 ftr-gd4-1"><a href="single.html"><img src="/Public/images/f2.jpg" alt="" class="img-responsive"></a></div>
				    <div class="col-md-4 ftr-gd4-1"><a href="single.html"><img src="/Public/images/f3.jpg" alt="" class="img-responsive"></a></div>
				  <div class="clearfix"> </div>
				</div>
				<div class="ftr-gd4-img">
				    <div class="col-md-4 ftr-gd4-1"><a href="single.html"><img src="/Public/images/f4.jpg" alt="" class="img-responsive"></a></div>
				    <div class="col-md-4 ftr-gd4-1"><a href="single.html"><img src="/Public/images/f5.jpg" alt="" class="img-responsive"></a></div>
				    <div class="col-md-4 ftr-gd4-1"><a href="single.html"><img src="/Public/images/f6.jpg" alt="" class="img-responsive"></a></div>
				  <div class="clearfix"> </div>
				</div>
             </div>
          <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--footer end here-->
<!--copyright start here-->
<div class="copyright">
	<div class="container">
	   <div class="copy-main">
			<p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://travel.com">Travel</a></p>
	   </div>
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
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

  </div>
</div>

<!--copyright end here-->