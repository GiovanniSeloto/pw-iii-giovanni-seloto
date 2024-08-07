<?php
   include('../conexao.php');

   // Captura dos dados enviados pelo formulário
   //$sql = ;

   $id= $_GET=['idProduto'];
   $nomeItem = $_POST['novoNome'];
   $marcaItem = $_POST['novoMarca'];
   $tipoItem = $_POST['novoTipo'];
   $quantidadeItem = $_POST['novoQuantidade'];
   $precoItem = $_POST['novoPreco'];

        $stmt = $conn->prepare(
                    

        "UPDATE produtoEstoque
        SET nomeProduto = :nomeProduto,
        marcaProduto = :marcaProduto ,
        precoProduto = :precoProduto,
        quantidadeProduto = :quantidadeProduto,
        tipoProduto = :tipoProduto,
        WHERE idProduto = $id"
                        
        );

        $stmt->bindParam(':nomeProduto', $nomeItem);
        $stmt->bindParam(':marcaProduto', $marcaItem);
        $stmt->bindParam(':precoProduto', $precoItem);
        $stmt->bindParam(':quantidadeProduto', $quantidadeItem);
        $stmt->bindParam(':tipoProduto', $tipoItem);
        $stmt->bindParam(':id', $id);
            
                
                ?>