<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Fonte padrão-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <!--Fonte Awesome-->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>Cadastro de Usuário</title>

    <style>
      body{
        font-family: 'Roboto', sans-serif;
      }
      .container{
        margin-top: 60px;
        width: 500px;
      }
    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="jumbotron">
        <h1 style="font-size: 26px;" class="mb-4">Cadastro de Usuário</h1>
        <form action="_insert_usuario.php" method="POST">
          <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
          </div>

          <div class="form-group">
            <label for="">Login</label>
            <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu login é seu e-mail">
          </div>

          <div class="form-group">
            <label for="">Senha</label>
            <input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
          </div>

          <div class="form-group">
            <label for="">Confirmar senha</label>
            <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repitir Senha" oninput="validaSenha(this)">
            <small>Precisa ser igual a senha digitada acima.</small>
          </div>

          <div class="form-group">
            <label for="">Nível de Acesso</label>
            <select name="nivelusuario" id="" class="form-control" required>
              <option></option>
              <option value="1">Administrador</option>
              <option value="2">Funcionário</option>
              <option value="3">Conferente</option>
            </select>
          </div>

          <div class="d-flex justify-content-end">
            <a href="index.php" role="button" class="btn btn-primary mr-2">Voltar</a>      
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div> 
        </form>
      </div>
    </div>
    
      
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>

    <script>
      function validaSenha (input){ 
        if (input.value != document.getElementById('txtSenha').value) {
        input.setCustomValidity('Repita a senha corretamente');
        } else {
          input.setCustomValidity('');
        }
      } 
    </script>

  </body>
</html>