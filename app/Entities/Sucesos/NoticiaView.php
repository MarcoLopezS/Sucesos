<?php namespace Sucesos\Entities\Sucesos;

use Sucesos\Entities\BaseEntity;

class NoticiaView extends BaseEntity {

	protected $fillable = ['noticia_id'];
    protected $table = "noticia_views";

    /*
     * RELACIONES
     */
    public function noticia()
    {
        return $this->belongsTo(Noticia::class);
    }

}