<?php

//email library

   Class email {
	   private $wh_email_from ,$wh_email_to ,$wh_email_subject, $wh_email_body , $wh_email_header;
	   public function __construct() {
		   
		   
	   }
	   
//function that can be extensively used to send e-mails in an efficient manner
	   private function email(){
		   
		   mail( $wh_email_to, $wh_email_subject, $wh_email_body, $wh_email_header );
		   
	   }
   }
?>