<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Objetivo
 *
 * @property $id
 * @property $objetivo
 * @property $accion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividad[] $actividads
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Objetivo extends Model
{
    
    static $rules = [
		'objetivo' => 'required',
		'accion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['objetivo','accion','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividads()
    {
        return $this->hasMany('App\Models\Actividad', 'id_objetivo', 'id');
    }
    

}
