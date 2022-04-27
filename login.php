<?php
session_start();
include("conexao.php");
if(empty($_POST['user']) || empty($_POST['pass'])) {
        echo ("<script>alert('Informe os campos solicitados corretamente!'); location.href='index.php';</script>");
}

$user = $_POST['user'];
$pass = $_POST['pass'];
$func = $_POST['func'];


echo $query = "SELECT setor, nome from usuarios WHERE nome = '{$user}' and senha = md5('{$pass}') and func='{$func}'";

$result = mysqli_query($link,$query);
print_r($result);

if(mysqli_num_rows($result) == 1) {
         $row = mysqli_fetch_array($result);
        print_r($row);
         $_SESSION['empresa'] = $row["setor"];
        $_SESSION['user'] = $row["nome"];     
        header('Location: home.php');
        exit();
} else {
        $_SESSION['nao_autenticado'] = true;
       echo ("<script>alert('Login incorreto'); location.href='index.php';</script>");

}
?>
