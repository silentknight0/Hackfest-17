<?php
class WH_BASE_CONTROLLER{

   public function __construct(){
	  
   }
   private function model($wh_model_param){
	   return require APPL . 'models/' . $wh_model_param . '.php';
   }
   public function view($wh_views_param){
	   return require APPL . 'views/' . $wh_views_param . '.php';
   }
   
}

?>
