<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/painel.css">
    <title>Painel de informações</title>
</head>
   <?php

      include("conexao.php");

      $stmt = $conn->prepare("select * from produtoEstoque order by idProduto desc");
      $stmt->execute(); 

      include('menu.php');
   ?>
   
   <table>
       <thead>
           <tr>
               <th scope="col">#</th>
               <th scope="col">Produto</th>
               <th scope="col">Marca</th>
               <th scope="col">Tipo</th>
               <th scope="col">Quantidade</th>
               <th scope="col">Preço</th>
               
               
               <th scope="col">Editar</th>
               <th scope="col">Excluir</th>
           </tr>

    <script>
      function confirmar() {
        return confirm("Você tem certeza que deseja deletar este produto?");
    }
    </script>
    
     </thead>
     <tbody>    
       <?php
           while($row = $stmt->fetch()) {
            echo "<tr>";                         
                echo "<td> $row[idProduto] </td>";
                echo "<td> $row[nomeProduto] </td>";
                echo "<td> $row[marcaProduto] </td>";
                echo "<td> $row[precoProduto] </td>";
                echo "<td> $row[quantidadeProduto] </td>";
                echo "<td> $row[tipoProduto] </td>";
               
                echo "<td>
                <form class='painel-form' method='post' action='UD.php'>
                  <input type='hidden' name='id' value='$row[idProduto]'/>
                    <button type='submit' name='action' value='edit' class='btn-UD'>
                      <img src='img/edit-button-svgrepo-com.svg'/>
                    </button>
                  </form>
                  </td> ";
                echo"<td>
                  <form class='painel-form' method='post' action='UD.php' onsubmit='return confirmar()'>
                  <input type='hidden' name='id' value='$row[idProduto]'/>
                  <button type='submit' name='action' value='del' class='btn-UD'>
                    <img src='img/lixeira-de-reciclagem.png'/>
                  </button>
                  </form> ";
                echo "</td>";
            echo "</tr>";
           }
           
       ?>
     </tbody>
   </table>
</body>