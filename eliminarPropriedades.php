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
    $id = filter_input(INPUT_POST, 'idPropriedades');
    $nome = filter_input(INPUT_POST, 'Nome');
    $distrito = filter_input(INPUT_POST, 'Distrito');
    $concelho = filter_input(INPUT_POST, 'Concelho');
    $freguesia = filter_input(INPUT_POST, 'Freguesia');
    $artigo = filter_input(INPUT_POST, 'artigoMatricial');
    $cultura = filter_input(INPUT_POST, 'Culturas');

    if(empty($id) || empty($nome) || empty($distrito) || empty($concelho) || empty($freguesia) || empty($artigo) || empty($cultura)) {
        echo "Todos os campos devem conter valores!";
       exit();
   }
}else {
   echo "Erro, não foi possível editar!";
   exit();
}

$sql = "DELETE FROM propriedadesagricolas WHERE idPropriedades= '$id'";

if (!$resultado = $con->query($sql)) {
    echo " ERRO - Falha ao executar a consulta: \"$sql\" <br>" . $con->error;
    $con->close();
} else {
    echo "O registo foi eliminado com sucesso";
}
$con->close();

?>
<body>
    <form action="propriedades.php" method="post">
    <br>
    <button type="submit">Voltar</button>
    </form>
</body>
</html>