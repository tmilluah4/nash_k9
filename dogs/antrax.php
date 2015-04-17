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
								Antrax von Hegpeter IPO III, Personal Protection Dog- Available for Stud (sold)
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
									<div class="col-md-9 dog-single-right"> German Shepherd </div> 
								</div>
								<div class="row">  
									<div class="col-md-3 dog-single-left">Date of Birth</div>
									<div class="col-md-9 dog-single-right"> May 5, 2010   </div> 
								</div>
								<div class="row">  
									<div class="col-md-3 dog-single-left">Dam</div>
									<div class="col-md-9 dog-single-right"> Szecsivari Baronas, IPO I </div>
								</div>  
								<div class="row">  
									<div class="col-md-3 dog-single-left">Sire</div>
									<div class="col-md-9 dog-single-right"> Tarnoki-Felvigyazo Quando, IPO III </div>
								</div>  
								<div class="row">  
									<div class="col-md-3 dog-single-left">Videos</div>
									<div class="col-md-9 dog-single-right-video"  > 
										<span class="watch-video-play-dog" >		
											<span class="glyphicon glyphicon-film " aria-hidden="true"  ></span> 
											 <a  class="various  fancybox.iframe"  title="" href="https://vimeo.com/117875523">
													Antrax
											 </a>
										</span> 
									</div>
								</div> 				 					
								 
							</div>
							<div class="col-md-6">
								<ul class="dog-list-items"> 
									<li class="child"><span class="text"> Antrax redefines intensity. A calm yet powerful dog, Antrax's athletic abilities far surpasses most dogs. Everything from full grip and hard bites to flashy obedience, Antrax gives his owners an unfair advantage. He has also competed in the Hungarian Championship. IPO Scores: 99.96.90 </span></li>
								</ul>
							</div> 
						</div>
					</div>	
					<div class="row  dog-gallery-row">
						<div class="col-md-12"> 
							<?php 
								 $dog = "http://graph.facebook.com/10154986213510596/photos?fields=source";
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

Album: Personal Protection Dog Antrax

Video: Will be ready in 2 weeks