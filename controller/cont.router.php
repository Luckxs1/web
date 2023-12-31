<?php

class Router {
        private $request;
        public function requestPage(){
            $page = '404';
            if(isset($_SERVER["QUERY_STRING"])){
                $uri = explode("/", $_SERVER["QUERY_STRING"]);
                $page = isset($uri[0]) && !empty($uri[0]) ? $uri[0] : 'home';
            }
            $this->request = $page;
            return $this;
        }
        public function renderPage(){
            require_once 'include/include.import.php';
            switch(strtolower($this->request)) {
                case "/":
                case "home":
                    $pageTitle = "Home Page";
                    require_once "page/home.php";
                    break;
                default:
                    require_once "page/404.php";
            }
        }
}