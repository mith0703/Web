<?php 
    class App
    {
        protected $controller = "home";
        protected $action = "default";
        protected $params = [];
        
        function __construct()
        {
            //Array ( [0] => home [1] => 1 [2] => 2 [3] => 3 )
            $arr = $this->UrlProcess();

            // print_r($arr);

            //Handle Controller
            if (file_exists("./controller/". $arr[0] ."controller.php")){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            require_once "./controller/" . $this->controller . "controller.php";
            $this->controller = new $this->controller;

            //Handle Action
            if (isset($arr[1]) && method_exists($this->controller, $arr[1])){
                $this->action = $arr[1];
                unset($arr[1]);
            }

            //Handle Params
            $this->params = $arr?array_values($arr):[];
            $arr2 = array($this->params);
            
            //Call a controller->action->params
            call_user_func_array([ $this->controller, $this->action ], $arr2 );
            // print_r($this->params);
        }

        function UrlProcess(){
            if (isset($_GET['url'])){
                //remove white space and split via "/"
                return explode("/", filter_var(trim($_GET['url'], "/")));
            }
        }
    }
?>