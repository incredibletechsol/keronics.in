<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php'); ?>
</head>
<body>
<div id="wrapper" class="home-page">
	<!-- start header -->
	<?php include('header.php'); ?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section class="callaction">
	<div class="container">
	
	<div class="row" >
		<div class="col-md-6">
				<div class="alert alert-success hidden" id="contactSuccess">
					<strong>Success!</strong> Your message has been sent to us.
				</div>
				<div class="alert alert-error hidden" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
				</div>
				<div class="contact-form">
					  
		  <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->

			<form name="sentMessage" id="contactForm" >
			
			 <div class="control-group" >
						<div class="controls">
				<input type="text" class="form-control" 
					   placeholder="Full Name" id="name" required
						   data-validation-required-message="Please enter your name" />
				  <p class="help-block"></p>
			   </div>
				 </div> 	
					<div class="control-group">
					  <div class="controls">
				<input type="email" class="form-control" placeholder="Email" 
								id="email" required
						   data-validation-required-message="Please enter your email" />
			</div>
			</div> 	
				  
				   <div class="control-group">
					 <div class="controls">
					 <textarea rows="10" cols="100" class="form-control" 
						   placeholder="Message" id="message" required
				   data-validation-required-message="Please enter your message" minlength="5" 
						   data-validation-minlength-message="Min 5 characters" 
							maxlength="999" style="resize:none"></textarea>
			</div>
				   </div> 		 
			 <div id="success"> </div> <!-- For success/fail messages -->
			<button type="submit" class="btn btn-success wow fadeInUp pull-right">Send</button><br />
			  </form>
				</div>
			</div>
			<div class="col-md-6">
			 
                  <h4 class="widgetheading">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Contact</h4>
								<address>
            					<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Keronics Commodities Pvt Ltd</strong><br>
            					<span class="contact-icon"><i class="fa fa-map-marker" style="font-size:24px;color:red"></i></span>&nbsp;&nbsp;   Registered Office :- Sr.No. 1/7/ 1/17,<br>
            					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bldg Aditya, Wing A & B,<br>
            					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Shop No.05,Haveli,Shivne (Part)<br>
            					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (N.V.),Pune,MH - 411023<br><br>
            		            <span class="contact-icon"><i class="fa fa-phone" style="font-size:24px;color:red"></i></span>&nbsp; (+91) 020 21055600<br><br>
            					<span class="contact-icon"><i class="fa fa-envelope" style="font-size:24px;color:red"></i></span>&nbsp; keronicspvtltd@gmail.com
            					</address>
	
		
		</div>
	</div>
	</section>
	
<?php include('footer.php'); ?>
	
	  

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script> 
</body>
</html>