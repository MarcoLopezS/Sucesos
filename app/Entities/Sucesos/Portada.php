<?php namespace Sucesos\Entities\Sucesos;

use Illuminate\Database\Eloquent\SoftDeletes;
use Sucesos\Entities\BaseEntity;

class Portada extends BaseEntity {

    use SoftDeletes;
    protected $dates = ['published_at','deleted_at'];
	protected $fillable = ['titulo','slug_url','publicar','published_at','imagen','imagen_carpeta'];
    protected $table = 'portadas';

    /*
     * GETTERS
     */
    public function getFechaPublicacionAttribute()
    {
        return fechaPubAdmin($this->published_at);
    }

    /*
     * IMAGENES
     */
    public function getImagenAdminAttribute()
    {
        return "/upload/".$this->imagen_carpeta."200x120/".$this->imagen;
    }

    public function getImagenHomeAttribute()
    {
        return "/upload/".$this->imagen_carpeta."380X420/".$this->imagen;
    }

    public function getImagenInteriorAttribute()
    {
        return "/upload/".$this->imagen_carpeta."490x550/".$this->imagen;
    }

    /*
     * SETTERS
     */
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = fechaPublicacionBD($value.':00');
    }

}