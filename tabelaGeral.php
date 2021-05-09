<?php
include("conexao.php");

$sql = "SELECT pro.`idPropriedades`, pro.`Nome`, p.`idProprietarios` AS proprietario, p.`Nome` AS nomeProprietario FROM `propriedadesagricolas` AS pro
        INNER JOIN `proprietarios` AS p ON pro.`Proprietarios_idProprietarios`= p.`idProprietarios`";

$resultado = $con->query($sql) or die ("Falha na consulta inserida! ".$con->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="texto">
        <h1>Tabela Geral</h1>
    </div>
    <table border="2">
        <tr>
        <th>Id da Propriedade</th>
        <th>Nome da Propriedade</th>
        <th>Id do Proprietário</th>
        <th>Nome do Proprietário</th>
        </tr>
        <?php while ($dado = $resultado->fetch_array()) { ?>
            <tr>
                <td><?php echo $dado["idPropriedades"]?></td>
                <td><?php echo $dado["Nome"]?></td>
                <td><?php echo $dado['proprietario']?></td>
                <td><?php echo $dado["nomeProprietario"]?></td>
            </tr>
        <?php } ?>
    </table>
    <form action="index.php" method="post">
    <br>
        <button type="submit">Voltar</button>
    </form>
</body>
</html>