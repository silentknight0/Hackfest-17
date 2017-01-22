<!-- you're defaultly redirected here -->


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
	//Login function for authentication
	function login(){
		
		if(!isset($_POST['name'])||!isset($_POST['password'])){
		$this->view('home');}
		else{
			//$this->model('login/index');
	$name==$_POST['name'];
	$pwd=$_POST['password'];
	if($name=="user" && $pwd=="admin")
	{	echo 'this works!';
		//header('Location: http://localhost/WhiteHats/welcome/blog ');
	}

		}
exit;
	}
	//data processing functions
	function register(){
		
		if(!isset($_POST['name'])||!isset($_POST['password'])||!isset($_POST['email'])){
		$this->view('home');}
		else{
			$this->model('login/register');
		}
exit;
	}
	//links to other files and actions
	function home(){
		//if(isset($_POST['name'])){
		$this->view('blog');
		//}
	}
	function add_article(){
		//if(isset($_POST['name'])){
		$this->view('add');
		//}
	}
	function text(){
		//if(isset($_POST['name'])){
		$this->view('text');
		//}
	}
	function code(){
		//if(isset($_POST['name'])){
		$this->view('code');
		//}
	}
	function r(){
		//if(isset($_POST['name'])){
		$this->view('rintegration');
		
	}}
?>