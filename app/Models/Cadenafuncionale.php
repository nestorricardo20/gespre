<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cadenafuncionale
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $funcion
 * @property $div_fun
 * @property $gru_fun
 * @property $categoria
 * @property $programa
 * @property $prod
 * @property $act
 * @property $finalidad
 * @property $meta
 * @property $area
 * @property $estado
 *
 * @property Actividad[] $actividads
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cadenafuncionale extends Model
{
    
    static $rules = [
		'funcion' => 'required',
		'div_fun' => 'required',
		'gru_fun' => 'required',
		//'categoria' => 'required',
		'programa' => 'required',
		'prod' => 'required',
		'act' => 'required',
		'finalidad' => 'required',
		'meta' => 'required',
		'area' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['funcion','div_fun','gru_fun','categoria','programa','prod','act','finalidad','meta','area','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividads()
    {
        return $this->hasMany('App\Models\Actividad', 'id_cadenafuncional', 'id');
    }
    

}
