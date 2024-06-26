<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Medico</title>
</head>

<body>

    <div class="container">
        <div class="col-12 text-center">
            <div class="alert alert-success" role="alert">
                <h1 class="mb-0" style="color: green;">Agregar Medico</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('medicos.store')}}">
            @csrf

            <hr>


            <div class="row justify-content-center align-items-start">
                <div class="col-md-4" style="margin-right: 430px;">
                    <div class="mb-3">
                        <label for="id" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled" placeholder="Codigo">
                        <!-- <div id="idHelp" class="form-text">Codigo del medico</div> -->
                    </div>
                </div>

                <!-- ================================================================================================ -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                        </div>
                    </div>

                </div>

                <!-- ================================================================================================ -->

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="especialidad" class="form-label">Especialidad</label>
                            <input type="text" class="form-control" id="email" name="especialidad" placeholder="Especialidad">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="horario_fecha" class="form-label">Horario y Fecha</label>
                            <input type="datetime-local" class="form-control" id="horario_fecha" name="horarios">
                        </div>
                    </div>


                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Email</label>
                                <input type="email" class="form-control" id="direccion" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                            </div>
                        </div>

                        <!-- ============================BOTONES=============================================== -->

                        <div id="botones" class="row justify-content-start align-items-start" style=" width: 66%; margin-right:10px">
                            <div class="row align-items-center mt-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger">Save</button>
                                    <a href="{{ route('medicos.index') }}" class="btn btn-warning ms-2">Cancel</a>
                                </div>
                            </div>
                        </div>

                    </div>

        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>