<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Búsqueda | Diccionario en señas</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/amigosdelgesto.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Bowlby+One+SC|Holtwood+One+SC|Rammetto+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <script src="{{ asset('js/modernizr.js') }}"></script>
</head>
<body class="wood-background">

<header>
    <div class="row">
        <!--<div class="medium-2 columns text-center">
            <img class="logo" src="{{ asset('img/logo.png') }}" alt="Fundación Amigos del Gesto"/>
        </div>-->
        <div class="large-12 columns">
            <h6 id="foundation-name" class="gray">Fundación Amigos del Gesto</h6>
            <h1 class="bowlby-font gray">Diccionario en señas</h1>
        </div>
    </div>
</header>

<div id="subheader">
    <div class="row">
        <div class="medium-8 large-6 columns right">
            <form id="search-form" action="{{ url('search') }}" method="get">
                <div class="row collapse">
                    <div class="small-8 columns">
                        <input name="q" type="text" placeholder="Categoría o gesto...">
                    </div>
                    <div class="small-4 columns">
                        <button type="submit" class="button postfix radius">Buscar&nbsp;&nbsp;<i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <h3 class="bowlby-font category-title">Resultados para "{{$keyword}}"</h3>
        <div id="lista-gestos">
            <ul class="small-block-grid-1 medium-block-grid-3">

            </ul>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/foundation.min.js') }}"></script>
</body>
</html>
