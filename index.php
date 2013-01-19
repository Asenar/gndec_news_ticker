<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="js/gndec_news.js"></script> 
<link rel="stylesheet" href="css/gndec_news.css" type="text/css" media="screen" /> 
<script type="text/javascript"> 
$(function(){
	$("ul#ticker").liScroll({travelocity:0.1}); 
});
</script> 
</head> 
<body> 
<div id="wrapp"> 
		<ul id="ticker"> 
		<?php
		require_once('config/config.php');
		$result = mysql_query("SELECT date,link,news from h_t WHERE published='yes' ORDER BY h_t.priority ASC");

		$total_news = mysql_num_rows($result);
		$count = 1;
		
		while($row = mysql_fetch_assoc($result)) {
			echo "<li>(".$count." of ".$total_news.") <a href='".$row['link']."'>".$row['news']."</a></li>";
			$count++;
		}
	?>
					
		</ul> 
 </div>
