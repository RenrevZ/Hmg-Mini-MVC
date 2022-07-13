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
            $this->getUrl();
        }

       public function getURL()
       {
           if(isset($_GET['url'])){
               
           }
       }
   }

