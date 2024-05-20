<?php
include("db/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
    <title>Sistema Agendador</title>
</head>
<body>
    <header class="bg-dark">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href class="navbar-brand">
            <img src="img/logo_agendador.png" alt="Sis-Agendador" width="120">
            </a>
            
            <div class="collapse navbar-collapse"id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li> 
                    <li class="nav-item "><a class="nav-link" href="index.php?menuop=contatos">Contato</a> </li>
                    <li class="nav-item "><a class="nav-link" href="index.php?menuop=tarefas">Tarefas</a> </li>
                    <li class="nav-item "><a class="nav-link" href="index.php?menuop=eventos">Evento</a> </li>
                </ul>
            </div>
        </nav>
        </div>
    </header>
    <main>
        <div class="container">
    <?php
        $conexao;
        $menuop=(isset($_GET["menuop"]))?$_GET["menuop"]:"home";
            
                switch ($menuop) {
                    case 'home':
                        include("paginas/home/home.php");
                        break;

                    case 'contatos':
                        include ("paginas/contatos/contatos.php");
                        break;

                    case'cad-contato':
                            include ("paginas/contatos/cad-contato.php");
                            break;

                     case'inserir-contato':
                                include ("paginas/contatos/inserir-contato.php");
                                break;

                                case'editar-contato':
                                    include ("paginas/contatos/editar-contato.php");
                                    break;
                            
                    case 'tarefas':
                            include("paginas/tarefas/tarefas.php");
                            break;

                    case 'eventos':
                            include ("paginas/eventos/eventos.php");
                            break;
                    default:
                    include("paginas/home/home.php");
                        break;
                }
        ?>
        </div>
    </main>
    <footer class="container fluid fixed-bttom bg-dark">
        <div class="text-center">Arielzin Agendador</div>
    </footer>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>