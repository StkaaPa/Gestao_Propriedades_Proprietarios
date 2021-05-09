<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = filter_input(INPUT_POST, 'idProprietarios');
    $nome = filter_input(INPUT_POST, 'Nome');
    $morada = filter_input(INPUT_POST, 'Morada');
    $nf = filter_input(INPUT_POST, 'NF');
    $telefone = filter_input(INPUT_POST, 'Telefone');
    $email = filter_input(INPUT_POST, 'Email');

    if(empty($id) || empty($nome) || empty($morada) || empty($nf) || empty($telefone) || empty($email)) {
        echo "Todos os campos devem conter valores!";
       exit();
   }
}else {
   echo "Erro, não foi possível editar!";
   exit();
}

$sql = "DELETE FROM proprietarios WHERE idProprietarios= '$id'";

if (!$resultado = $con->query($sql)) {
    echo " ERRO - Falha ao executar a consulta: \"$sql\" <br>" . $con->error;
    $con->close();
} else {
    echo "O registo com id $id foi editado com sucesso";
}
$con->close();

?>
<body>
    <form action="proprietarios.php" method="post">
    <br>
    <button type="submit">Voltar</button>
    </form>
</body>
</html>