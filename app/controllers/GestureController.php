<?php
define("GESTURE_PATH","../resources/gestures/");
define("EXAMPLE_PATH","../resources/examples/");
define('NEW_GESTURE_RULES',serialize(
    array(
        'titulo' => 'required',
        'categoria' => 'required',
        'video' => 'required'
        )
    )
);
/*
|------------------------------------------------------------
|               Controlador para los gestos
|------------------------------------------------------------
*/
class GestureController extends BaseController {

    /*
    |------------------------------------------------------------
    |           Función que permite agregar un gesto
    |------------------------------------------------------------
    */
    public function newGesture() {
        if (ValidationManager::isValid(Input::all(),unserialize(NEW_GESTURE_RULES))) {
            $gesture = new Gesture();
            $gesture->titulo = urlencode(Input::get('titulo'));
            $gesture->id_categoria = Input::get('categoria');
            $gesture->definicion = Input::get('definicion');
<<<<<<< HEAD
            $gesture->url_video =  FileManager::moveFile(Input::file('video'),GESTURE_PATH.$gesture->titulo."/");
=======
            $gesture->url_video = GESTURE_PATH.str_replace(' ','',$gesture->titulo).'/'.FileManager::getName(Input::file('video'));
>>>>>>> e8055aeea032ea4fcfba6fa85dcb3727f835767c
            if ($gesture->save()) {
                $this->newExamples($gesture, Input::get("ej_titulos"),Input::file("ej_imagenes"));
            }
        }
        return View::make('admin', array('categories' => Category::all()));
    }

    /*
    |------------------------------------------------------------
    |      Función que permite agregar ejemplos de un gesto :)
    |------------------------------------------------------------
    */
    public function newExamples($gesture,$ej_titles,$ej_images) {
        $gesture->titulo = str_replace(' ','',$gesture->titulo);
        for ($i=0; $i<sizeof($ej_titles); $i++) {
            $microtime = microtime(TRUE);
            $gesture->examples()->save(
                new Example(array(
                    'titulo' => $ej_titles[$i],
                    'url_imagen' => FileManager::moveFile($ej_images[$i],GESTURE_PATH.$gesture->titulo."/examples/",$microtime)
                    )));
        }
    }

    /*
    |------------------------------------------------------------
    |      Función que permite eliminar un gesto x.x
    |------------------------------------------------------------
    */
    public function deleteGesture($idGesture){
        $gesture = Gesture::find($idGesture);
        FileManager::deleteDir(GESTURE_PATH.$gesture->titulo);
        $gesture->delete();
    }



}