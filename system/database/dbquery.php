<?php
Class dbquery extends dbconnect{
	private $wh_query;
	public function __construct() {

	}
	private function query($wh_query_param){
		return mysqli_query($wh_query_param);
		
	}
}
?>