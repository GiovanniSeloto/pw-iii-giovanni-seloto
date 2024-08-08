<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Projeto Painel de informações</title>
</head>
<body>
    
    <?php
    include("conexao.php");

    $id=$_GET['idProduto'];


   
    $sql= "SELECT * FROM produtoEstoque where idProduto=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    

    while($row = $stmt->fetch()) {
        $nomeItem = $row['nomeProduto'];
        $marcaItem = $row['marcaProduto'];
        $tipoItem = $row['tipoProduto'];
        $quantidadeItem = $row['quantidadeProduto'];
        $precoItem = $row['precoProduto'];
    } 
    ?>

    <div class="container-img">
        
        <div class="form-img">
            <img src="img/undraw_forms_re_pkrt.svg" alt="">
        </div>
        
        <div class="form">
            
        <form action="Validacao/editProcess.php?idProduto=<?php echo $id?>" method="post">
                
            <div form="form-header">
                    <div class="title">
                        <h1>
                            Edite o Produto</h1>
                    </div>
            </div>
            
                
                <div class="input-group">

                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="novoNome" placeholder="digite o nome do produto" value ="<?php echo $nomeItem; ?>" required>
                    </div>

                    <div class="input-box">
                        <label for="marca">Marca</label>
                        <input type="text" id="marca" name="novoMarca" placeholder="Digite a nova marca" value="<?php echo $marcaItem; ?>" required>
                    </div>

                    <div class="input-box">
                        <label for="tipo">Tipo</label>
                        <input type="text" id="tipo" name="novoTipo" placeholder="Digite o tipo do produto" value="<?php echo $tipoItem; ?>" required>
                    </div>

                    <div class="input-box">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" id="quantidade" name="novoQuantidade" placeholder="Digite a nova quantidade" value="<?php echo $quantidadeItem; ?>" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="preço">Preço</label>
                        <input type="text" id="preço" name="novoPreco" placeholder="Digite o novo valor em reais" value="<?php echo $precoItem; ?>">
                    </div>

                </div>

                <div class="btn-cadastro">
                    <button type="submit">Atualizar</button>
                </div>

                

                
        </form>
        </div>
    </div>
</body>
</html>