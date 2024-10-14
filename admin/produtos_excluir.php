<?php
include("../conn/connect.php");

    $id = $_GET['id'];

    //Verificando se o id está vazio e o botão deletar foi apertado
    if(!empty($_GET['id'])){
        $sql = "Delete from produtos where id=".$_GET['id'];
        $conn->query($sql);

        echo "<script>
                alert('Produto Deletado com SUCESSO!!!');
                window.location.href = 'produtos_lista.php'; 
            </script>";
    } else{
        header("Location: produtos_lista.php");
    }

    //var_dump($id);
?>