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
            if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
                // if the request url exist then set as controller
                $this->currentController = ucwords($url[0]);

                // uset the 0 index
                unset($url[0]);

            }

            // Require the controller
            require_once '../app/controllers/'. $this->currentController.'.php';

            // instantiate controller class
            $this->currentController = new $this->currentController;
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

