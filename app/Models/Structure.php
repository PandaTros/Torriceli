<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Structure
 *
 * @property $id
 * @property $foto
 * @property $nombres
 * @property $clave
 * @property $telefono
 * @property $direccion
 * @property $municipios
 * @property $secciones_asignadas
 * @property $secciones
 * @property $avance
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Structure extends Model
{
    
    static $rules = [
		'foto' => 'required',
		'nombres' => 'required',
		'clave' => 'required',
		'telefono' => 'required',
    'correo' => 'required',
		'direccion' => 'required',
		'municipios' => 'required',
		'secciones_asignadas' => 'required',
		'secciones' => 'required',
		'avance' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['foto','nombres','clave','telefono','correo','direccion','municipios','secciones_asignadas','secciones','avance'];



}
