

<!-- This interface is a prototype template developed to showcase th etrue potential of WhiteHat MVC-->

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


	<!--The code for a simple personal blog template. -->
	<div class="container-fluid well" style="font-family: 'Merriweather', serif;color:#0080FF;margin-bottom:20px;width : 80%;min-height:30px;margin-top:120px;margin-left:10%;padding: 12px;">
	<?php 
	$postfile=fopen(__DIR__ ."/posts.txt",'r') or die("here");
$postdata=fread($postfile,filesize(__DIR__ ."/posts.txt"));
$posts=explode("///",$postdata);
foreach($posts as $post)
{
$diff_ele=explode("}}}",$post);
echo "<div style='background-color:#52A4F6;padding:25px;'><h2 style='color:black;'><b><i>".$diff_ele[0]."</i></b></h2>
	<h4 style='color: #D3D3D3;'><i>".$diff_ele[1]."</i></h4>
	<br>
	<p style='color:white;'>".$diff_ele[2]."<p></div>		
	<br><br>";
	}
	fclose($postfile);
	?></div>
	<div id="navigation_bar" style="min-width:100%; height : 100px;background-color:black;position:fixed;top:0px;"></div>
		<div class="btn btn-info" style="color:white;position:fixed;right: 3%;top:10px; ">+ Add Post</div>
		<h4 id="username">username goes here</h4>
	</div>
</body>
</html>
