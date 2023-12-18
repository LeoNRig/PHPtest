<?php

namespace mvc\Controller;

class HomeController{

    public function index(){

       if(isset($_SESSION['login'])){
                //renderiza a home do usuario
                \mvc\Views\MainView::render('home');
       }else{
                //renderiza criar conta
                \mvc\Views\MainView::render('login');
       }

    }

}

?>