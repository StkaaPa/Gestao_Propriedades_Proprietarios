<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inserir Propriedades</title>
</head>
<body>
    <div class="texto">
        <h1>Inserir os dados da nova propriedade</h1>
    </div>
    <form id="formulario" action="inserirPropriedade.php" method="POST">
        Nome: <input type="text" name="T_Nome"><br>
        <br>
        Distrito: <input type="text" name="T_Distrito"><br>
        <br>
        Concelho: <input type="text" name="T_Concelho"><br>
        <br>
        Freguesia: <input type="text" name="T_Freguesia"><br>
        <br>
        Artigo Matricial: <input type="text" name="T_artigoMatricial"><br>
        <br>
        Culturas Existentes: <input type="text" name="T_Culturas"><br>
        <br>
        Id do Proprietário: <input type="text" name="T_Proprietarios_idProprietarios"><br>
        <br>
        <button type="submit">Inserir Registo</button>
    </form>
    <form action="propriedades.php" method="post"><br>
        <button type="submit">Voltar</button>
    </form>
</body>
</html>