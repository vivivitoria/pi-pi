<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('db/pegardados.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/editarperfil.css">
        <link rel="icon" href="midia/book-fill.svg">
        <title>Cidade Literária</title>
    </head>
    <body>
        <div class="btn-back">
            <a href="./menu/menu.php"> &#8592; Voltar</a>
        </div>
        <div class="center" id="main-container">
            <h1>Meu perfil</h1>
            <form method="post" id="edit-form" action="db/perfil.php">
                <div class="full-box">
                    <label class="perfil" for="email">E-mail:  </label>                    
                </div>
                <div class="full-box">
                    <label class="perfil" for="name">Nome:  </label>
                </div>

                <div class="full-box">
                    <a href="editarperfil.html">
                    <input type="button" value="Alterar dados" id="btn-senha" class="btn" onclick="alterarSenha()">
                    </a>
                </div>
                <div class="full-box">
                    <a href="index.html">
                    <input type="button" name="logout" value="Desconectar da minha conta" id="btn-senha" class="btn" >
                    </a>
                </div>
            </form>
        </div>
        <script src="js/editarperfil.js"></script>
    </body>
</html>