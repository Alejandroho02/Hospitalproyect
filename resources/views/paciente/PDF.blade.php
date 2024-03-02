<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <style>

        .Titulo{
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
            font-size: 30px;
            color: white;
            text-align: center;
            background-color: blue;
        }
        .text{
            font-size: 15px;
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
        }
    </style>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="Titulo">Detalles del paciente</h3>
                        </div>
                        <div class="card-body">
                            
                                            <div class="text">
                                            <strong>Nombre:</strong>
                                            {{ $paciente->nombre }}
                                            </div>
                                            <br>
                                            <div class="text">
                                            <strong>Apellido:</strong>
                                            {{ $paciente->apellido }}
                                            </div>
                                            <br>
                                            <div class="text">
                                            <strong>Direccion:</strong>
                                            {{ $paciente->direccion }}
                                            </div>
                                            <br>
                                            <div class="text">
                                            <strong>Fecha Nacimiento:</strong>
                                            {{ $paciente->fecha_nacimiento }}
                                            </div>
                                            <br>
                                            <div class="text">
                                            <strong>Descripcion:</strong>
                                            {{ $paciente->descripcion }}
                                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>