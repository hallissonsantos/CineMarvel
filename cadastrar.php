<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>CineMarvel</title>
</head>

<body>
    <nav class="nav-extended red lighten-1">
        <div class="nav-wrapper">
            <!-- <a href="#" class="brand-logo center">CineMarvel</a> -->
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CineMarvel</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent red darken-2">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card hoverable">
                <div class="card-content ">
                    <span class="card-title ">Cadastrar Filme</span>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo_do_filme" type="text" class="validate" require>
                            <label for="titulo_do_filme">Título do Filme</label>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="input-field col s2">
                            <input id="nota" type="number" step=".5" min=0 max=10 class="validate" require>
                            <label for="nota">Nota</label>
                        </div>
                    </div>

                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn white black-text">
                                <span>Fazer Upload da Capa do Filme</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </form>

                    <div class="card-action white-text">
                        <a class="waves-effect waves-light btn red lighten-3" href="galeria.php">Cancelar</a>
                        <a href="#" class="waves-effect waves-light btn red darken-2">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>