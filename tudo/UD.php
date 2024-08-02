<?php
include("conexao.php");



if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['id']) && isset($_POST['action'] ) ) { //verifica se o método chamado foi post, se temos recebemos o ID e se o botão foi pressionado
    
    $action = $_POST['action'];
    $id = $_POST['id'];

    if($action=='del'){  
        //verifica qual o valor(value) do botão pressionado. Se 'del', função deletarContato(dContato)
        header("location:deletProduto.php?idProduto=".$id);
    }


     elseif($action=='edit'){ //se o value for 'edit', redireciona para uma página de edição
    header("location:editarCadastro.php?idProduto=".$id); //envia o usuário para a pagina de edição de contato e oi valor da de $id
    exit();
}
}

?>