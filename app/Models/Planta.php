<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Planta
 *
 * @property $id
 * @property $name
 * @property $edificio_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Area[] $areas
 * @property Edificio $edificio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Planta extends Model
{
    
    static $rules = [
		'name' => 'required',
		'edificio_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','edificio_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areas()
    {
        return $this->hasMany('App\Models\Area', 'planta_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function edificio()
    {
        return $this->hasOne('App\Models\Edificio', 'id', 'edificio_id');
    }
    

}
