<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<x-app-layout>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <div class="alert alert-success" role="alert">
                    <h1 class="mb-0" style="color: green;">MEDICOS</h1>
                </div>
                <a href="{{ route('medicos.create')}}" class="btn btn-success float-start">Agregar </a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Especialidad</th>
                            <th scope="col">Horarios</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Email</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicos as $medico)
                        <tr>
                            <th scope="row">{{$medico->id}}</th>
                            <td>{{$medico->nombre}}</td>
                            <td>{{$medico->apellido}}</td>
                            <td>{{$medico->especialidad}}</td>
                            <td>{{$medico->horarios}}</td>
                            <td>{{$medico->telefono}}</td>
                            <td>{{$medico->email}}</td>

                            <td> <a href="{{route('medicos.edit',['medico'=>$medico->id]) }}" class="btn btn-info">Edit</a>

                                <form action="{{route('medicos.destroy', ['medico' => $medico->id]) }}" method="POST" style="display: inline-block">
                                    @method('delete')
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

</html>
