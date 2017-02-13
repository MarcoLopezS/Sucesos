<?php namespace Sucesos\Entities\Sucesos;

use Sucesos\Entities\BaseEntity;

class Tag extends BaseEntity {

	protected $fillable = ['titulo','slug_url','descripcion','publicar'];
    protected $table = 'tags';

    /*
     * RELACIONES
     */
    public function noticias()
    {
        return $this->belongsToMany(Noticia::class);
    }

    /*
     * GETTERS
     */
    public function getUrlAttribute()
    {
        return route('noticias.tags.select', [$this->slug_url]);
    }

}