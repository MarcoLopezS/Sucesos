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
        return route('tag', [$this->slug_url]);
    }

    /*
     * FUNCIONES
     */
    public function NoticiasRelacionadas($noticia)
    {
        return $this->noticias()->where('publicar', 1)->where('noticias.id','<>',$noticia)->limit(3)->get();
    }

    public function NoticiasTags()
    {
        return $this->noticias()->where('publicar', 1)->paginate(6);
    }

}