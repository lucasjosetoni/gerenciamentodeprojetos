<?php
include('verificalogin.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Gerenciar Projetos</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
         
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="home.php" class="nav-item nav-link active">Home</a>
                    <a href="projetos.php" class="nav-item nav-link ">Projetos</a>
                    <a href="tarefas.php" class="nav-item nav-link">Tarefas</a>
                    <a href="relatorio.php" class="nav-item nav-link">Relatório</a>
                    <a href="time.php" class="nav-item nav-link">Time</a>
                    <a href="usuarios.php" class="nav-item nav-link">Usuários</a>                
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">  
                <h1 class="display-4 m-0"><span class="text-primary">Sistema</span> Gerenciamento de Projetos</h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Projetos</h3>
                        <p>Todo projeto requer organição, é necessario se atentar a toda etapa de desenvolvimento e progressão do projeto...</p>
                        <a class="text-uppercase font-weight-bold" href="">Leais Mais</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Time</h3>
                        <p>A habilidade mais requisita em um profissional no seculo XXI é o trabalho em equipe, a troca de experiencias de um time..</p>
                        <a class="text-uppercase font-weight-bold" href="">Leais Mais</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Relatórios</h3>
                        <p>Agrupar todos os dados do projeto atuais ou anterios, vai auxliar o gestor em toda etapa seja de maturação ou elaboração...</p>
                        <a class="text-uppercase font-weight-bold" href="">Leias Mais</a>
                    </div>
                </div>
</body>
</html>
