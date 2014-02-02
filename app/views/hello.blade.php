<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diccionario en señas | Fundación Amigos del Gesto</title>
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
            <div class="row collapse">
                <div class="small-8 columns">
                    <input type="text" placeholder="Categoría o gesto...">
                </div>
                <div class="small-4 columns">
                    <a href="#" class="button postfix radius">Buscar&nbsp;&nbsp;<i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <h3 class="bowlby-font category-title">Categorías</h3>
        <div id="lista-categorias">
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                @foreach ($categories as $category)
                <li>
                    <!--<a href="#" data-reveal-id="categoriaModal">-->
                    <a href="{{ url('categories') . '/' . $category->id_categoria }}">
                        <div class="panel">
                            <div class="text-center">
                                <img class="img-categoria" src="{{ url($category->url_imagen) }}">
                                <h3 class="bold">{{ urldecode($category->nombre) }}</h3>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/foundation.min.js') }}"></script>
<script>
    $(document).foundation({
        orbit: {
            animation: 'slide',
            timer_speed: 1000,
            pause_on_hover: true,
            resume_on_mouseout: false,
            animation_speed: 500,
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
