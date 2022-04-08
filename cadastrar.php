<?php include "cabecalho.php" ?>

<body>
    <nav class="nav-extended red lighten-1">
        <div class="nav-wrapper">
            <!-- <a href="#" class="brand-logo center">CineMarvel</a> -->
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right ">
                <li>
                    <a href="galeria.php">Galeria</a>
                </li>
                <li class="active">
                    <a href="cadastrar.php">Cadastrar</a>
                </li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CineMarvel</h1>
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