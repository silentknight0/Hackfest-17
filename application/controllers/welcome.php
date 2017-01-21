<?php
Class welcome extends  WH_BASE_CONTROLLER
{
	public function __construct() {
       $wh_controller = new WH_BASE_CONTROLLER();
	}
	function index(){
		$this->view('home');
	exit;
	}
	function index2($i){
		//echo '</br>this call is from welcome controller from index2 function  '. $i;
		$this->view('index2');
exit;
	}
}
?>