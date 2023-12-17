<?php

    namespace mvc;

    class Application {

        private $controller;

        private function setApp(){

            $loadName = 'mvc\Controller';
            $url = explode('/', @$_GET['url']);

            if($url[0] == ''){
                $loadName.='Home';
            }else{
                $loadName.=ucfirst(strtolower($url[0]));
            }

            $loadName.='Controller';

            $this->controller = new $loadName();

        }

        public function run(){
            $this->setApp();
            $this->controller->index();
        }

        
    }

?>