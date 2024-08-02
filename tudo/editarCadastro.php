<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Projeto Painel de informações</title>
</head>
<body>
    <div class="container-img">
        <div class="form-img">
            <img src="img/undraw_forms_re_pkrt.svg" alt="">
        </div>
        <div class="form">
            
            <form action="Validacao/VerificarCadastro.php" method="post">
                
            <div form="form-header">
                    <div class="title">
                        <h1>
                            Edite o Produto</h1>
                    </div>
                    <div class="btn-login">
                        <button><a href="painrl.php">Editar</a></button>
                    </div>
                </div>
                
                <?php

                $id=$_GET['idProduto'];

                include("conexao.php");

                $nomeItem;
                $marcaItem;
                $tipoItem;
                $quantidadeItem;
                $precoItem;

                while($row = $stmt->fetch()) {
                    $nomeItem = $row['novoNome'];
                    $marcaItem = $row['novoMarca'];
                    $tipoItem = $row['novoTipo'];
                    $quantidadeItem = $row['novoQuantidade'];
                    $precoItem = $row['novoPreco'];
                }

                $stmt = $conn->prepare($sql);
                $sql= "SELECT * FROM produtoEstoque";

                     $stmt = $conn->prepare(
                        

                        "UPDATE contato
                        SET nomeProduto = $nomeItem,
                        marcaProduto = $marcaItem,
                        precoProduto = $tipoItem,
                        quantidadeProduto = $quatidadeItem,
                        tipoProduto = $tipoItem,
                        WHERE idProduto = $id"
                        
                    );
            
                
                ?>
                <div class="input-group">

                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="novoNome" placeholder="digite o nome do produto" required>
                    </div>

                    <div class="input-box">
                        <label for="marca">Marca</label>
                        <input type="text" id="marca" name="novoMarca" placeholder="Digite a marca" required>
                    </div>

                    <div class="input-box">
                        <label for="tipo">Tipo</label>
                        <input type="text" id="tipo" name="novoTipo" value="Digite o tipo do produto" required>
                    </div>

                    <div class="input-box">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" id="quantidade" name="novoQuantidade" placeholder="Digite a quantidade" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="preço">Preço</label>
                        <input type="text" id="preço" name="novoPreço" placeholder="Digite o valor em reais">
                    </div>

                </div>

                <div class="btn-cadastro">
                    <button><a href="#">Cadastrar</a></button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>