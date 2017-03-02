<?php namespace Sucesos\Entities\Sucesos;

use Illuminate\Support\Facades\Auth;
use Sucesos\Entities\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sucesos\Entities\BaseEntity;

class Columna extends BaseEntity {

    use SoftDeletes;
    protected $dates = ['published_at','deleted_at'];
	protected $fillable = ['titulo','slug_url','descripcion','contenido','publicar','tipo','published_at','user_id','imagen','imagen_carpeta'];
    protected $table = "columnas";

    /*
     * RELACIONES
     */
    public function columnista()
    {
        return $this->belongsTo(Columnista::class);
    }

    public function imagenes()
    {
        return $this->morphMany(Imagen::class, 'imagenable');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    /*
     * GETTERS
     */
    public function getFechaAttribute()
    {
        return fechaBlogLista($this->published_at);
    }

    public function getFechaPublicacionAttribute()
    {
        return fechaPubAdmin($this->published_at);
    }

    public function getUrlAttribute()
    {
        return route('columna', [$this->id, $this->slug_url]);
    }

    //IMAGENES
    public function getImagenAdminAttribute()
    {
        return "/upload/".$this->imagen_carpeta."200x120/".$this->imagen;
    }

    public function getImagenColumnistaAttribute()
    {
        return "/upload/".$this->imagen_carpeta."710x450/".$this->imagen;
    }

    public function getImagenNoticiaAttribute()
    {
        return "/upload/".$this->imagen_carpeta."750/".$this->imagen;
    }

    public function getImagenNoticiaRelacionadaAttribute()
    {
        return "/upload/".$this->imagen_carpeta."540x335/".$this->imagen;
    }

    /*
     * SETTERS
     */
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = fechaPublicacionBD($value.':00');
    }

}