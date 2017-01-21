
<?php

if(isset($_POST["da"])){
	$htfile= fopen("user.html",'w');;
	fwrite($htfile,$_POST["da"]);
fclose($htfile);
}
if(isset($_POST["addon_link"]))

{
$ext=$_POST["addon_link"];

$extfile=fopen("extensions.txt",'a');
fwrite($extfile,"<script src='".$ext."'></script>");
fclose($extfile);
}


if(isset($_POST["html"]))
{
$extread=fopen("extensions.txt","r");
$extrainfo=fread($extread,filesize("extensions.txt"));

$htfile= fopen("user.html",'w');
$csfile=fopen("user.css",'w');
$jsfile=fopen("user.js",'w');

$htinfo=$_POST['html'];
$csinfo=$_POST['css'];
$jsinfo=$_POST['js'];

fwrite($htfile,$extrainfo.$htinfo);
fwrite($csfile,$csinfo);
fwrite($jsfile,$jsinfo);
fclose($htfile);
fclose($csfile);
fclose($jsfile);
fclose($extread);
//echo $htinfo.'/'.$csinfo.'/'.$jsinfo;
}

?>
 