<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 *
 * @property $id
 * @property $name
 * @property $planta_id
 * @property $edificio_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Edificio $edificio
 * @property Planta $planta
 * @property Prestamo[] $prestamos
 * @property Producto[] $productos
 * @property Resguardo[] $resguardos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{
    
    static $rules = [
		'name' => 'required',
		'planta_id' => 'required',
		'edificio_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','planta_id','edificio_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function edificio()
    {
        return $this->hasOne('App\Models\Edificio', 'id', 'edificio_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function planta()
    {
        return $this->hasOne('App\Models\Planta', 'id', 'planta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prestamos()
    {
        return $this->hasMany('App\Models\Prestamo', 'area_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'area_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resguardos()
    {
        return $this->hasMany('App\Models\Resguardo', 'area_id', 'id');
    }
    

}
