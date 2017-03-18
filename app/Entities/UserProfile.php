<?php namespace Sucesos\Entities;

class UserProfile extends BaseEntity {

	protected $fillable = ['nombres','apellidos','nombre_completo','slug_url','cargo','descripcion','imagen','imagen_carpeta','user_id'];

	public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}