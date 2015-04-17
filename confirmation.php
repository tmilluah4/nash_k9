<!DOCTYPE html>
<html>
<head> 
     <?php include('partials/head.html');?> 	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/imgLiquid-min.js"></script>
	<script type="text/javascript"> 
		jQuery(document).ready(function($){
			 $(".imgLiquid").imgLiquid();
		});
	</script> 
	<style>
	.contact-side-image{
		-moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000; display: inline-block; margin-right: 10px;width:180px; height:180px;
	}
	 
	</style>
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->   
</head>
<body> 
	<?php
		require 'vendor/autoload.php';
		$sendgrid = new SendGrid('app35497125@heroku.com', '62osfefm');
		$message = new SendGrid\Email();
		$name = $_POST['name'];
		$phone = $_POST['phone'];
	    $email = $_POST['email'];
	    $subject = $_POST['subject'];
		$notecontent = $_POST['notecontent'];  
		$message->addTo('ali@nashvillek9.com')->
	          setFrom('rtoddmiller3@gmail.com')->
	          setSubject('Contact Form Submission')->
	          setText('Name:   $name \r\n  Email:  $email \r\n  Subject: $subject \r\n Message:  $notecontent ')->
	          setHtml("Name:{$name}\r\n Phone: {$phone}\r\n Email:  {$email}\r\n  Message:    {$notecontent}");
		$response = $sendgrid->send($message);
	?>
		<div class="container"  >
			<div class="row">
				<div class="col-sm-1"> </div>
				<div class="col-sm-10">
						<?php include('partials/header.html');?>
						<div class="row main-row" style="margin-left:40px"> 
 							<div class="col-md-3" class="side-column" >
								<div class="row" class="side-column-contact" >  
						 				<div class='imgLiquid contact-side-image'   >
		                 					<img src="/images/dog_training_overview/meet_the_team/nashville-dog-trainer-ali.jpg">
				         				</div>
						 				<div class='imgLiquid contact-side-image'  >
		                 					<img src="/images/dog_training_overview/meet_the_team/nashville-dog-trainer-damon.jpg">
				         				</div>
						 				<div class='imgLiquid contact-side-image'   >
		                 					<img src="/images/dog_training_overview/meet_the_team/nashville-dog-trainer-john.jpg">
				         				</div>
						 		</div>
							</div>
			 
							<div class="col-md-3"    >
								<div class="page-section-title "  >
						  			Thank you for contacting us!  We will get back with you shortly.
								</div>  
							 </div>
							 <div class="col-md-4" style="padding-left:40px">
									<div class="row">
										Nashville K-9 Main Office: </br>(615) 438-2602
									</div></br> 
									<div class="row">
										Davidson Co. K-9 Emergency Assistance: </br> (615) 943-4743
									</div></br>
									<div class="row">
										Overton Co. K-9 Emergency Assistance: </br> (931) 783-3653
									</div>
							 </div>
							 </br>
						</div>
					</div>
				</div>
				<div class="col-sm-1"> </div> 	 
    		</div>	
	 	</div>	
 	
	<?php include('partials/footer.html');?> 	
   
</body>
</html>