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
    //o id é autoincrement por isso não é necessário introduzir
    $nome = filter_input(INPUT_POST, 'T_Nome');
    $morada = filter_input(INPUT_POST, 'T_Morada');
    $nf = filter_input(INPUT_POST, 'T_NF');
    $telefone = filter_input(INPUT_POST, 'T_Telefone');
    $email = filter_input(INPUT_POST, 'T_Email');

    //validar os dados recebidos do formulário
    if(empty($nome) || empty($morada) || empty($nf) || empty($telefone) || empty($email)) {
         echo "Todos os campos devem conter valores!";
        exit();
    }
}else {
    echo "Erro, formulário não submetido!";
    exit();
}

//consulta sql
$sql = "INSERT INTO proprietarios (Nome, Morada, NF, Telefone, Email) VALUES ('$nome','$morada','$nf','$telefone','$email')";
if(!$resultado = $con->query($sql)) {
     die("Falha ao executar a consulta! \"$sql\".".$con->error);
}else {
     echo "Novo Registo inserido com sucesso na tabela!!!";
}
?>
<body>
<form action="proprietarios.php" method="POST">
<br>
<button type="submit">Voltar</button>
</form>
</body>
</html>