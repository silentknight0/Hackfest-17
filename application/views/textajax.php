<?php
if(isset($_POST["da"])){
	$htfile= fopen(__Dir__ . "/user.html",'w+');;
	fwrite($htfile,$_POST["da"]);
fclose($htfile);
}

?>