<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                @if(config('tablar.display_alert'))
                    @include('tablar::common.alert')
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="Tiluto">Registro del Medico</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $registro->name }}
                        </div>
                        <div class="form-group">
                            <strong>Diagnostico:</strong>
                            {{ $registro->Diagnostico }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>