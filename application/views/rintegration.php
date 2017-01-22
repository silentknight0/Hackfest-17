<?php
//This is the .php part of the R-PHP integration
//the interface takes in an input , uses it as an 
// argument , and produces output in the form of a text array
echo "<html>";
echo "<form action='http://localhost/WhiteHats/welcome/r' method='GET'>";    
echo "Number values to generate: <input type='text' name='N'/>";    
echo "<input type='submit' />";    
echo "</form></html>";     
 if( isset($_GET['N']))    
{
  $N = $_GET['N'];

  // execute R script from shell    
  // this will save a plot at temp.png to the filesystem

  exec("Rscript my_rscript.R $N");

  // return image tag

  $nocache = rand();

  echo("<img src='http://localhost/WhiteHats/application/views/temp.png?r=$nocache'/> ");    
}   
		//}
	

?>
