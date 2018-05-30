<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8" />
            <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity= "sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin= "anonymous" > 
            <title>Mi primer Listado!</title>
        </head>
        <body>
            <h1>LISTADO!</h1>
            <!– Para que el sitio sea RESPONSIVE o sea se adapte a todos los dispositivos.
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Razon Social</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">CP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedores as $proveedor)
                        <tr>
                        <th scope="row">1</th>
                        <td>{{ $proveedor->razon_social }}</td>
                        <td>{{ $proveedor->domicilio }}</td>
                        <td>{{ $proveedor->codpostal }}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>
            </div>
        </body>
    </html>