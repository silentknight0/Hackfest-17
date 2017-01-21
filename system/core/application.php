<?php
Class Application{
	private $wh_controller, $wh_function, $wh_parameters;
	 private function wh_spliturl()
    {
        if ($_GET['path']) {
			
           $wh_url = trim($_GET['path'], '/');
           $wh_url = filter_var($wh_url, FILTER_SANITIZE_URL);
            $wh_url = explode('/', $wh_url);
            $this->wh_controller = isset($wh_url[0]) ? $wh_url[0] : null;
			$this->wh_controller = strtolower($this->wh_controller);
            $this->wh_function = isset($wh_url[1]) ? $wh_url[1] : null;
			$this->wh_function = strtolower($this->wh_function);
            $this->wh_parameters = isset($wh_url[2]) ? $wh_url[2] : null;
			$this->wh_parameters = strtolower($this->wh_parameters);
		   unset($wh_url[0], $wh_url[1],$wh_url[2]);
            
        }
    }
    public function __construct()
	{
		$this->wh_spliturl();
		if ($this->wh_controller=='index.php'||!$this->wh_controller) {
            require APPL. 'controllers/welcome.php';
            $page = new welcome();
            $page->index();
        }
		else if ($this->wh_controller){
			if(file_exists(APPL . 'controllers/' . $this->wh_controller . '.php')){
				require APPL . 'controllers/' . $this->wh_controller . '.php';
				$page = new $this->wh_controller();
				if($this->wh_function){
					$wh_function_temp = $this->wh_function;
			if(method_exists($page,$wh_function_temp))
					{
					$page->$wh_function_temp($this->wh_parameters);
					}
					else { echo '404 Sorry Page Not Found'; }
			 }
			 else {
				 $page->index($this->wh_parameters);
			 }
			}
			else {
				echo '404 Sorry Page Not Found';
			}
		}
	}
}