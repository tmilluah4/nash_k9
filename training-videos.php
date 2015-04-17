<!DOCTYPE html>
<html>
<head>
	<?php include('partials/head.html');?>
<style>
	.switcher-content { display: none;}
</style>
<script type="text/javascript" src="js/jquery.content-panel-switcher.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		jcps.fader(300, '#switcher-panel');
	});
	$(function() {
	  $('ul li').click( function() {
			$(this).addClass('active').siblings().removeClass('active');
		 });
	  });
</script>
</head>
<body>
<script type="text/javascript">
	function setActive() { 
		document.getElementById('videosli').className='active'; 
	}
	window.onload = setActive;
</script>
	<div class="container" >
		<div class="row">
			<div class="col-sm-1"> </div>
			<div class="col-sm-10">
				<?php include('partials/header.html');?>
				<div class="row main-row">
					<div class="col-sm-4">
						<div class="image-random">
							<script type="text/javascript">
								showImage();
							</script>
						</div>
						</br>
						<ul  class="list-group" style="cursor: pointer; margin-left: 70px; margin-top:-50px">
							<li id="content1" class="list-group-item switcher active"> WHY WE ARE BETTER! </li>
							<li id="content2" class="list-group-item switcher"> WHAT OUR CLIENTS ARE SAYING</li>
							<li id="content3" class="list-group-item switcher"> SOME OF OUR DOGS</li>
							<li id="content4" class="list-group-item switcher"> DOG OBEDIENCE</li>
							<li id="content5" class="list-group-item switcher">FOUR WEEK BOARD AND TRAIN</li>
							<li id="content6" class="list-group-item switcher">EXECUTIVE PROTECTION </li>
							<li id="content7" class="list-group-item switcher">SEARCH AND RESCUE </li>
							<li id="content8" class="list-group-item switcher">DOG AGILITY</li>
							<li id="content9" class="list-group-item switcher">DEMONSTRATIONS</li>
							<li id="content10" class="list-group-item switcher">PET FIRST AID</li>
							<li id="content11" class="list-group-item switcher">RING SPORT</li>
							<li id="content12" class="list-group-item switcher">COMMERCIALS</li>
						</ul>
					</div>

					<div class="col-sm-8 "> 
						<div class="section-with-header"> 
							<!-- VIEW -->
							<div id="switcher-panel"  >
								<?php include('videos/why-we-are-better.html');?>
							</div>
							<!-- WHY WE ARE BETTER -->
							<div id="content1-content" class="switcher-content ">
								<?php include('videos/why-we-are-better.html');?>
							</div>							
							<!-- CLIENTS -->
							<div id="content2-content" class="switcher-content">
								<?php include('videos/what-clients-are-saying.html');?>
							</div>							
							<!-- SOME OF OUR DOGS -->
							<div id="content3-content" class="switcher-content">
								<?php include('videos/some-of-our-dogs.html');?>
							</div>
							<!-- DOG OBEDIENCE -->
							<div id="content4-content" class="switcher-content">
								<?php include('videos/dog-obedience.html');?>
							</div>
							<!-- 4 WEEK BOARD AND TRAIN -->
							<div id="content5-content" class="switcher-content">
								<?php include('videos/four-week-board-and-train.html');?>
							</div>
							<!-- DOG PROTECTION -->
							<div id="content6-content" class="switcher-content">
								<?php include('videos/dog-protection.html');?>
							</div>
							<!-- SEARCH AND RESCUE -->
							<div id="content7-content" class="switcher-content">
								<?php include('videos/search-and-rescue.html');?>
							</div>
							<!-- DOG AGILITY -->
							<div id="content8-content" class="switcher-content">
								<?php include('videos/dog-agility.html');?>
							</div>
							<!-- DEMONSTRATIONS -->
							<div id="content9-content" class="switcher-content">
								<?php include('videos/demonstrations.html');?>
							</div>
							<!-- PET FIRST AID -->
							<div id="content10-content" class="switcher-content">
								<?php include('videos/pet-first-aid.html');?>
							</div>
							<!-- RING SPORT -->
							<div id="content11-content" class="switcher-content">
								<?php include('videos/ring-sport.html');?>
							</div>
							<!-- COMMERCIALS -->
							<div id="content12-content" class="switcher-content">
								<?php include('videos/commercials.html');?>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="col-sm-1"> </div>
		</div> 
	</div>

	<?php include('partials/footer.html');?>

</body>
</html> 