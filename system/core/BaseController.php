<?php

//Basic controller - responsible fora  majority of operations

class WH_BASE_CONTROLLER{


//initilization
   public function __construct(){
	  
   }
 //helper methods
   public function model($wh_model_para){
	   $wh_model_param = explode('/',$wh_model_para);
	  require APPL . 'models/' . $wh_model_param[0] . '.php';
	  $wh_model = new $wh_model_param[0]();
	  if(!$wh_model_param[1])
	  {
		   $wh_model->index();
	  }
	  else{
		  $wh_model->$wh_model_param[1]();
	  }
   }
   public function view($wh_views_param){
	   return require APPL . 'views/' . $wh_views_param . '.php';
   }
   
}

?>
