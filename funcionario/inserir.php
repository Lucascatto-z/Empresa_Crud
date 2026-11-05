<?php 
$nome = $_POST['nome']; // o $_POST[''] obtem o dado do form
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$admissao = $_POST['admissao'];

// Criar a instrução SQL

$sql = "insert into funcionario(nome, email, cargo, salario, data_admissao) values('$nome','$email','$cargo', $salario, '$admissao')";

require_once("../conexao.php"); //Chama o aarquivo de conexão
$resultado = mysqli_query($conexao, $sql);
if ($resultado) {
    header("location:listar.php");
}

?>