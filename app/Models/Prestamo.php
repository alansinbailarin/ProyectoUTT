<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $matricula
 * @property $name
 * @property $fecha_dev
 * @property $fecha_sali
 * @property $observaciones
 * @property $user_id
 * @property $area_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property ProduPrestamo[] $produPrestamos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'matricula' => 'required',
		'name' => 'required',
		'fecha_dev' => 'required',
		'fecha_sali' => 'required',
		'observaciones' => 'required',
		'user_id' => 'required',
		'area_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['matricula','name','fecha_dev','fecha_sali','observaciones','user_id','area_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'area_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produPrestamos()
    {
        return $this->hasMany('App\Models\ProduPrestamo', 'prestamo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
