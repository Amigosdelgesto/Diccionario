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
class GestureController extends BaseController {

    public function newGesture() {
        if (ValidationManager::isValid(Input::all(),unserialize(NEW_GESTURE_RULES))) {
            $gesture = new Gesture();
            $gesture->titulo = Input::get('titulo');
            $gesture->id_categoria = Input::get('categoria');
            $gesture->definicion = Input::get('definicion');
            $gesture->url_video = FileManager::getName(Input::file('video'));
            if ($gesture->save()) {
                FileManager::moveFile(Input::file('video'),GESTURE_PATH.$gesture->titulo);
                $this->newExamples($gesture, Input::get("ej_titulos"),Input::file("ej_imagenes"));
            }
        }
        return View::make('admin', array('categories' => Category::all()));
    }

    public function newExamples($gesture,$ej_titles,$ej_images) {
        for ($i=0; $i<sizeof($ej_titles); $i++) {
            $gesture->examples()->save(
                new Example(array(
                    'titulo' => $ej_titles[$i],
                    'url_imagen' => FileManager::getName($ej_images[$i])
                    )));
            FileManager::moveFile($ej_images[$i],EXAMPLE_PATH.$gesture->titulo);
        }
    }
}