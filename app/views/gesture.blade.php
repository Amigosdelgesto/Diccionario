<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diccionario de gestos | Abecedario</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/amigosdelgesto.css') }}" />
    <link href='http://fonts.googleapis.com/css?family=Bowlby+One+SC|Holtwood+One+SC|Rammetto+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <script src="{{ asset('js/modernizr.js') }}"></script>
</head>
<body class="hands-background">

<div class="row">
    <div class="large-12 columns">
        <h1>Diccionario de gestos</h1>
        <hr/>
    </div>
</div>

<div class="row">
    <div class="medium-7 large-6 columns">
        <ul class="breadcrumbs">
            <li><a href="{{ url('/') }}">Categorías</a></li>
            <li><a href="{{ url('category' . '/' . $category->id_categoria) }}">{{ $category->nombre }}</a></li>
            <li class="current"><a href="#">{{ $gesture->titulo }}</a></li>
        </ul>
    </div>
    <div class="medium-5 large-6 columns">
        <div class="row collapse">
            <div class="small-10 columns">
                <input type="text" placeholder="Categoría o gesto...">
            </div>
            <div class="small-2 columns">
                <a href="#" class="button postfix radius"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="medium-6 large-4 columns">
        <div class="text-center">
            <!--<img src="http://placehold.it/300x400&text=Video">-->
            <video src="{{ asset('test-resources/videos/video1.webm') }}" autoplay></video>
        </div>
    </div>
    <div class="medium-6 large-8 columns">
        <h2>{{ $gesture->titulo }}</h2>
        <hr/>
        @if (!empty($gesture->examples))
        <h4>Ejemplo</h4>
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
            @foreach ($gesture->examples as $example)
            <li>
                <div class="text-center">
                    <img src="{{ $example->url_imagen }}">
                    <h5>{{ $example->titulo }}</h5>
                </div>
            </li>
            @endforeach
        </ul>
        @else
        <h4>Definición</h4>
        <p>{{ $gesture->definicion }}</p>
        @endif
    </div>
</div>

<div id="directional-btns" class="row">
    <div class="large-12 columns text-center">
        @if (!empty($previous))
        <a href="{{ $previous->id_gesto }}" class="small button"><i class="fa fa-chevron-left"></i> Gesto anterior</a>
        @endif

        @if (!empty($next))
        <a href="{{ $next->id_gesto }}" class="small button">Gesto siguiente <i class="fa fa-chevron-right"></i></a>
        @endif
    </div>
</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/foundation.min.js') }}"></script>
<script>
    $(document).foundation({
        orbit: {
            animation: 'slide',
            timer_speed: 10000,
            pause_on_hover: true,
            resume_on_mouseout: false,
            animation_speed: 200,
            navigation_arrows: true,
            bullets: false,
            next_on_click: true,
            timer: false
        }
    });

    $(document).on('opened', '#gestoModal', function () {
        $(window).trigger('resize');
    });
</script>
</body>
</html>