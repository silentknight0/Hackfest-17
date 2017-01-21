<?php
   Class email {
	   private $wh_email_from ,$wh_email_to ,$wh_email_subject, $wh_email_body , $wh_email_header;
	   public function __construct() {
		   
		   
	   }
	   private function email(){
		   
		   mail( $wh_email_to, $wh_email_subject, $wh_email_body, $wh_email_header );
		   
	   }
   }
?>