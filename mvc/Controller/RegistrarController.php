<?php

namespace mvc\Controller;

class RegistrarController{

    public function index(){

        if(isset($_POST['ragistrar'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

                \mvc\Utilidades::alerta('Email Invalido');
                \mvc\Utilidades::redirect(INCLUDE_PATH.'registrar');

            }else if(strlen($senha) < 6){
                \mvc\Utilidades::alerta('Senha curta');
                \mvc\Utilidades::redirect(INCLUDE_PATH.'registrar');

            }else if(\mvc\Models\UsuariosModel::emailExists($email)){

                \mvc\Utilidades::alerta('Esse email ja foi cadastrado');
                \mvc\Utilidades::redirect(INCLUDE_PATH.'registrar');

            }else{
                //Registrar Usuarios

                $senha = \mvc\Bcrypt::hash($senha);
                $registro = \mvc\MySql::conectar()->prepare("INSERT INTO usuarios VALUES (null,?,?,?,?,?)");
                $registro->execute(array($nome,$email,$senha,'',''));

                \mvc\Utilidades::alerta('Registrado com Sucesso');
                \mvc\Utilidades::redirect(INCLUDE_PATH);
            }

        }

                \mvc\Views\MainView::render('registrar');
    }

}

?>