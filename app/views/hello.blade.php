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
<body class="hands-background">

<div class="row">
    <div class="large-12 columns">
        <h1>Diccionario en señas</h1>
        <hr/>
    </div>
</div>

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

<div class="row">
    <div class="large-12 columns">
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
            @foreach ($categories as $category)
            <li>
                <!--<a href="#" data-reveal-id="categoriaModal">-->
                <a href="{{ url('categories') . '/' . $category->id_categoria }}">
                    <div class="panel">
                        <div class="text-center">
                            <img class="img-categoria" src="http://placehold.it/250x200&text=Imagen">
                            <h3 class="bold">{{ urldecode($category->nombre) }}</h3>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div id="gestoModal" class="reveal-modal" data-reveal>
    <ul class="gesto-slider" data-orbit>
        <li data-orbit-slide="headline-1">
            <div>
                <div class="row">
                    <div class="large-4 columns">
                        <div class="text-center">
                            <img src="http://placehold.it/300x400&text=Video">
                        </div>
                    </div>
                    <div class="large-8 columns">
                        <h2>Título del gesto 1</h2>
                        <hr/>
                        <h4>Ejemplo</h4>
                        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                            <li>
                                <div class="text-center">
                                    <img src="http://placehold.it/250x150&text=Imagen 1">
                                    <h5>Título 1</h5>
                                </div>
                            </li>
                            <li>
                                <div class="text-center">
                                    <img src="http://placehold.it/250x150&text=Imagen 2">
                                    <h5>Título 2</h5>
                                </div>
                            </li>
                            <li>
                                <div class="text-center">
                                    <img src="http://placehold.it/250x150&text=Imagen 3">
                                    <h5>Título 3</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li data-orbit-slide="headline-2">
            <div>
                <div class="row">
                    <div class="large-4 columns">
                        <div class="text-center">
                            <img src="http://placehold.it/300x400&text=Video">
                        </div>
                    </div>
                    <div class="large-8 columns">
                        <h2>Título del gesto 2</h2>
                        <hr/>
                        <h4>Ejemplo</h4>
                        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                            <li>
                                <div class="text-center">
                                    <img src="http://placehold.it/250x150&text=Imagen 1">
                                    <h5>Título 1</h5>
                                </div>
                            </li>
                            <li>
                                <div class="text-center">
                                    <img src="http://placehold.it/250x150&text=Imagen 2">
                                    <h5>Título 2</h5>
                                </div>
                            </li>
                            <li>
                                <div class="text-center">
                                    <img src="http://placehold.it/250x150&text=Imagen 3">
                                    <h5>Título 3</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li data-orbit-slide="headline-3">
            <div>
                <h2>Headline 3</h2>
                <h3>Subheadline</h3>
            </div>
        </li>
    </ul>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="categoriaModal" class="reveal-modal" data-reveal>
<div class="row">
<div class="large-12 columns">
<h3 class="rammetto-font">ABECEDARIO</h3>
<hr/>
<ul class="small-block-grid-2 medium-block-grid-6">
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">A</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">B</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">C</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">D</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">E</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">F</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">G</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">H</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">I</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">J</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">K</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">L</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">M</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">N</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">Ñ</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">O</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">P</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">Q</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">R</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">S</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">T</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">U</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">V</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">W</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">X</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">Y</h2>
            </div>
        </div>
    </a>
</li>
<li>
    <a href="#" data-reveal-id="gestoModal">
        <div class="panel panel-titulo-gesto">
            <div class="text-center">
                <h2 class="titulo-gesto">Z</h2>
            </div>
        </div>
    </a>
</li>
</ul>
</div>
</div>
<a class="close-reveal-modal">&#215;</a>
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
