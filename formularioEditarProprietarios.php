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
        <h1>Editar os dados de um Proprietário</h1>
    </div>
    <form id="formulario" action="editarProprietarios.php" method="post">
        <input type="hidden" name="idProprietarios" value="<?php echo $id = $_GET['idProprietarios'];?>">
        Nome: <input type="text" name="Nome" value="<?php echo $id = $_GET['Nome']; ?>"><br>
        <br>
        Morada: <input type="text" name="Morada" value="<?php echo $id = $_GET['Morada']; ?>"><br>
        <br>
        NF: <input type="text" name="NF" value="<?php echo $id = $_GET['NF']; ?>"><br>
        <br>
        Telefone: <input type="text" name="Telefone" value="<?php echo $id = $_GET['Telefone']; ?>"><br>
        <br>
        Email: <input type="text" name="Email" value="<?php echo $id = $_GET['Email']; ?>"><br>
        <br>
        <button type="submit">Editar</button>
    </form>
    <form action="proprietarios.php" method="post">
    <br>
        <button type="submit">Voltar</button>
    </form>
</body>