<?php
class Category extends Eloquent {
    protected $table = "categoria";
    protected $primaryKey = "id_categoria";
    protected $fillable = array('nombre', 'url_imagen', 'url_video','id_categoria_padre');
    protected $guarded = array('id_categoria');
    public $timestamps = false;

    public function gestures() {
        return $this->hasMany('Gesture','id_categoria');
    }
}