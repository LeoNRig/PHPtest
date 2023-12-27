<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login na rede</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC?>style/style.css" rel="stylesheet">
</head>
<body>
    
    <div class="sidebar"></div>

    <div class="form-container-login">
        <div class="logo-chamada-login">
            <img src="<?php echo INCLUDE_PATH_STATIC?>images/php-logo-white.svg" />
            <p>Conecte-se e expanda seus aprendizados com o PHP.</p>
        </div>

        <div class="form-login">
            <h3 style="text-align:center">Crie sua Conta</h3>
                <form method="post">
                    <input type="text" name="nome" placeholder="Seu nome...">
                    <input type="text" name="Email" placeholder="Email...">
                    <input type="password" name="senha" placeholder="Senha...">
                    <input type="submit" name="acao" value="Criar conta!">
                    <input type="hidden" name="registrar" value="registrar"/>
                </form>
        </div>
    </div>

</body>
</html>