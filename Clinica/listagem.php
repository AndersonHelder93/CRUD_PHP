<?php
    include "banco_dados/dados2.php";
    include "banco_dados/dados.php";
?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Listagem de Pacientes</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="pagina1.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
        <body class="fundo">
            <table>
                <tr>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>PESO</th>
                    <th>ALTURA</th>
                    <th>IDADE</th>
                </tr>
                <footer>
                <div>
                    <button type="submit" class="btn btn-default"><a href="autenticado.html">Voltar</a></button>
                    <button type="submit" class="btn btn-default"><a href="pagina1.php">Sair</a></button>
                </div>
                </footer>
                <?php
                    listagem ($conexao);
                ?>
            </table>
        </body>
    </html>
