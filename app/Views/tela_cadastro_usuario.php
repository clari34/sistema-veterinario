<?php

?>

<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <title>Cadastro Usuário</title>
        <link rel="stylesheet" href="../public/Formatacao/estilo.css">

    </head>

    <body>

        <form class="formulario" action="" method="POST">

            <h1>Cadastro</h1>

            <div>
                <label for="nome">Nome completo:</label>
                <input name="nome" type="text" id="nome"/>
            </div>
            <br>
            <div>
                <label for="cpf">CPF:</label>
                <input name="senha" type="password" id="senha">
            </div>
            <br>
            <div>
            <label for="email">Email:</label>
                <input name="email" type="text" id="email"/>
            </div>
            <br>
            <div>
                <label for="senha">Senha:</label>
                <input name="senha" type="password" id="senha">
            </div>
            <br>
            <div>
                <input type="submit">
                <br><br>
            </div>
        </form>
    </body>
</html>