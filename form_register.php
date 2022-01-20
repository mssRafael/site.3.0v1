<?php include "includes/navbar_index.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_form_register.css">
    <title>TechShop - Registrar</title>
</head>
<body>
    <section class="main-page-register">
        <div class="container-input-register">
            <form method="post" action="cadastrarusuario.php">
                <div class="input-name">
                    <div class="icon-name">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="input-typename">
                        <input type="text" name="name" placeholder="Nome...">
                    </div>
                </div>
                <div class="input-password">
                    <div class="icon-password">
                        <i class="fas fa-unlock-alt"></i>
                    </div>
                    <div class="input-typepassword">
                        <input type="password" name="password" placeholder="Senha...">
                    </div>
                </div>
                <div class="input-submit">
                    <input type="submit" value="Registrar">
                </div>
            </form>
        </div>
    </section>
</body>
</html>