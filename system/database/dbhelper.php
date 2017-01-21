<?php
Class dbconnect {
	private $wh_query;
	public function __construct(){
		mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	}
}
?>