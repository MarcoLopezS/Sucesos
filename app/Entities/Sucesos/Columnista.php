<?php namespace Sucesos\Entities\Sucesos;

use Sucesos\Entities\BaseEntity;

class Columnista extends BaseEntity {

	protected $fillable = ['nombre','apellidos','nombre_completo','slug_url','descripcion','publicar','imagen','imagen_carpeta'];
    protected $table = 'columnistas';

    /*
     * RELACIONES
     */
    public function columnas()
    {
        return $this->hasMany(Columna::class);
    }

    /*
     * GETTERS
     */
    public function getImagenAdminAttribute()
    {
        return '/upload/'.$this->imagen_carpeta.'200x200/'.$this->imagen;
    }

    public function getImagenHomeAttribute()
    {
        return '/upload/'.$this->imagen_carpeta.'110x110/'.$this->imagen;
    }


    public function getUrlAttribute()
    {
        return route('columnista', [$this->slug_url]);
    }

    /*
     * SCOPES
     */
    public function scopeNombreCompleto($query, $titulo)
    {
        if(trim($titulo) != "")
        {
            $query->where('nombre_completo', 'LIKE', "%$titulo%");
        }
    }
}