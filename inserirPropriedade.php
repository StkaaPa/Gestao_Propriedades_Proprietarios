<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Propriedade</title>
</head>

<?php 
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //o id é autoincrement por isso não é necessário introduzir
    $nome = filter_input(INPUT_POST, 'T_Nome');
    $distrito = filter_input(INPUT_POST, 'T_Distrito');
    $concelho = filter_input(INPUT_POST, 'T_Concelho');
    $freguesia = filter_input(INPUT_POST, 'T_Freguesia');
    $artigo = filter_input(INPUT_POST, 'T_artigoMatricial');
    $cultura = filter_input(INPUT_POST, 'T_Culturas');
    $idproprietario = filter_input(INPUT_POST, 'T_Proprietarios_idProprietarios');

    //validar os dados recebidos do formulário
    if(empty($nome) || empty($distrito) || empty($concelho) || empty($freguesia) || empty($artigo) || empty($cultura) || empty($idproprietario)) {
        echo "Todos os campos devem conter valores!";
        exit();
    }
}else {
    echo "Erro, formulário não submetido!";
    exit();
}

//consulta sql
$sql = "INSERT INTO propriedadesagricolas (Nome, Distrito, Concelho, Freguesia, artigoMatricial, Culturas, Proprietarios_idProprietarios) VALUES ('$nome','$distrito','$concelho','$freguesia','$artigo','$cultura','$idproprietario')";
if(!$resultado = $con->query($sql)) {
     die("Falha ao executar a consulta! \"$sql\".".$con->error);
}else {
     echo "Novo Registo inserido com sucesso na tabela!!!";
}
?>
<body>
<form action="propriedades.php" method="POST">
<br>
<button type="submit">Voltar</button>
</form>
</body>
</html>