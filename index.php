<!doctype html>
<html lang="pt-BR">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=listar">Listar Usuários</a>
        </li>
        </ul>
        
        </form>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">

                <?php 

                    include("bootstrap.php");
                    include("src/Usuario.php");

                    $loader = new \Twig\Loader\FilesystemLoader('templates');
                    $twig = new \Twig\Environment($loader);

                    switch(@$_REQUEST["page"])
                    {
                        case "novo":
                            echo $twig->render('criar-editar-usuario.html.twig', [
                                'usuario' => null,
                                'edicao' => false,
                            ]);
                            break;

                        case "listar":
                            // include("listar-usuario.php");
                            $usuarioRepository = $entityManager->getRepository('Usuario');
                            $usuarios = $usuarioRepository->findAll();

                            echo $twig->render('listar-usuario.html.twig', [
                                'usuarios' => $usuarios,
                            ]);
                            break;

                        case "salvar":
                            include("salvar-usuario.php");
                            break;

                        case "editar":
                            // include("editar-usuario.php");
                            $id = $_REQUEST["ID"];
                            $usuario = $entityManager->find('Usuario', (int)$id);

                            echo $twig->render('criar-editar-usuario.html.twig', [
                                'usuario' => $usuario,
                                'edicao' => true,
                            ]);
                            break;

                        default:
                            print "Bem Vindo!";
                    }

                ?>
            
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>