<?php
include("conexao.php");
        $nome = $_POST['nomeprojeto'];
        $gestor = $_POST['gestorprojeto'];
        $inicio = $_POST['inicio'];
        $fim = $_POST['fim'];
        $detalhes = $_POST['detalhes'];
        session_start();
        $usuario = $_SESSION['user'];
        $query = "SELECT * from usuarios WHERE nome = '{$usuario}' and func='gerente'";
        $result = mysqli_query($link,$query);
       
?>  

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Gerenciar Projetos</title>
    <style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
 
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
     
      
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="home.php" class="nav-item nav-link ">Home</a>
                    <a href="projetos.php" class="nav-item nav-link active ">Projetos</a>
                    <a href="tarefas.php" class="nav-item nav-link ">Tarefas</a>
                    <a href="relatorio.php" class="nav-item nav-link ">Relatório</a>
                    <a href="time.php" class="nav-item nav-link ">Time</a>
                    <a href="usuarios.php" class="nav-item nav-link">Usuários</a>
                 
                </div>
            </div>
        </nav>
    </div>
        <div class="container-fluid pt-5">
            <div class="d-flex flex-column text-center mb-5 pt-5">     
            <table>
            <?php if(mysqli_num_rows($result) == 1) {
            $query_inserir = "INSERT INTO `projeto` (`nome`, `gestordoprojeto`, `inicio`, `fim`, `detalhes`) VALUES ('{$nome}', '{$gestor}', '{$inicio}', '{$fim}', '{$detalhes}')";
            $vai = mysqli_query($link,$query_inserir);

             echo "<tr> 
             <th>Nome do Projeto</th>
             <th>Gestor do Projeto</th>
             <th>Inicio</th>
             <th>Fim</th>
             <th>Detalhes</th>
             <tr>
             <td>$nome</td>
             <td>$gestor</td>
             <td>$inicio</td>
             <td>$fim</td>
             <td>$detalhes</td>
             </tr>
            </tr>";
            } else {
                echo ("<script>alert('Voce não tem privilegios para adicionar um projeto'); location.href='projetos.php';</script>");

            }
            ?>
            </table>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>

                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="js/main.js"></script>
</body>

</html>
