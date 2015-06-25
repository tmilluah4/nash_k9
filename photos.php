<?php
	$album_id = isset($_GET['album_id']) ? $_GET['album_id'] : die('Album ID not specified.');
	$album_name = isset($_GET['album_name']) ? $_GET['album_name'] : die('Album name not specified.'); 
	$page_title = "{$album_name} Photos";
?> 
<html lang="en">
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
<div class="row main-row" style="margin-left:20px">




				<?php 
				$access_token = 'access_token=1553215644935364|xvz9dUPZ7dX6Ii0CAMAIMQQTcqE'
				 
					$json_link = "https://graph.facebook.com/v2.3/$album_id}/photos?fields=source&{$access_token}";
					$json = file_get_contents($json_link);
					$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
					$photo_count = count($obj['data']);		
					
					for($x=0; $x<$photo_count; $x++){
						 $source = $obj['data'][$x]['source'];
						
						 echo "<div class='imgLiquid'  style='-moz-box-shadow:0px 0px 4px #000; -webkit-box-shadow: 0px 0px 4px #000; box-shadow:0px 0px 4px #000;display: inline-block; margin: 10px;width:206px; height:206px'>"; 
					            	echo "<a href='{$source}' rel='gallery1'  class='fancybox' data-gallery>";
										echo "<img   class='photo-thumb' src='{$source}'   alt=''>"; 
					                 
					            	echo "</a>";  
					        echo "</div>";
						
						
						 
					}
				?>
			</div>
		</div> 
 
	<?php include('partials/footer.html');?>   
 
</body>
</html>
						
						 
  