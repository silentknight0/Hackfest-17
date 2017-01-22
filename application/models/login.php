
<?php
/*
	This is the login handler,
	which process every request
	and send data or redirect ones.et me know when he comes in 
*/
Class login extends  welcome
{   
	public function __construct() {
       $wh_controller = new WH_BASE_CONTROLLER();
	}
	public function index(){
		$name = $_POST['name'];
		$q = "select * from users where name=$name";
		$qu = new dbquery;
		$qu->query($q);
		
	exit;
	}

	function register(){
		
		$q = '';
exit;
	}
}
?>