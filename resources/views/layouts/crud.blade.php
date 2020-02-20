<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            label {
                display: block;
                font-weight: bolder;
            }
            .erro {
                border: 1px solid red;
                background-color: beige;
            }
        </style>
        <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>@yield('titulo')</h1>
                </div>
            </div>
            @if ($errors->isNotEmpty())
            <!-- Mensagens de erro -->
            <div class="row erro">
                <div class="col-12">
                    <h2>ERRO</h2>
                    <ul>
                        @foreach ($errors->all() as $mensagem)
                        <li>{{ $mensagem }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- fim mensagens de erro -->
            @endif
            @yield('corpo')
        </div>
    </body>
</html>
