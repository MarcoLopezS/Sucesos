<?php namespace Sucesos\Entities\Sucesos;

use Sucesos\Entities\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sucesos\Entities\BaseEntity;

class Noticia extends BaseEntity {

    use SoftDeletes;
    protected $dates = ['published_at','deleted_at'];
	protected $fillable = ['titulo','slug_url','descripcion','contenido','publicar','tipo','published_at','user_id'];
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

    public function noticiaView()
    {
        return $this->hasMany(NoticiaView::class);
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
    public function getCategoriaNombreAttribute()
    {
        return $this->categoria->titulo;
    }

    public function getCategoriaUrlAttribute()
    {
        return route('categoria', $this->categoria->slug_url);
    }

    public function getEtiquetasAttribute()
    {
        return $this->tags()->pluck('tag_id')->toArray();
    }

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

    public function getImagenCategoriaAttribute()
    {
        return "/upload/".$this->imagen_carpeta."710x450/".$this->imagen;
    }

    public function getImagenTagAttribute()
    {
        return "/upload/".$this->imagen_carpeta."480x300/".$this->imagen;
    }

    public function getImagenNoticiaAttribute()
    {
        return "/upload/".$this->imagen_carpeta."750/".$this->imagen;
    }

    public function getImagenNoticiaDestacadaAttribute()
    {
        return "/upload/".$this->imagen_carpeta."620x470/".$this->imagen;
    }

    public function getImagenNoticiaNormalAttribute()
    {
        return "/upload/".$this->imagen_carpeta."490x300/".$this->imagen;
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

    public function scopeSTipo($query, $value)
    {
        if($value != "")
        {
            $query->where('tipo', $value);
        }
    }
}