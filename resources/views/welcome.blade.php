<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--llamado a los estilos de la pagina-->
        <link rel="stylesheet" href="{{asset('css/crudDiseno.css')}}">
        
        <!--llamado a imagen del logo-->
        <link rel="icon" href="{{asset('img/logoSena.png') }}" type="image/png">
        
        <!--cdm para los estilos de boostrap que se van a usar-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
        
        <!--titulo de la pestaña-->
        <title>Diseño Curricular</title>
    </head>
  <!-- Se agregó la etiqueta body -->
    <body>
        <h1 class="title">Campos Diseño Curricular</h1>
        <div class="box">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id Red</th>
                        <th scope="col">Id Área</th>
                        <th scope="col">Nombre Programa</th>
                        <th scope="col">Código Programa</th>
                        <th scope="col">Versión Programa</th>
                        <th scope="col">Fecha Inicio</th>
                        <th scope="col">Fecha Fin</th>
                        <th scope="col">Duración Programa</th>
                        <th scope="col">Tipo Programa</th>
                    </tr>
                </thead>

                <!-- Aquí puedes agregar los datos de las filas -->
                <tbody class="table-group-divider">
                    @foreach ($datos as $item)
                        <tr>
                          <th>{{$item->idRed}}</th>
                          <th>{{$item->idArea}}</th>
                          <th>{{$item->nombrePrograma}}</th>
                          <th>{{$item->codigoPrograma}}</th>
                          <th>{{$item->versionPrograma}}</th>
                          <th>{{$item->fechaInicio}}</th>
                          <th>{{$item->fechaFin}}</th>
                          <th>{{$item->duracionPrograma}}</th>
                          <th>{{$item->tipoPrograma}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Llamado del script de Boostrap --> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
