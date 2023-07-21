<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Politica
 *
 * @property $id
 * @property $politica
 * @property $linea
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividad[] $actividads
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Politica extends Model
{
    
    static $rules = [
		'politica' => 'required',
		'linea' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['politica','linea','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividads()
    {
        return $this->hasMany('App\Models\Actividad', 'id_politica', 'id');
    }
    

}
