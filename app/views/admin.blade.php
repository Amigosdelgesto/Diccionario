<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panel administrativo | Diccionario de gestos</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
    <script src="{{ asset('js/modernizr.js') }}"></script>
</head>
<body>
<div class="row">
    <div class="large-12 columns">
        <h1>Panel administrativo | Diccionario de gestos</h1>
        <hr/>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <a class="small radius button" data-reveal-id="nuevaCategoriaModal">Agregar categoría</a>
        <a class="small success radius button" data-reveal-id="nuevoGestoModal">Agregar gesto</a>
        <dl class="accordion" data-accordion>
            @if(isset($categories))
                @foreach ($categories as $pos => $category)
                <dd>
                    <a href="#panel{{ $pos + 1 }}">{{ $category->nombre }}</a>
                    <div id="panel{{ $pos + 1 }}" class="content {{ ($pos == 0) ? 'active' : '' }}">
                        <a class="tiny alert radius button right">Eliminar categoría</a>
                        <a class="tiny radius button right">Editar categoría</a>
                        <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-4">
                            @foreach ($category->gestures as $gesture)
                            <li><a><div class="panel text-center">{{ $gesture->titulo }}</div></a></li>
                            @endforeach
                        </ul>
                    </div>
                </dd>
                @endforeach
            @endif
        </dl>
    </div>
</div>

<div id="nuevaCategoriaModal" class="small reveal-modal" data-reveal>
    <h2>Nueva categoría</h2>
    <hr/>
    <form action="{{ url('categories') }}" method="post" enctype="multipart/form-data">
        <label>Título</label>
        <input type="text" name="titulo" placeholder="Título" />
        <label>Imágen</label>
        <input type="file" name="imagen" accept="image/*" />
        <label>Video</label>
        <input type="file" name="video" accept="video/*" />
        <label>Categoría a la que pertenece</label>
        <select name="categoria_padre">
            <option value="null">Ninguna</option>
            @if(isset($categories))

                @foreach ($categories as $category)
                <option value="{{ $category->id_categoria }}">{{ $category->nombre }}</option>
                @endforeach
            @endif
        </select>
        <div class="text-right">
            <input type="submit" class="small success radius button" value="Guardar" />
            <a class="small radius button">Cancelar</a>
        </div>
    </form>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="editarCategoriaModal" class="small reveal-modal" data-reveal>
    <h2>Editar categoría</h2>
    <hr/>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="nuevoGestoModal" class="small reveal-modal" data-reveal>
    <h2>Nuevo gesto</h2>
    <hr/>
    <form action="{{ url('gestures') }}" method="post" enctype="multipart/form-data">
        <label>Título</label>
        <input type="text" name="titulo" placeholder="Título" />
        <label>Definición</label>
        <textarea placeholder="Definición" name="definicion"></textarea>
        <label>Categoría a la que pertenece</label>
        <select name="categoria">
          @if(isset($categories))
            @foreach ($categories as $categories)
            <option value="{{ $categories->id_categoria }}">{{ $categories->nombre }}</option>
            @endforeach
          @endif
        </select>
        <label>Video</label>
        <input type="file" name="video" accept="video/*" />
        <h5>Ejemplos</h5>
        <hr/>
        <div id="lista-ejemplos">

        </div>
        <div class="text-right">
            <a id="btn-nuevo-ejemplo" class="tiny radius button">Agregar ejemplo</a>
            <a id="btn-eliminar-ejemplo" class="tiny alert radius button">Eliminar ejemplo</a>
        </div>
        <hr />
        <div class="text-right">
            <input type="submit" class="small success radius button" value="Guardar" />
            <a class="small radius button">Cancelar</a>
        </div>
    </form>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="editarGestoModal" class="small reveal-modal" data-reveal>
    <h2>Editar gesto</h2>
    <hr/>
    <a class="close-reveal-modal">&#215;</a>
</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/foundation.min.js') }}"></script>
<script>
    $(document).foundation();

    var ejemplos = -1;

    $('#btn-nuevo-ejemplo').click(function(){
        ejemplos = ejemplos + 1;

        var html_ejemplo =
            '<div id="ejemplo' + ejemplos + '" class="ejemplo">' +
                '<label>Título</label>' +
                '<input type="text" name="ej_titulos[' + ejemplos + ']" placeholder="Título" required/>' +
                '<label>Imágen</label>' +
                '<input type="file" name="ej_imagenes[' + ejemplos + ']" accept="image/*" required/>' +
                '</div>';
        $('#lista-ejemplos').append(html_ejemplo);

        if (ejemplos >= 0)
            $('#btn-eliminar-ejemplo').css('display', 'inline-block');
    });

    $('#btn-eliminar-ejemplo').click(function(){
        if (ejemplos >= 0){
            ejemplos = ejemplos - 1;
            $('.ejemplo').last().remove();

            if (ejemplos == -1)
                $('#btn-eliminar-ejemplo').css('display', 'none');
        }
    });

    $('#btn-eliminar-ejemplo').css('display', 'none');
</script>
</body>
</html>
