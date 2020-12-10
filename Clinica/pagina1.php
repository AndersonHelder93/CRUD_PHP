<!DOCTYPE html>
<html>
    <head>
      <title>Página Inicial</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="pagina1.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body class="fundo" >
      <div class="container">
        <h2 class="credenciais">Bem Vindo!</h2>
        <form action="banco_dados/dados2.php" method = "POST">
        <div class="form-group">
          <label for="email">Endereço de Email:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Senha:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Senha" name="senha">
        </div>
        <div class="checkbox">
          <label><input type="checkbox"> Lembre de mim</label>
        </div>
        <button type="submit" class="btn btn-default" name="login">Login</button>
        <button type="button" class="btn btn-default"><a href="cadastro.html">Cadastre-se</a></button>
      </form>
      </div>
    </br>
        <footer>
            <p class="cor">Consulte seus agendamentos e fichas marcadas sem sair de casa.</p>
        </footer>
    </body>
    
</html>