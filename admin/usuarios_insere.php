<?php
    include 'acesso_com.php';
    include '../conn/connect.php';

   if($_POST){

    $login = $_POST['Login'];
    $senha = $_POST['Senha'];
    $senha_cripo = $senha;
    md5($senha_cripo);
    $nivel = $rowTipo['nivel'];

    $sql = "INSERT usuarios (login,senha,nivel) VALUES ('$usuario','$senha_cripo','$nivel')";
    $conn->query($sql);
   }

    // $listaTipo = $conn->query("Select * from usuarios");
    // $rowTipo = $listaTipo->fetch_assoc();
    // $numLinhas = $listaTipo->num_rows;
    // selecionar a lista de tipos para preencher o <select>
        
?>
<!-- CONECTAR COM O BANCO E SELECIONAR AS INFORMAÇÕES -->


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Produto - Insere</title>
</head>
<body>
<?php include "menu_adm.php";?>
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
            <h2 class="breadcrumb text-danger">
                <a href="produtos_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Inserindo Usuarios
            </h2>
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                    <form action="usuarios_insere.php" method="post" 
                    name="form_insere" enctype="multipart/form-data"
                    id="form_insere">
                        <label for="id_tipo">Nivel:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <select name="id_tipo" id="id_tipo" class="form-control" required>
                                <!-- COMEÇO DO LAÇO -->
                                <?php do{ ?>
                                    <option value="<?php echo $rowTipo['id']; ?>">
                                    <?php echo $rowTipo['nivel']; ?>
                                    </option>
                                <?php }while($rowTipo = $listaTipo->fetch_assoc()); ?>
                                <!-- FIM DO LAÇO -->
                            </select>
                        </div>
                        
                        <label for="descricao">Login:</label>     
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                           </span>
                           <input type="text" name="Login" id="Login" 
                                class="form-control" placeholder="Digite o Login"
                                maxlength="100" required>
                        </div>   
                        
                        <label for="descricao">Senha:</label>     
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                           </span>
                           <input type="text" name="Senha" id="Senha" 
                                class="form-control" placeholder="Digite a Senha"
                                maxlength="100" required>
                        </div>   

                        <br>
                        <input type="submit" name="enviar" id="enviar" class="btn btn-danger btn-block" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>