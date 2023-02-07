<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Meimei</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Configuracion
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Usuarios</a></li>
                            <li><a class="dropdown-item" href="#">Permisos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Empresas</a></li>
                            <li><a class="dropdown-item" href="#">Sucursales</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="index.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Nuevo Usuario
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Usuario Nuevo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="id" id="id">
                                <label for="floatingInputGroup1">Id:</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="nombre" id="nombre">
                                <label for="floatingInputGroup1">Nombre:</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="direccion" id="direccion">
                                <label for="floatingInputGroup1">Direccion:</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope-at"></i></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="correo" id="correo">
                                <label for="floatingInputGroup1">Correo:</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="telefono" id="telefono">
                                <label for="floatingInputGroup1">Telefono:</label>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-person-gear"></i></span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="rol" id="rol">
                                <label for="floatingInputGroup1">Rol:</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Guardar Info</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <table class="table table-light table-striped">
            <tbody>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Direccion</td>
                    <td>Correo</td>
                    <td>Telefono</td>
                    <td>Rol</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>