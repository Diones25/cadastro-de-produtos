<?php

    include 'conexao.php'; 

    if(isset($_POST['acao']))
    {

        $id = $_POST['id'];
        $nomeproduto = $_POST['nomeproduto'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

        $imagem = $_FILES['imagem']['name'];
        
        $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
        if (in_array($_FILES['imagem']['type'], $permitidos)) {
            move_uploaded_file($_FILES['imagem']['tmp_name'], 'assets/img/' . $imagem);
            //echo "Arquivo salvo com sucesso";

        }

        $sql = "UPDATE estoque SET nomeproduto = '$nomeproduto', preco = '$preco', descricao = '$descricao', imagem = '$imagem' WHERE `estoque`.`id_estoque` = $id";

        $atualizar = mysqli_query($conexao, $sql);
    }

?>

<!--Fonte Awesome-->
<link rel="stylesheet" href="fontawesome/css/all.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<div class="container" style="width: 400px; margin-top: 200px;">
    <h3 style="text-align: center">Atualizado com sucesso</h3>
    <div class="d-flex justify-content-center">
        <a href="listar_produtos.php" class="btn btn-primary text-white mt-2">
        <span><i class="fas fa-undo"></i></span>
        Voltar
        </a>
    </div>
</div>