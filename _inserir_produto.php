<?php

    include 'conexao.php';

    if(isset($_POST['acao']))
   {

        $nomeproduto = $_POST['nomeproduto'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

        $imagem = $_FILES['imagem']['name'];
        
        $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
        if (in_array($_FILES['imagem']['type'], $permitidos)) {
            move_uploaded_file($_FILES['imagem']['tmp_name'], 'assets/img/' . $imagem);
            //echo "Arquivo salvo com sucesso";

        }

        $sql = "INSERT INTO estoque SET nomeproduto = '$nomeproduto', preco = '$preco', descricao = '$descricao', imagem = '$imagem'";
        
        $inserir = mysqli_query($conexao, $sql);
    }
    
?>

<!--Fonte Awesome-->
<link rel="stylesheet" href="fontawesome/css/all.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container" style="width: 400px; margin-top: 200px;">
    <h3 style="text-align: center">Produto adicionado com sucesso</h3>
    <div class="d-flex justify-content-center">
        <a href="adicionar_produto.php" class="btn btn-primary text-white mt-2">
        <span><i class="fas fa-clipboard-list fa-lg mr-2 text-white"></i></span>
        Cadastrar novo Ítem
        </a>
    </div>
</div>