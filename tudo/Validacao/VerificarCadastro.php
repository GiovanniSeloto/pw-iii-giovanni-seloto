<?php
    include('../conexao.php');

    // Captura dos dados enviados pelo formulário
    $nomeItem = $_POST['novoNome'];
    $marcaItem = $_POST['novoMarca'];
    $tipoItem = $_POST['novoTipo'];
    $quantidadeItem = $_POST['novoQuantidade'];
    $precoItem = $_POST['novoPreco'];
    

            // Preparando a declaração SQL
            $stmt = $conn->prepare(
                "INSERT INTO `produtoEstoque`(`nomeProduto`, `marcaProduto`,`precoProduto`, `quantidadeProduto`, `tipoProduto`)
                 VALUES (:novoNome, :novoMarca, :novoTipo, :novoQuantidade, :novoPreco)"
            );
            $stmt->bindParam(':novoNome', $nomeItem);
            $stmt->bindParam(':novoMarca', $marcaItem);
            $stmt->bindParam(':novoTipo', $tipoItem);
            $stmt->bindParam(':novoQuantidade', $quantidadeItem);
            $stmt->bindParam(':novoPreco', $precoItem);

            $stmt->execute();

            // Redirecionamento após a inserção bem-sucedida
            header("Location: ../painel.php");
?>
