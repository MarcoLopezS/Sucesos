<?php namespace Sucesos\Entities\Sucesos;

use Illuminate\Database\Eloquent\SoftDeletes;
use Sucesos\Entities\BaseEntity;

class Portada extends BaseEntity {

    use SoftDeletes;
    protected $dates = ['published_at','deleted_at'];
	protected $fillable = ['titulo','slug_url','publicar','published_at','imagen','imagen_carpeta','embed'];
    protected $table = 'portadas';

    /*
     * GETTERS
     */
    public function getFechaPublicacionAttribute()
    {
        return fechaPubAdmin($this->published_at);
    }

    public function getFechaEdicionAnteriorAttribute()
    {
        return fechaEdicionAnterior($this->published_at);
    }

    public function getUrlAttribute()
    {
        return route('portada.fecha', fechaPublicacionSelect($this->published_at));
    }

    /*
     * IMAGENES
     */
    public function getImagenAdminAttribute()
    {
        return "/upload/".$this->imagen_carpeta."200/".$this->imagen;
    }

    public function getImagenHomeAttribute()
    {
        return "/upload/".$this->imagen_carpeta."380X420/".$this->imagen;
    }

    public function getImagenInteriorAttribute()
    {
        return "/upload/".$this->imagen_carpeta."490x550/".$this->imagen;
    }

    public function getImagenEdicionAnteriorAttribute()
    {
        return "/upload/".$this->imagen_carpeta."400x450/".$this->imagen;
    }

    /*
     * SETTERS
     */
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = fechaPublicacionBD($value.':00');
    }

}