<?php namespace Sucesos\Entities\Sucesos;

use Sucesos\Entities\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sucesos\Entities\BaseEntity;

class Video extends BaseEntity {

    use SoftDeletes;
    protected $dates = ['published_at','deleted_at'];
	protected $fillable = ['titulo','slug_url','descripcion','publicar','imagen','imagen_carpeta','youtube','published_at','user_id'];
    protected $table = "videos";

    /*
     * RELACIONES
     */
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
        return route('noticia', [$this->id, $this->slug_url]);
    }

    //IMAGENES
    public function getImagenAdminAttribute()
    {
        return "/upload/".$this->imagen_carpeta."200x120/".$this->imagen;
    }

    public function getImagenHomeAttribute()
    {
        return "/upload/".$this->imagen_carpeta."870x540/".$this->imagen;
    }

    /*
     * SETTERS
     */
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = fechaPublicacionBD($value.':00');
    }

}