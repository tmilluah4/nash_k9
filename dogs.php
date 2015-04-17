
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
	</head>
	<body> 
			<div class="container" > 
				<div class="row">
					<div class="col-sm-1"> </div>
						<div class="col-sm-10" style="padding-left: 30px">
								<?php include('partials/header.html');?> 
					 
								<!--
								   Police K-9 Ammo    						a.10154237525855596.1073741982.283654260595&type=3	
									Personal Protection Dog Antrax		a.10154986213510596.1073742021.283654260595&type=3
									Personal Protection Dog, Anna			a.10150926419215596.757868.283654260595&type=3
									Personal Protection Dog Argo    		a.10152268881640596.929728.283654260595&type=3
									Search and Rescue, Asko					a.10152269234030596.929812.283654260595&type=3
									Personal Protection Dog, Bessi		a.10152270725645596.930020.283654260595&type=3
									Personal Protection Dog Cairo			a.10152268933945596.929743.283654260595&type=3
									Personal Protection Dog, Carlo		a.10152268958910596.929747.283654260595&type=3
									Personal Protection Dog Cowboy      a.10152268924825596.929740.283654260595&type=3
									Police K-9 Duke  							a.10155119454660596.1073742025.283654260595&type=3 
									Personal Protection Dog Hurricane 	a.10154540915460596.1073742005.283654260595&type=3
									Personal Protection Dog Jack			a.10152268929180596.929742.283654260595&type=3
									Personal Protection Dog, Ken			a.10152269125175596.929788.283654260595&type=3
									Police K-9 Knox    						a.10153858202945596.1073741945.283654260595&type=3
									Personal Protection Dog, Maxine		a.10152269217300596.929807.283654260595&type=3
									Personal Protection Dog Micah   		a.10152268904915596.929734.283654260595&type=3
									Police K-9 Peik   						a.10152268891510596.929730.283654260595&type=3
									Police K-9 Pito    						a.10152268955075596.929746.283654260595&type=3
									Police K-9 Roxy							a.10152268868050596.929726.283654260595&type=3 
									Scout- Service Dog for Parkinson's  a.10152749003450596.1073741850.283654260595&type=3 
									Taro - 	10152541427840596.955750.283654260595&type=3
									Tank - 10152541427840596
									Personal Protection Dog Tango			a.10152268952110596.929745.283654260595&type=3  
									Personal Protection Dog Uno			a.10152269021445596.929760.283654260595&type=3
									Personal Protection Dog, Ziva			a.10152270839460596.930041.283654260595&type=3 
									Personal Protection Dog, Rocky 
									Antrax https://vimeo.com/117875523
									Hurricane https://vimeo.com/110069505
									Ammo https://vimeo.com/89443751
									Duke  https://vimeo.com/117877219
									Pito https://vimeo.com/117875524
									Knox https://vimeo.com/76661706
								-->
						 
								</br>
								</br>
								<div style="margin-left: 40px">
									<div class="dog dog-first">
									<div class="caption">Argo Avodar</div>  
										<div class="dog-image">
									 <?php
											$antrax = "http://graph.facebook.com/10152268881640596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
										</div>
										<div class="mask">
											<h2>BH, IPO I, Level I Personal Protection Dog </h2>
											<ul class="dog-list">
											  <li class="parent"><span class="text">Breed: Doberman Pinscher  </span></li>
											  <li class="parent"><span class="text">Date of Birth: March 7, 2010 </span></li>
											  <li class="parent"><span class="text">Sire: Dixon Gumby, ZM, ZVV1, SchH1, IPO3, FPr2  </span></li>
											  <li class="child"><span class="text">JCH CZ, CH CZ, CR Grand Champion  </span></li>
											  <li class="child"><span class="text">2009 National Champion, 2x Regional winner  </span></li>
											  <li class="child"><span class="text">DKKO/O, ECG-Negative </span></li> 
											</ul>         
										  <a href="dogs/argo.php" class="info">More on Argo</a>
									</div>
								</div>  
								
								
								<div class="dog dog-first">
									<div class="caption"> Antrax von Hegpeter</div>
									<div class="dog-image">
										<?php
											 $antrax = "http://graph.facebook.com/10154986213510596/photos?fields=source";
											 $json = file_get_contents($antrax);
											 $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
											 $source = $obj['data'][0]['source'];
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										<h2>  IPO III, Personal Protection Dog- Available for Stud</h2>
									   <ul class="dog-list">
											<li class="parent"><span class="text">Breed: German Shepherd  </span></li>
											<li class="parent"><span class="text">Date of Birth: March 7, 2010 </span></li>
											<li class="parent"><span class="text">Sire: Szecsivari Baronas, IPO I  </span></li>
											<li class="child"><span class="text"> Dam: Szecsivari Baronas, IPO I  </span></li> 
											 

										</ul>
										<a href="/dogs/antrax.php" class="info">More on Antrax</a>
									</div>
								</div> 
							 
							
							   <div class="dog dog-first">
									<div class="caption">Ammo</div>  
									<div class="dog-image">  
										<?php
											$dog = "http://graph.facebook.com/10154237525855596/photos?fields=source";
										   $json = file_get_contents($dog);
										   $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][5]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>Police Dual Purpose</h2>
											<ul class="dog-list">
											   
												<li class="parent"><span class="text">Breed: Belgian Malinois Shepherd </span></li>
												<li class="parent"><span class="text">Date of Birth: 1/15/2013</span></li>
											 
											</ul>
												<p>Ammo is a Malinois with a TON of energy and drive. He'll hunt all day long for anything, he loves to play, 	and he's starting to have a huge ego (which is great). We've used Ammo as our demonstration dog. He knows almost every command out there and would make a super dog for any police dept. </p>
										  <a href="/dogs/ammo.php" class="info">More on Ammo</a>
									</div>
								</div>  
						 	
							 <div class="dog dog-first">
									<div class="caption">Duke</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10155119454660596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>Police K-9 - Available for Sale to Police Department</h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">	Breed: Dutch Shepherd</span></li>
												 <li class="parent"><span class="text">Date of Birth: February 26, 2014</span></li>
												 <li class="parent"><span class="text">Sire: Pelle (Dhr. B. Huijis, Baarlo)</span></li>
												 <li class="parent"><span class="text">Dam: Pip (Dhr. J.R. Kelley, USA)</span></li>
												 
											 
	  
											</ul>  
											<p>       Duke is a fast and quick Dutch Shepherd. A lovable, social, and friendly dominant male, he possesses the athleticism and speed to strike through decoy or helper. This is an extremely high drive dog in all facets: high hunt, high prey, high toy, and high food. </p>
											<a href="/dogs/duke.php" class="info">More on Duke</a>
									</div>
								</div> 
						 
						 	<div class="dog dog-first">
									<div class="caption">Hurricane</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10154540915460596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>BH, IPO I, Level I Personal Protection Dog</h2>
											<p>Hurricane is a powerhouse. A lovable, social, and friendly dominant male, he possesses the athleticism and raw power to crush any challenge. Hurricane  comes from a top pedigree, shows courage and agility where others falter, and is very clear headed. Hurricane is available for stud. </p>        
											<a href="/dogs/hurricane.php" class="info">More on Hurricane</a>
									</div>
								</div> 
								
								
								  <div class="dog dog-first">
									<div class="caption"> Cairo</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152268933945596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>Personal Protection Dog, CGC, DD, WDE, CAL2, PSA PDC</h2>
											<ul class="dog-list">
													<li class="parent"><span class="text">Doberman Pinscher</span></li>
													<li class="parent"><span class="text"> Date of Birth: June 25, 2008 </span></li>
													<li class="parent"><span class="text">Titled name "Jaburi Cairo"    </span></li>
													<li class="parent"><span class="text"> Protection Sport Association PDC Certificate</span></li>
											</ul>         
											<a href="/dogs/cairo.php" class="info">More on Cairo</a>
									</div>
								</div> 
						 
						 	<div class="dog dog-first">
								<div class="caption"> Knox</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10153858202945596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>Police K-9</h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">Certifications: IPWDA, NNDDA </span></li>
      <li class="parent"><span class="text">Knox is a fully certified police dog. He can also be placed in a single dog home as a family protection dog. He's very clean, has a short coat, super athletic, and extremely obedient. His intensity is full force while working, but calm inside the home. Knox has also been raised with children.  For Police departments, we will provide a handler course through certification.
 </span></li>
											</ul>         
											<a href="/dogs/knox.php" class="info">More on Knox</a>
									</div>
								</div> 
						 
						 
						  <div class="dog dog-first">
									<div class="caption"> Peik vom Dichterviertel</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152268891510596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>BH- AVAILABLE FOR STUD ONLY</h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">Breed: German Shepherd  </span></li>
												<li class="parent"><span class="text">Sire: Frisko von der Altstadener Mühle, VPG III, IPO III, FH I, 2 x LGA, 3 x FCI  </span></li>
												<li class="parent"><span class="text">Dam: Manou vom Oberhausener-Kreuz, SCHIII </span></li>
												<li class="parent"><span class="text">JDate of Birth: 11/18/2007       </span></li>
											 
											</ul>         
											
											<a href="/dogs/peik.php" class="info">More on Peik</a>
									</div>
								</div> 
						 
							  <div class="dog dog-first">
									<div class="caption"> Roxy vom Neerland</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152268868050596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>"; 
										 ?>
									</div>
									<div class="mask">
										 <h2>Certified Police Dog</h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">S.W.A.T. Certification Complete</span></li>
												<li class="parent"><span class="text">Narcotics Certification Complete</span></li> 
												<li class="parent"><span class="text">Dam: Xena van Neerland,Rayl, KNPV</span></li>
												<li class="parent"><span class="text">Sire: Joey haus Janssen,Rayl, KNPV</span></li>
											
											</ul>         
											<a href="/dogs/roxy.php" class="info">More on Roxy</a>
									</div>
								</div> 
						 
						
						
						 	<div class="dog dog-first">
									<div class="caption">Scout vom Geistwasser </div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152749003450596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>Service Dog for Parkinson’s Disease</h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">Breed: German Shepherd</span></li>
												<li class="parent"><span class="text">Date of Birth: May 26, 2011 </span></li>
												<li class="child"><span class="text">Sire: H-Cayos av Xazziam, SCHIII, IPOIII, MH</span></li>
												<li class="child"><span class="text">Dam: Irmhild von der Staatsmacht, SCHIII</span></li>
												 
											 
											</ul>    
											
											<a href="/dogs/scout.php" class="info">More on Scout</a>
									</div>
								</div> 
							
									<div class="dog dog-first">
									<div class="caption"> Taro</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152541427840596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>Certified Police Dog</h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">Certified Police dog in narcotics</span></li>
      <li class="parent"><span class="text">Full Obedience  </span></li>
      <li class="child"><span class="text">Nice, Clear head </span></li>
      <li class="child"><span class="text">X-rays on hips </span></li>
      <li class="child"><span class="text">Will serve as a good dual purpose Narcotics dog or great personal protection dog </span></li>
      <li class="child"><span class="text">For Police Departments, we will provide a handler class included in the price</span></li>

											</ul>         
										 <a href="/dogs/taro.php" class="info">More on Taro</a>
									</div>
								</div> 
						 
								
								
								
						 
						 	<div class="dog dog-first">
									<div class="caption"> Pito</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152268955075596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>Certified Police Dog, Narcotics</h2>
											<ul class="dog-list">
												 <li class="parent"><span class="text">Certified Police dog in narcotics</span></li>
													<li class="parent"><span class="text">Imported from North Holland</span></li>
													<li class="parent"><span class="text">Full Obedience  </span></li>
													<li class="child"><span class="text">Nice, Clear head </span></li>
													<li class="child"><span class="text">Very Social! </span></li>
											</ul>         
										 <a href="/dogs/pito.php" class="info">More on Pito</a>
									</div>
								</div> 
						 
						 
						 		<div class="dog dog-first">
									<div class="caption"> Micah Vom Hemyarihaus</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152268904915596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>Nashville K-9 Demonstration Dog</h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">Micah has presented 74 K-9 Demonstrations</span></li>
												<li class="parent"><span class="text">These Demonstrations have been for Schutzhund, Police K-9, and Family Protection</span></li>
												<li class="parent"><span class="text">He is social with Children, Adults, and other Dogs</span></li>
												<li class="parent"><span class="text">Born 08/04/2000</span></li>
												<li class="parent"><span class="text">Rest in Peace, April 28, 2012</span></li>  
											</ul>         
											<a href="/dogs/micah.php" class="info">More on Micah</a>
									</div>
								</div> 
								
								
								  <div class="dog dog-first">
								<div class="caption"> Ken vom Glockeneck</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152269125175596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>BH, SCH III, AD, KKL1</h2>
											<ul class="dog-list">
												 <li class="parent"><span class="text">German Shepherd – Hips, Eyes, and Elbows Certified, DNA Tests Conducted </span></li>
												  <li class="parent"><span class="text">He is extremely agile, quick, responsive, fast recharge time, and hits hard with full force.</span></li>
												  <li class="parent"><span class="text">Excellent grips, long hunt drive, and explosive fight drive. </span></li>
												  <li class="parent"><span class="text">High 90’s in protection </span></li>
												  <li class="parent"><span class="text">Very aggressive to outsiders.  </span></li>
											</ul>         
											<a href="/dogs/ken.php" class="info">More on Ken</a>
									</div>
								</div> 
								
								
								<div class="dog dog-first">
									<div class="caption"> Bessi von der Alten Schmiede</div>
									<div class="dog-image">
								<?php
											$antrax = "http://graph.facebook.com/10152270725645596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>BH, SCH III, IPO III, AD, FH1, KKL1</h2>
											<ul class="dog-list">
												 <li class="parent"><span class="text">German Shepherd, Hips, Eyes, and Elbows Certified, DNA tests conducted</span></li>
													<li class="parent"><span class="text"> Two of Bessi’s pups have competed in the Bundessieger </span></li>
													<li class="parent"><span class="text"> Super obedience and high drives     </span></li>
													<li class="parent"><span class="text"> High 90′s in each, 5 times completing SCH III </span></li>
													<li class="parent"><span class="text"> Very Social with people and other dogs  </span></li>
													<li class="parent"><span class="text"> Explosive bites with fast recharge   </span></li>
											</ul>         
											<a href="/dogs/bessi.php" class="info">More on Bessi</a>
									</div>
								</div> 
						 
						 	<div class="dog dog-first">
								<div class="caption"> Maxine vom Smaragdwald</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152269217300596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>BH, SCH III, AD</h2>
											<ul class="dog-list">
											  <li class="parent"><span class="text">She is extremely agile, high bites, and hits hard with excellent grips.</span></li>
											  <li class="parent"><span class="text">She excels in tracking obedience, and loves to show her courage in protection. </span></li>
											  <li class="parent"><span class="text">High Schutzhund scores (high 90’s in all), clear head, and very social.</span></li>
											  <li class="parent"><span class="text">Very aggressive to outsiders.    </span></li>
											</ul>         
											<a href="/dogs/maxine.php" class="info">More on Maxine</a>
									</div>
								</div> 
						 
						 
						 <div class="dog dog-first">
									<div class="caption">  Cowboy de Atlawor</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152268924825596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>Explosives Detection</h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">Belgian Malinios Shepherd</span></li>
												<li class="parent"><span class="text">Born 9/06</span></li>
												<li class="parent"><span class="text">Super obedience, Ready for a BH</span></li>
												<li class="parent"><span class="text">Started on Explosives</span></li>
												<li class="parent"><span class="text">Very crazy hunt drive; will search forever</span></li>
												<li class="parent"><span class="text">Super social, loves children and other dogs</span></li>
												<li class="parent"><span class="text">Very clear head, stable nerves</span></li>
											</ul>         
											<a href="/dogs/cowboy.php" class="info">More on Cowboy</a>
									</div>
								</div> 
								
								<div class="dog dog-first">
									<div class="caption"> Tango ot Vitosha </div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152268952110596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>CGC, BN,  Personal Protection Dog (available for stud)</h2>
											<ul class="dog-list">
											  <li class="parent"><span class="text">Breed: Belgian Malinois</span></li>
												<li class="parent"><span class="text"> Date of Birth: September 5, 2007 </span></li>
												<li class="parent"><span class="text">Sire: Falcon Regulus, SCHIII, IPOIII    </span></li>
												<li class="parent"><span class="text"> Dam:Wiitanen's Lola</span></li>
												<li class="parent"><span class="text"> Very fast, clear headed, and civil biter. Very athletic, agile, and intense. An excellent candidate for stud.</span></li> 
											</ul>         
											<a href="/dogs/tango.php" class="info">More on Tango</a>
									</div>
								</div> 
								
									<div class="dog dog-first">
									<div class="caption"> Jack </div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152268929180596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2> (Atlas vom Neville), CGC, Narcotics Detection </h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">Belgian Malinios Shepherd</span></li>
												<li class="parent"><span class="text">Born 12/05</span></li>
												<li class="parent"><span class="text">Super obedience, Ready for a BH</span></li>
												<li class="parent"><span class="text">Started on Narcotics Detection and Started on Cadaver</span></li>
												<li class="parent"><span class="text">Very Social with people; Cannot be in home with a small dog/small pet</span></li>
												<li class="parent"><span class="text">High Toy and Hunt Drive, loves searching</span></li>
											</ul>         
											<a href="/dogs/jack.php" class="info">More on Jack</a>
									</div>
								</div> 
						 
						 
						   <div class="dog dog-first">
									<div class="caption">Asko Vom Brockelstein</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152269234030596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>BH, SCH III, AD, KKL1</h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">Former DCRS K-9 SAR dog, East DDR German Shepherd  </span></li>
												  <li class="parent"><span class="text">Asko was famous for working the Fairview/Franklin TN Tornadoes 2008 and captured on video by Nashville NBC station WSMV.</span></li>
												  <li class="parent"><span class="text">Asko has relocated to Oregon to finish out his happy life. </span></li>
											</ul>         
										  <a href="/dogs/asko.php" class="info">More on Asko</a>
									</div>
								</div> 
					 
						 	<div class="dog dog-first">
									<div class="caption"> Carlo Van Neerland</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152268958910596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>"; 
										 ?>
									</div>
									<div class="mask">
										 <h2>PSA PDC</h2>
											<ul class="dog-list">
												 <li class="parent"><span class="text">Only Dutch Malinois with KNPV-PH1 Sire and Dam in the U.S.</span></li>
												<li class="parent"><span class="text">Pedigree dates back to 1913</span></li>
												<li class="parent"><span class="text">bloedlijnen.nl</span></li>
												<li class="parent"><span class="text">Available for Stud Only</span></li>
											</ul>         
										  <a href="/dogs/carlo.php" class="info">More on Carlo</a>
									</div>
								</div> 
						 
								<div class="dog dog-first">
									<div class="caption"> Anna vom Westcowdenhaus</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10150926419215596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2>  </h2>
											<ul class="dog-list">
											   <li class="parent"><span class="text">Breed: German Shepherd  </span></li>
												  <li class="parent"><span class="text">Sire: Ken vom Glockeneck, KKL1, BH, SCHIII, AD  </span></li>
												  <li class="parent"><span class="text">Dam: Bessi von der Alten Schmiede, KKL1, BH, SCHIII, IPOIII, AD, FHI </span></li>
												  <li class="parent"><span class="text">Date of Birth: October 2, 2010 </span></li>
											</ul>         
											<a href="/dogs/anna.php" class="info">More on Anna</a>
									</div>
								</div>  
									 
						 
							
								
							 
 
						
							
							
						 
								
						 
						
					 
							  
							
						 
							
							 
							
							
							 
							
							 
						
						 
 
						 
							 
							
							<!--	<div class="dog dog-first">
									<div class="caption"> Rocky vom Westcowdenhaus</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10154540915460596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2> </h2>
											<ul class="dog-list">
												<li class="parent"><span class="text">Breed: German Shepherd</span></li>
												<li class="parent"><span class="text">Sire: Ken vom Glockeneck, KKL1, BH, SCHIII, AD</span></li>
												<li class="parent"><span class="text">Dam: Bessi von der Alten Schmiede, KKL1, BH, SCHIII, IPOIII, AD, FHI</span></li>
												<li class="parent"><span class="text">Date of Birth: October 2, 2010</span></li>
											</ul>         
											<a href="/dogs/rocky.php" class="info">More on Rocky</a>
									</div>
								</div> -->
												
						 
						
							
						 
								
							 
							  <div class="dog dog-first">
									<div class="caption"> Uno vom Westcowdenhaus</div>
									<div class="dog-image">
										<?php
											$antrax = "http://graph.facebook.com/10152269021445596/photos?fields=source";
											$json = file_get_contents($antrax);
											$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
											$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
										 ?>
									</div>
									<div class="mask">
										 <h2></h2>
											<ul class="dog-list">
												 <li class="parent"><span class="text">Breed: German Shepherd</span></li>
												  <li class="parent"><span class="text">Sire: Ken vom Glockeneck, KKL1, BH, SCHIII, AD</span></li>
												  <li class="parent"><span class="text">Dam: Bessi von der Alten Schmiede, KKL1, BH, SCHIII, IPOIII, AD, FHI</span></li>
												  <li class="parent"><span class="text">Date of Birth: October 2, 2010</span></li>
											</ul>         
											<a href="/dogs/uno.php" class="info">More on Uno</a>
									</div>
								</div> 
						 
								<div class="dog dog-first">
										<div class="caption">Ziva vom Westcowdenhaus</div>
										<div class="dog-image">
											<?php
												$antrax = "http://graph.facebook.com/10152270839460596/photos?fields=source";
												$json = file_get_contents($antrax);
												$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING); 
												$source = $obj['data'][0]['source'];  
											 echo "<div class='imgLiquid'  style='margin: 2px;width:275px; height:275px'>";
											 echo "<img  class='photo-thumb' src='{$source}'   alt=''>";  
											 echo "</div>";
											 ?>
										</div>
										<div class="mask">
											 <h2></h2>
												<ul class="dog-list">
													<li class="parent"><span class="text">Breed:German Shepherd</span></li>
													<li class="parent"><span class="text">Sire: Ken vom Glockeneck, KKL1, BH, SCHIII, AD</span></li>
													<li class="parent"><span class="text">Dam: Bessi von der Alten Schmiede, KKL1, BH, SCHIII, IPOIII, AD, FHI</span></li>
													<li class="parent"><span class="text">Date of Birth: October 2, 2010</span></li>
												</ul>         
												<a href="/dogs/ziva.php" class="info">More on Ziva</a>
										</div>
								</div> 
							 </div>
						</div> 	 
						<div class="clearfix visible-xs-block"></div>
						<div class="col-sm-1"> </div>
					
					</div> 
			
				</div>
			</div> 

		<?php include('partials/footer.html');?>

	</body>
</html>







