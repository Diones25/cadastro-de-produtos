<?php
    include 'conexao.php';
    $id = $_GET['id'];
?>
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

    <title>Formulário de Cadastro</title>

    <style>
      body{
        font-family: 'Roboto', sans-serif;
      }
      .container{
        width: 500px;
        margin-top: 40px;
      }
    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="jumbotron">
        <h4>Formulário de Edição</h4>
        <form action="_atualizar_produto.php" class="mt-4" method="post" enctype="multipart/form-data">

        <?php

          $sql = "select * from `estoque` where id_estoque = $id";
          $busca = mysqli_query($conexao, $sql);

          while($array = mysqli_fetch_array($busca)){

            $id_estoque = $array['id_estoque'];
            $nomeproduto = $array['nomeproduto'];
            $preco = $array['preco'];
            $descricao = $array['descricao'];
            $imagem = $array['imagem'];

        ?>
          <div class="form-group">
            <label for="">Nome Produto</label>
            <input type="text" name="nomeproduto" id="" class="form-control" value="<?php echo $nomeproduto ?>">
            <input type="hidden" name="id" value="<?php echo $id_estoque ?>">
          </div>

          <div class="form-group">
            <label for="">Preço</label>
            <input type="text" name="preco" id="" class="form-control" required autocomplete="off" value="<?php echo $preco?>">
          </div>

          <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Uma descrição do produto">
              <?php echo $descricao?>
            </textarea>
          </div>

          <div class="form-group">
            <label for="imagem">Fazer upload de imagem</label>
            <input type="file" class="form-control-file" name="imagem" id="imagem" required>
            <small class="text-danger">Tamanho máximo: 16MB</small>
          </div>

          <div class="d-flex justify-content-end">
            <a href="listar_produtos.php" class="btn btn-primary mr-2">
              <span><i class="fas fa-undo"></i></span>
              Voltar
            </a>

            <button type="submit" class="btn btn-success" name="acao" id="button">
              <span><i class="fas fa-clipboard-list fa-lg mr-2 text-white"></i></span>
              Atualizar
            </button>
          </div><!--d-flex justify-content-end-->

        <?php }?>

        </form>
      </div>
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jQuery v3.4.1"></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="fontawesome/js/all.min.js"></script>
  </body>
</html>