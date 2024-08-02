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
        <?php
            include('menu.php');
        ?>
        <div class="form">
            
            <form action="Validacao/VerificarCadastro.php" method="post">
                
            <div form="form-header">
                    <div class="title">
                        <h1>Cadastre o Produto</h1>
                    </div>
                    <br><br>
                </div>

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
                        <input type="text" id="tipo" name="novoTipo" placeholder="Digite o tipo do produto" required>
                    </div>

                    <div class="input-box">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" id="quantidade" name="novoQuantidade" placeholder="Digite a quantidade" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="preco">Preço</label>
                        <input type="text" id="preco" name="novoPreco" placeholder="Digite o valor em reais">
                    </div>

                </div>

                <div class="btn-cadastro">
                    <button type="submit">Cadastrar</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>