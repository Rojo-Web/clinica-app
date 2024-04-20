<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Comuna</title>
</head>

<body>
    <div class="container">
        <div class="col-12 text-center">
            <div class="alert alert-success" role="alert">
                <h1 class="mb-0" style="color: green;">Editar Paciente</h1>
            </div>
        </div>
        <p></p>
        <p></p>
        <form method="POST" action="{{ route('pacientes.update', ['paciente' => $paciente->id]) }}">

            @method('put')
            @csrf
            <hr>
            <br>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" required class="form-control" id="name" placeholder="Edit nombre" name="nombre" value="{{$paciente->nombre}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Edit apellido" name="apellido" value="{{$paciente->apellido}}">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id" disabled="disabled" value="{{$paciente->id}}">
                        <div id="codigoHelp" class="form-text">Codigo</div>
                    </div>
                </div>

                <!-- ============================================================================================== -->

                <div class="col-md-4">
                <div class="mb-3">
                    <label for="genero" class="form-label">Genero </label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="M" id="generoM" name="genero" <?php echo ($paciente->genero === "M") ? "checked" : ""; ?>>
                            <label class="form-check-label" for="generoM">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="F" id="generoF" name="genero" <?php echo ($paciente->genero === "F") ? "checked" : ""; ?>>
                            <label class="form-check-label" for="generoF">F</label>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                function toggleGenero(selectedId) {
                    const generoM = document.getElementById('generoM');
                    const generoF = document.getElementById('generoF');

                    if (selectedId === 'generoM' && generoM.checked) {
                        generoF.checked = false;
                    } else if (selectedId === 'generoF' && generoF.checked) {
                        generoM.checked = false;
                    }
                }
            </script>

            <!-- ================================================================================================ -->
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Edit email" value="{{$paciente->email}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{$paciente->fecha_nacimiento}}">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="Edit_direccion" name="direccion"  value="{{$paciente->direccion}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono"  value="{{$paciente->telefono}}">
                    </div>
                </div>
            </div>


            <div id="botones" class="row justify-content-start align-items-start" style=" width: 66%;">
                <div class="col-md-4">
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('pacientes.index') }}" class="btn btn-warning">Cancel</a>
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
