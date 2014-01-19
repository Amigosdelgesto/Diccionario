<?php
define("CATEGORY_PATH","../resources/categories/");
define('NEW_CATEGORY_RULES',serialize(
    array(
            'titulo' => 'required|unique:categoria,nombre',
            'imagen' => 'required|image',
        )
    )
);
/*
|------------------------------------------------------------
|              Controlador para las categorias
|------------------------------------------------------------
*/
class CategoryController extends BaseController {

    /*
    |------------------------------------------------------------
    |         Función que permite agregar una categoria
    |------------------------------------------------------------
    */
    public function newCategory() {
        if (ValidationManager::isValid(Input::all(),unserialize(NEW_CATEGORY_RULES))) {
            $category = new Category();
            $category->nombre = Input::get('titulo');
            $category->id_categoria_padre = Input::get('categoria_padre');
            $category->url_imagen = FileManager::moveFile(Input::file('imagen'),CATEGORY_PATH.$category->nombre);
            $category->url_video = FileManager::moveFile(Input::file('video'),CATEGORY_PATH.$category->nombre);
            $category->save();
            return View::make('admin', array('categories' => Category::all()));
        } else {
            print_r(ValidationManager::getFails(Input::all(),unserialize(NEW_CATEGORY_RULES)));
        }
    }

    /*
    |------------------------------------------------------------
    |         Función que permite agregar una categoria
    |------------------------------------------------------------
    */
    public function deleteCategory($id) {
        $category = Category::find($id);
    }

}