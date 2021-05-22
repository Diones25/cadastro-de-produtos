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

    <title>Adicionar produtos</title>

    <style>
      body{
        font-family: 'Roboto', sans-serif;
      }
      .container{
        width: 600px;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    
    <div class="container">

      <div class="jumbotron">
        <h1 class="display-5">Formulário de Cadastro</h1>
        
        <form action="_inserir_produto.php" class="mt-4" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Nome Produto</label>
            <input type="text" name="nomeproduto" id="" class="form-control" placeholder="Insira o nome do produto" required  autocomplete="off">
          </div>

          <div class="form-group">
            <label for="">Preço</label>
            <input type="text" name="preco" id="" class="form-control" placeholder="00,00" required autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Uma descrição do produto" required></textarea>
          </div>

          <div class="form-group">
            <label for="imagem">Fazer upload de imagem</label>
            <input type="file" class="form-control-file" name="imagem" id="imagem" required>
            <small class="text-danger">Tamanho máximo: 16MB</small>
          </div>

          <div class="d-flex justify-content-end">

            <a href="menu.php" class="btn btn-primary mr-2">
              <span><i class="fas fa-undo"></i></span>
              Voltar
            </a>

            <button type="submit" class="btn btn-success" name="acao" id="button">
              <span><i class="fas fa-clipboard-list fa-lg mr-2 text-white"></i></span>
              Cadastrar
            </button>
          </div><!--d-flex justify-content-end-->

        </form>
      </div><!--jumbotron-->

      
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jQuery v3.4.1"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>