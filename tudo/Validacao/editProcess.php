<?php
   include('../conexao.php');

   // Captura dos dados enviados pelo formulário
   $sql = "select * from produtoEstoque;" ;

   $stmt1 = $conn->prepare($sql);
   $stmt1->execute();


   $id = $_GET['idProduto'];
   $nomeItem = $_POST['novoNome'];
   $marcaItem = $_POST['novoMarca'];
   $tipoItem = $_POST['novoTipo'];
   $quantidadeItem = $_POST['novoQuantidade'];
   $precoItem = $_POST['novoPreco'];

        $stmt = $conn->prepare(
                    

        "UPDATE produtoEstoque
        SET nomeProduto = :novoNome,
        marcaProduto = :novaMarca,
        precoProduto = :novoPreco,
        quantidadeProduto = :novoQuantidade,
        tipoProduto = :novoTipo
        WHERE idProduto = :idProduto"
                        
        );
        

        $stmt->bindParam(':novoNome', $nomeItem);
        $stmt->bindParam(':novaMarca', $marcaItem);
        $stmt->bindParam(':novoPreco', $precoItem);
        $stmt->bindParam(':novoQuantidade', $quantidadeItem);
        $stmt->bindParam(':novoTipo', $tipoItem);
        $stmt->bindParam(':idProduto', $id);
        
        if($stmt->execute()){
      
        

        header('Location: ../painel.php');
        }
                ?>