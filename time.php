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
                    <a href="tarefas.php" class="nav-item nav-link ">Tarefas</a>
                    <a href="relatorio.php" class="nav-item nav-link ">Relatório</a>
                    <a href="time.php" class="nav-item nav-link active">Time</a>
                    <a href="usuarios.php" class="nav-item nav-link">Usuários</a>
                 
                </div>
            </div>
        </nav>
    </div>

        <div class="container-fluid pt-5">
            <div class="d-flex flex-column text-center mb-5 pt-5">
              
                <h1 class="display-4 m-0">Cadastre o Time do  <span class="text-primary">Projeto</span></h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="name" placeholder="Nome do Time" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control p-4" id="email" placeholder="Nome do Projeto" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Participante" required="required" data-validation-required-message="Please enter a subject" />
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
                </div>
               
            </div>
        </div>
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="js/main.js"></script>
</body>

</html>