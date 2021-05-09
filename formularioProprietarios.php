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
        <h1>Inserir os dados do Proprietário</h1>
    </div>
    <form id="formulario" action="inserirProprietario.php" method="POST">
        Nome: <input type="text" name="T_Nome"><br>
        <br>
        Morada: <input type="text" name="T_Morada"><br>
        <br>
        NF: <input type="text" name="T_NF"><br>
        <br>
        Telefone: <input type="text" name="T_Telefone"><br>
        <br>
        Email: <input type="text" name="T_Email"><br>
        <br>
        <button type="submit">Inserir Registo</button>
    </form>
    <form action="proprietarios.php" method="post"><br>
        <button type="submit">Voltar</button>
    </form>
</body>
</html>