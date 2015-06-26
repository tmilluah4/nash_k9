<!DOCTYPE html>
<html>
<head> 
    <?php include('../partials/head.html');?>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script> 
	<script src="../js/imgLiquid-min.js"></script>
	<script type="text/javascript"> 
		jQuery(document).ready(function($){
			  $(".imgLiquid").imgLiquid(); 
			});
	</script> 
</head>
<body> 
	<script type="text/javascript">  
		function setActive() { 
			document.getElementById('dogsli').className='active'; }
		window.onload = setActive;
	</script>
	
	<div class="container" >
	  <div class="row">
			<div class="col-sm-1"> </div>
			<div class="col-sm-10">
				<?php include('../partials/header.html');?> 
				<div class="main-dog-div">
					<div class="row main-row" > 					 
						<div class="col-xs-12 col-sm-12" >    
							<div class="page-section-title"   > 
								Roxy: Police K-9 
							</div>
						</div>
					</div>
					<div class="row " > 					 
						<div class="col-xs-12 col-sm-12" >   
							<div class="col-md-6" style="margin-top:20px"> 
								<div class="row">  
									<div class="col-md-3 dog-single-left-price">Availability</div>
									<div class="col-md-9 dog-single-right-price">  SOLD </div> 
								</div>
								<div class="row">  
									<div class="col-md-3 dog-single-left">Breed</div>
									<div class="col-md-9 dog-single-right"> Belgian Malinois  </div> 
								</div>
							 
								<div class="row">  
									<div class="col-md-3 dog-single-left">Sire</div>
									<div class="col-md-9 dog-single-right"> Joey haus Janssen,Rayl, KNPV </div>
								</div>  
								<div class="row">  
									<div class="col-md-3 dog-single-left">Dam</div>
									<div class="col-md-9 dog-single-right"> Xena van Neerland,Rayl, KNPV </div>
								</div>  
								<div class="row">  
									<div class="col-md-3 dog-single-left">Videos</div>
									<div class="col-md-9 dog-single-right-video"  > 
										<span class="watch-video-play-dog" >		
											<span class="glyphicon glyphicon-film " aria-hidden="true"  ></span> 
											 
											
											
											 <a class="various  fancybox.iframe" style="margin-right:10px"  title="" href="http://player.vimeo.com/video/12879062?fs=1&amp;autoplay=1">
          Roxy - 1
        </a><span class="glyphicon glyphicon-film " aria-hidden="true"  ></span> 
        <a class="various  fancybox.iframe" style="margin-right:10px"  title="" href="http://player.vimeo.com/video/12879021?fs=1&amp;autoplay=1">
         Roxy -  2
        </a><span class="glyphicon glyphicon-film " aria-hidden="true"  ></span> 
        <a class="various  fancybox.iframe"  title="" href="http://player.vimeo.com/video/35486063?fs=1&amp;autoplay=1">
        Roxy -  3
        </a>
										</span> 
									</div>
								</div> 							
								 
							</div>
							<div class="col-md-6">
								<ul class="dog-list-items"> 
									<li class="parent"><span class="text">S.W.A.T. Certification Complete</span></li>
												<li class="parent"><span class="text">Narcotics Certification Complete</span></li> 
											 
												 
								  	<li class="parent"><span class="text">Roxy is a Wilderness Search and Rescue Dog for the Davidson County Rescue Squad. She has also trained on water and land cadaver. She's a certified Police Narcotics dog and S.W.A.T. K-9 certified as well. Very ball crazy, excellent hunt drives, very protective but also capable of being a light switch. Extremely nimble, quick, and has high stamina, with full grips. Obedience to perfection, calm and steady nerves, nothing phases her. She’s a working dog on rubble piles that are very unstable, and her manueverability is impeccable. Very, very high drives, excellent focus and coordination. She can catch a ball launched in the air 30ft without it even bouncing. Great hips, solid dentals, good health. For Disaster Rescue, she has great directionals, very strong victim hunt drives, and listens well. Demonstrations are available. Please see all four videos of Roxy working.
												  </span></li>
								</ul>
								
							</div> 
						</div>
					</div>	
					<div class="row dog-gallery-row">
						<div class="col-md-12"> 
							<?php 
								$access_token = "1553215644935364|xvz9dUPZ7dX6Ii0CAMAIMQQTcqE"; 
								$dog = "https://graph.facebook.com/v2.3/10152268868050596/photos?fields=source&access_token={$access_token}";
							         
								$json = file_get_contents($dog);
								$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
								$photo_count = count($obj['data']); 
								for($x=0; $x<$photo_count; $x++){
									$source = $obj['data'][$x]['source']; 
									echo "<div class='imgLiquid' 
									style=' -moz-box-shadow:0px 0px 2px #666; -webkit-box-shadow: 0px 0px 2px #666; box-shadow:0px 0px 2px #666; display: inline-block; margin-right: 10px;width:175px; height:175px'>";  
											echo "<a href='{$source}' rel='gallery1'  class='fancybox' data-gallery>";
												echo "<img   class='photo-thumb' src='{$source}'   alt=''>";  
											echo "</a>"; 
									  echo "</div>"; 
								} 
							?>
						</div>
					</div>			
				</div>
			</div>	
			<div class="col-sm-1"></div>	
		</div>	
	</div>
	
	<?php include('../partials/footer.html');?> 	
   
</body>
</html>







 