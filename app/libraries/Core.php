<?php
   /* 
    - App core Class
    - Creates a URL to load in Controller
   */

   class Core {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct()
        {
            $url = $this->getURL();

            //find the first value in the controller/ url
            if($url && file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
                // if the request url exist then set as controller
                $this->currentController = ucwords($url[0]);

                // uset the 0 index
                unset($url[0]);
            }

            // Require the controller
            require_once '../app/controllers/'. $this->currentController.'.php';

            // instantiate controller class
            $this->currentController = new $this->currentController;

            // check for second url/ method in url
            if(isset($url[1])){
                //check if method exist into controller
                if(method_exists($this->currentController,$url[1])){
                    $this->currentMethod = $url[1];
                }
            }

            echo $this->currentMethod;
        }

       public function getURL()
       {
           if(isset($_GET['url'])){
               // breaking the url using '/'
               $url = rtrim($_GET['url'], '/');

               //filter the url
               $url = filter_var($url,FILTER_SANITIZE_URL);

               // break the url into a array
               $url = explode('/',$url);

               return $url;
           }
       }
   }

