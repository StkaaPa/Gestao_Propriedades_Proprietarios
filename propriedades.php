<?php 
include ("conexao.php");

$sql = "SELECT * FROM propriedadesagricolas";
$resultado = $con->query($sql) or die ("Falha na consulta inserida! ".$con->error);
 ?>

 <html>
    <link rel="stylesheet" href="style.css">
 <head>
 <title>Propriedades</title>
 </head>
 <body>
     <div class="texto">
     <h1>Lista das propriedades</h1>
     </div>
     <table>
        <tr>
        <th>Id Propriedades</th>
        <th>Nome</th>
        <th>Distrito</th>
        <th>Concelho</th>
        <th>Freguesia</th>
        <th>artigoMarticial</th>
        <th>Culturas Existentes</th>
        <th>Id Proprietário</th>
        </tr>
        <?php while ($dado = $resultado->fetch_array()) { ?>
            <tr>
            <td><?php echo $dado["idPropriedades"]?></td>
            <td><?php echo $dado["Nome"]?></td>
            <td><?php echo $dado["Distrito"]?></td>
            <td><?php echo $dado["Concelho"]?></td>
            <td><?php echo $dado["Freguesia"]?></td>
            <td><?php echo $dado["artigoMatricial"]?></td>
            <td><?php echo $dado["Culturas"]?></td>
            <td><?php echo $dado["Proprietarios_idProprietarios"]?></td>
            <td><a href="formularioEditarPropriedades.php?idPropriedades=<?php echo $dado["idPropriedades"];?>&Nome=<?php echo $dado["Nome"];?>&Distrito=<?php echo $dado["Distrito"];?>&Concelho=<?php echo $dado["Concelho"];?>&Freguesia=<?php echo $dado["Freguesia"];?>&artigoMatricial=<?php echo $dado["artigoMatricial"];?>&Culturas=<?php echo $dado["Culturas"];?>&Proprietarios_idProprietarios=<?php echo $dado["Proprietarios_idProprietarios"]?>">Editar</a>
            | <a href="formularioEliminarPropriedades.php?idPropriedades=<?php echo $dado["idPropriedades"];?>&Nome=<?php echo $dado["Nome"];?>&Distrito=<?php echo $dado["Distrito"];?>&Concelho=<?php echo $dado["Concelho"];?>&Freguesia=<?php echo $dado["Freguesia"];?>&artigoMatricial=<?php echo $dado["artigoMatricial"];?>&Culturas=<?php echo $dado["Culturas"];?>&Proprietarios_idProprietarios=<?php echo $dado["Proprietarios_idProprietarios"]?>">Eliminar</a>
            </td>
            </tr>
        <?php } ?>
     </table>
     <form action="formularioPropriedades.php" method="POST">
     <br>
     <button type="submit">Novo Registo</button>
     </form>
     <form action="index.php" method="post">
            <button type="submit">Voltar</button>
     </form>
 </body>
 </html>