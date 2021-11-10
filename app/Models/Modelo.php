<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modelo
 *
 * @property $id
 * @property $modelo
 * @property $marca_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Marca $marca
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Modelo extends Model
{
    
    static $rules = [
		'modelo' => 'required',
		'marca_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['modelo','marca_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'modelo_id', 'id');
    }
    

}
