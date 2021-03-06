<?php namespace Sucesos\Repositories;

use Illuminate\Http\Request;

use Jenssegers\Date\Date;

abstract class BaseRepo {

    abstract public function getModel();

    //BUSCAR POR ID Y URL
    public function findIdUrl($id, $url)
    {
        return $this->getModel()->where('id', $id)->where('slug_url', $url)->first();
    }

    //BUSCAR POR URL
    public function findUrl($url)
    {
        return $this->getModel()->where('slug_url', $url)->first();
    }

    //BUSCAR Y MOSTRAR ERROR
    public function findOrFail($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    //ORDENAR
    public function orderBy($field, $order)
    {
        return $this->getModel()->orderBy($field, $order)->get();
    }

    //PAGINACION
    public function paginate($value)
    {
        return $this->getModel()->paginate($value);
    }

    //LISTAR
    public function pluck($field, $id)
    {
        return $this->getModel()->pluck($field, $id);
    }

    //MOSTRAR
    public function all(){
        return $this->getModel()->all();
    }

    //ORDERNAR Y PAGINAR
    public function orderByPagination($field, $order, $value)
    {
        return $this->getModel()->orderBy($field, $order)->paginate($value);
    }

    //SELECT
    public function where($field, $value)
    {
        return $this->getModel()->where($field, $value);
    }

    public function create($entity, array $data)
    {
        $entity->save();
        return $entity;
    }

    public function update($entity, array $data)
    {
        $entity->fill($data);
        $entity->save();
        return $entity;
    }

    public function delete($entity)
    {
        if (is_numeric($entity))
        {
            $entity = $this->findOrFail($entity);
        }
        $entity->delete();
        return $entity;
    }

    public function findTrash($id)
    {
        return $this->getModel()->onlyTrashed()->findOrFail($id);
    }

    public function listTituloArray()
    {
        return $this->getModel()->pluck('titulo', 'id')->toArray();
    }

    /* FECHA ACTUAL */
    public function fechaActual(){
        $fechaActual = date('Y-m-d H:i:s');
        return $fechaActual;
    }

    /* FECHA TEXTO */
    public function fechaTexto($datetime)
    {
        Date::setLocale('es');
        $fecha = Date::create($datetime->year, $datetime->month, $datetime->day, $datetime->hour, $datetime->minute, $datetime->second);
        $fecha = $fecha->format('d \\d\\e F \\d\\e\\l Y');
        return $fecha;
    }

    //BUSQUEDAS DE REGISTROS ELIMINADOS
    public function findAndPaginateDeletes(Request $request)
    {
        return $this->getModel()
                    ->onlyTrashed()
                    ->titulo($request->get('titulo'))
                    ->orderBy('deleted_at', 'desc')
                    ->paginate();
    }

}