<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Cita</title>
</head>

<body>
    <div class="container">
        <div class="col-12 text-center">
            <div class="alert alert-success" role="alert">
                <h1 class="mb-0" style="color: green;">Editar Medico</h1>
            </div>
        </div>
        <p></p>
        <p></p>
        <form method="POST" action="{{ route('citas.update', ['cita' => $cita->id]) }}">

            @method('put')
            @csrf

            <hr>
            <br>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="id" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled" placeholder="Codigo">
                        <!-- <div id="idHelp" class="form-text">Codigo del cita</div> -->
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="horario_fecha" class="form-label">Fecha/Cita</label>
                        <input type="datetime-local" class="form-control" id="Fecha/Cita" name="Fecha/Cita">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="medico" class="form-label">Médico</label>
                        <select class="form-select" id="medico" name="medico_id">
                            <option selected disabled>Selecciona un médico</option>
                            <option value="1">Médico 1</option>
                            <option value="2">Médico 2</option>
                            <option value="3">Médico 3</option>
                        </select>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="paciente_id" class="form-label">Paciente</label>
                        <select class="form-select" id="paciente_id" name="paciente_id">
                            <option selected disabled>Selecciona un paciente</option>
                            <option value="1">Paciente 1</option>
                            <option value="2">Paciente 2</option>
                            <option value="3">Paciente 3</option>
                            <!-- Agrega más opciones según tus pacientes -->
                        </select>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="apellido" class="form-label">Paciente</label>
                        <input type="text" class="form-control" id="apellido" name="paciente_id" placeholder="Nombre del paciente">
                    </div>
                </div> -->

                </div>




                <!-- ============================================================================= -->




                <div class="row" style="width: 120%; padding-left: 220px;">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="motivo" class="form-label">Motivo de la cita</label>
                            <textarea class="form-control" id="motivo" name="motivo_consulta" rows="3"></textarea>
                        </div>
                    </div>

                </div>
                <!-- ============================BOTONES=============================================== -->

                <div id="botones" class="row justify-content-start align-items-start" style=" width: 66%;">
                    <div class="col-md-4">
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('medicos.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </div>

                <div id="botones" class="row justify-content-start align-items-start" style=" width: 66%;">
                    <div class="col-md-4">
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('medicos.index') }}" class="btn btn-warning">Cancel</a>
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