<?php namespace Sucesos\Entities\Sucesos;

use Sucesos\Entities\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sucesos\Entities\BaseEntity;

class Categoria extends BaseEntity {

	protected $fillable = ['titulo','slug_url','descripcion','publicar'];
    protected $table = 'categorias';

    /*
     * RELACIONES
     */
    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }

    /*
     * GETTERS
     */
    public function getUrlAttribute()
    {
        return route('categoria', [$this->slug_url]);
    }
}