<?php

    namespace mvc\Models;

    class UsuariosModel{
        public static function emailExists($email){
            $pdo = \mvc\MySql::conectar();
            $verificar = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
            $verificar->execute(array($email));

            if($verificar->rowCount() == 1){
                return true;
            }else{
                return false;
            }
        }
    }

?>
