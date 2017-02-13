<?php namespace Sucesos\Entities\Sucesos;

use Sucesos\Entities\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sucesos\Entities\BaseEntity;

class Noticia extends BaseEntity {

    use SoftDeletes;
    protected $dates = ['published_at','deleted_at'];
	protected $fillable = ['titulo','slug_url','descripcion','contenido','publicar','published_at','user_id'];
    protected $table = "noticias";

    /*
     * RELACIONES
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function imagenes()
    {
        return $this->morphMany(Imagen::class, 'imagenable');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    /*
     * GETTERS
     */
    public function getUrlAttribute()
    {
        return route('noticias.select', [$this->id, $this->slug_url]);
    }

    public function getFechaAttribute()
    {
        return fechaBlogLista($this->published_at);
    }

    public function getFechaPublicacionAttribute()
    {
        return fechaPubAdmin($this->published_at);
    }

    public function getImagenBlogAttribute()
    {
        return "/upload/".$this->imagen_carpeta."690/".$this->imagen;
    }

    public function getImagenBlogNotaAttribute()
    {
        return "/upload/".$this->imagen_carpeta."750/".$this->imagen;
    }

    /*
     * SCOPES
     */
    public function scopeSCategoria($query, $value)
    {
        if($value != "")
        {
            $query->where('categoria_id', $value);
        }
    }
}