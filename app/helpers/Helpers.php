<?php

/*
|------------------------------------------------------------
|   Clase para el manejo de archivos de la aplicación
|------------------------------------------------------------
*/
class FileManager {

    /*
    |----------------------------------------------------------------------------------------
    |                          Función moveFile($file,$destinationPath)
    |----------------------------------------------------------------------------------------
    |  Mueve un archivo hasta un directorio destino
    |
    |  Parametros:
    |  $file = archivo que se desea mover.
    |  $destinationPath = directorio destino del archivo.
    |
    |
    */
    public static function moveFile($file,$destinationPath) {
        FileManager::createDir($destinationPath);
        return (is_file($file)) ? $file->move($destinationPath,FileManager::getName($file)): false;
    }

    /*
    |----------------------------------------------------------------------------------------
    |                                   Función createDir($path) 
    |----------------------------------------------------------------------------------------
    |  Crea un directorio si este no existe.
    |
    |  Parametros:
    |  $path = ruta del directorio.
    |
    |
    */
    public static function createDir($path) {
        return (!is_dir($path)) ? mkdir($path) : false;
    }

    /*
    |----------------------------------------------------------------------------------------
    |                                   Funcion getName($file) 
    |----------------------------------------------------------------------------------------
    |  Retorna el nombre original del archivo soolo si este de verdad es un archivo.
    |
    |  Parametros:
    |  $path = ruta del directorio.
    |
    |
    */
    public static function getName($file) {
        return (is_file($file)) ? $file->getClientOriginalName() : '';
    }
}

/*
|------------------------------------------------------------
|   Clase para el manejo de validaciones de la aplicacion
|------------------------------------------------------------
*/
class ValidationManager {

    /*
    |----------------------------------------------------------------------------------------
    |                               Función isValid($data,$rules) 
    |----------------------------------------------------------------------------------------
    |  Retorna si la data recibida es valida o no de acuerdo a un conjunto de reglas
    |  de validación.
    |
    |  Parametros:
    |  $data = array de datos que se evaluara para saber si son validos o no.
    |  $rules = array de reglas de validación.
    |
    */
    public static function isValid($data,$rules) {
        return !Validator::make($data,$rules)->fails();
    }

    /*
    |----------------------------------------------------------------------------------------
    |                               Función getFails($data,$rules) 
    |----------------------------------------------------------------------------------------
    |  Retorna un arreglo con los datos que fallaron al momento de la validación de
    |  validación, los parametros son los mismos que los de la funcion isValid.
    |
    |
    */
    public static function getFails($data,$rules) {
        return Validator::make($data,$rules)->fails()->failed();
    }

}
