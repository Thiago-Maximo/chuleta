<!-- CONECTAR NO BANCO E SELECIONAR AS INFORMAÇÕES -->
<?php
    include 'acesso_com.php';
    include '../conn/connect.php';

    $lista = $conn->query("select * from tipos");
    $row = $lista->fetch_assoc();
    $rows = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos - Lista</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class=""> 
    <?php include 'menu_adm.php'; ?>
    <main class="container">
        <h2 class="breadcrumb alert-danger">Lista de Produtos</h2>
        <table class="table table-hover table-condensed tb-opacidade bg-warning"> 
            <thead>
                <th class="hidden">ID</th>
                <th>TIPO</th>
                <th>DESCRIÇÃO</th>
                
                <th>
                    <a href="tipos_insere.php" target="_self" class="btn btn-block btn-primary" role="button">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span class="hidden-xs">ADICIONAR</span>
                    </a>
                </th>
            </thead>
            
            <tbody> <!-- início corpo da tabela -->
           	        <!-- início estrutura repetição -->
                <!-- COMEÇO DO LAÇO -->
                <?php do{ ?>
                    <tr>
                        <td class="hidden">
                            <!-- ID -->
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <!-- Sigla -->
                            <?php echo $row['sigla']; ?>
                            <span class="visible-xs"></span>
                            <span class="hidden-xs"></span>
                        </td>
                        <td>
                             <!-- RÓTULO -->
                             <?php echo $row['rotulo']; ?>
                            <span class="visible-xs"></span>
                            <span class="hidden-xs"></span>
                        </td>
                    </tr>
                    <?php }while($row = $lista->fetch_assoc()); ?>    
                <!-- FIM DO LAÇO -->  
            </tbody><!-- final corpo da tabela -->
        </table>
    </main>
</body>
</html>