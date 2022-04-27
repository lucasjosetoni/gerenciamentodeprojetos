<?php
include('verificalogin.php');
?>
<!DOCTYPE html>
<html lang="en">

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
                    <a href="home.php" class="nav-item nav-link ">Home</a>
                    <a href="projetos.php" class="nav-item nav-link ">Projetos</a>
                    <a href="tarefas.php" class="nav-item nav-link active">Tarefas</a>
                    <a href="relatorio.php" class="nav-item nav-link">Relatório</a>
                    <a href="time.php" class="nav-item nav-link">Time</a>
                    <a href="usuarios.php" class="nav-item nav-link">Usuários</a>

                 
                </div>
            </div>
        </nav>
    </div>
  
    <!-- Services End -->
    <div class="control-group" style="width: 1000px;height: 950px;border-right-width: 20px;padding-bottom: 50px;padding-top: 50px;padding-left: 25px;padding-right: 100px;border-left-width: 200px;margin-right: 0px;">
        <button class="btn btn-primary py-3 px-5" type="submit"  target="_blank" id="Clique">Cadastrar Tarefas</button>
        <button class="btn btn-primary py-3 px-5" type="submit" target="_blank" id="Clique1">Visualizar Tarefas</button>
        <button class="btn btn-primary py-3 px-5" type="submit" target="_blank" id="Clique2">Excluir tarefas</button>
        <div id="escondido">
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group">
                    <input type="text" class="form-control p-4" id="name" placeholder="Nome da Tarefa" required="required" data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control p-4" id="email" placeholder="Nome do Projeto" required="required" data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                </div>
               
                <div class="control-group">
                    <input class="form-control p-4" rows="1" id="message" placeholder="Gestor do Projeto" required="required" data-validation-required-message="Please enter your message"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Cadastrar</button>
                </div>
            </form>
        </div>
        <div id="escondido1">
            <iframe src="http://localhost:3000/d-solo/bVjX6u87z/gestao-de-projetos?orgId=1&panelId=4" width="660" height="200" frameborder="0"></iframe>
        </div>
        <div id="escondido2">
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group">
                    <input type="text" class="form-control p-4" id="name" placeholder="Nome da Tarefa" required="required" data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control p-4" id="email" placeholder="Nome do Projeto" required="required" data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                </div>
               
                <div class="control-group">
                    <input class="form-control p-4" rows="1" id="message" placeholder="Gestor do Projeto" required="required" data-validation-required-message="Please enter your message"></input>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Remover</button>
                </div>
            </form>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script> 
    $( "#Clique" ).click(function() {
  $("#escondido").css("display","block");
  $("#escondido1").css("display","none");
  $("#escondido2").css("display","none");
});
$( "#Clique1" ).click(function() {
  $("#escondido1").css("display","block");
  $("#escondido").css("display","none");
  $("#escondido2").css("display","none");
});
$( "#Clique2" ).click(function() {
  $("#escondido1").css("display","none");
  $("#escondido").css("display","none");
  $("#escondido2").css("display","block");

});
    </script>
</script>

</body>

</html>