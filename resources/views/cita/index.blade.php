<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <div class="alert alert-success" role="alert">
                    <h1 class="mb-0" style="color: green;">CITAS</h1>
                </div>
                <a href="{{ route('citas.create')}}" class="btn btn-success float-start">Agregar </a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Medico</th>
                            <th scope="col">paciente</th>
                            <th scope="col">F/Cita</th>
                            <th scope="col">Motivo/Consulta</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($citas as $cita)
                        <tr>
                            <th scope="row">{{$cita->id}}</th>
                            <td>{{$cita->paciente}}</td>
                            <td>{{$cita->medico}}</td>
                            <td>{{$cita->F/Cita}}</td>
                            <td>{{$cita->Motivo/Consulta}}</td>
                            

                            
                        </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>