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

		 <div class="container"  style="   " >
			  <div class="row">
					<div class="col-sm-1"> </div>
					<div class="col-sm-10">
						 <?php include('partials/header.html');?>
						 <div class="row " style="margin-left:20px"> 
							<?php
								 $fb_page_id = "283654260595";
								 $json_link = "http://graph.facebook.com/283654260595/albums?fields=id,name,description,link,cover_photo,count";
								 $json = file_get_contents($json_link);
								 $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
								 $album_count = count($obj['data']);
											
								 for($x=0; $x<$album_count; $x++){
									  
									  $id = $obj['data'][$x]['id'];
									  $name = $obj['data'][$x]['name'];
									  $description = $obj['data'][$x]['description'];
									  $link = $obj['data'][$x]['link'];
									  $cover_photo = $obj['data'][$x]['cover_photo'];
									  $count = $obj['data'][$x]['count'];
									  
									  // if you want to exclude an album, just add the name on the if statement
									  if(
										  $name!="Profile Pictures" &&
										  $name!="Cover Photos" &&
										  $name!="Timeline Photos"
										  ){
												$show_pictures_link = "photos.php?album_id={$id}&album_name={$name}";
												echo "<div class='gallery'>";
													echo "<div style='text-align:center;  max-width:280px;height:20px;
    position: relative; overflow:hidden; ' >";
														echo "<span style='text-transform:uppercase; font-size: 14px; text-align:center'  >{$name}</span>";
													echo "</div>";
													echo "<div class='imgLiquid'  style='margin: 2px 2px 2px 2px;width:275px; height:275px'>";
														echo "<a href='{$show_pictures_link}'  >";
															echo "<img class='photo-thumb'  src='https://graph.facebook.com/{$cover_photo}/picture' alt='{$description}'>";
														echo "</a>";
													echo "</div>"; 
												echo "</div>";
									  }
								 }
							?> 
						</div>
					</div>
					<div class="col-sm-1"> </div> 
				</div> 
			</div> 


		<?php include('partials/footer.html');?>
		
	</body>
</html>