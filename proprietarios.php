<?php 
include ("conexao.php");

$sql = "SELECT * FROM proprietarios";
$resultado = $con->query($sql) or die ("Falha na consulta inserida! ".$con->error);
 ?>

 <html>
     <link rel="stylesheet" href="style.css">
 <head>
 <body>
     <div class="texto">
     <h1>Lista dos Proprietarios</h1>
     </div>
     <table border="2">
        <tr>
        <th>Id Proprietarios</th>
        <th>Nome</th>
        <th>Morada</th>
        <th>NF</th>
        <th>Telefone</th>
        <th>Email</th>
        </tr>
        <?php while ($dado = $resultado->fetch_array()) { ?>
            <tr>
            <td><?php echo $dado["idProprietarios"]?></td>
            <td><?php echo $dado["Nome"]?></td>
            <td><?php echo $dado["Morada"]?></td>
            <td><?php echo $dado["NF"]?></td>
            <td><?php echo $dado["Telefone"]?></td>
            <td><?php echo $dado["Email"]?></td>
            <td><a href="formularioEditarProprietarios.php?idProprietarios=<?php echo $dado["idProprietarios"];?>&Nome=<?php echo $dado["Nome"];?>&Morada=<?php echo $dado["Morada"];?>&NF=<?php echo $dado["NF"];?>&Telefone=<?php echo $dado["Telefone"];?>&Email=<?php echo $dado["Email"];?>">Editar</a>
            | <a href="formularioEliminarProprietarios.php?idProprietarios=<?php echo $dado["idProprietarios"];?>&Nome=<?php echo $dado["Nome"];?>&Morada=<?php echo $dado["Morada"];?>&NF=<?php echo $dado["NF"];?>&Telefone=<?php echo $dado["Telefone"];?>&Email=<?php echo $dado["Email"];?>">Eliminar</a>
            </td>
            </tr>
        <?php } ?>
     </table>
     <form action="formularioProprietarios.php" method="POST">
     <button type="submit">Novo Registo</button>
     </form>
     <form action="index.php" method="post">
            <button type="submit">Voltar</button>
     </form>
 </body>
 </head>
 </html>