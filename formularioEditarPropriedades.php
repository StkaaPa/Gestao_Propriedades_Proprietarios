<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="texto">
    <h1>Editar os dados da Propriedade</h1>
    </div>
    <form id="formulario" action="editarPropriedades.php" method="post">
        <input type="hidden" name="idPropriedades" value="<?php echo $id = $_GET['idPropriedades'];?>"><br>
        <br>
        Nome: <input type="text" name="Nome" value="<?php echo $id = $_GET['Nome']; ?>"><br>
        <br>
        Distrito: <input type="text" name="Distrito" value="<?php echo $id = $_GET['Distrito']; ?>"><br>
        <br>
        Concelho: <input type="text" name="Concelho" value="<?php echo $id = $_GET['Concelho']; ?>"><br>
        <br>
        Freguesia: <input type="text" name="Freguesia" value="<?php echo $id = $_GET['Freguesia']; ?>"><br>
        <br>
        Artigo Matricial: <input type="text" name="artigoMatricial" value="<?php echo $id = $_GET['artigoMatricial']; ?>"><br>
        <br>
        Culturas: <input type="text" name="Culturas" value="<?php echo $id = $_GET['Culturas']; ?>"><br>
        <br>
        Id do Proprietário: <input type="text" name="Proprietarios_idProprietarios" value="<?php echo $id = $_GET['Proprietarios_idProprietarios']; ?>"><br>
        <br>
        <button type="submit">Editar</button>
    </form>
    <form action="propriedades.php" method="post">
    <br>
    <button type="submit">Voltar</button></form>
</body>
</html>