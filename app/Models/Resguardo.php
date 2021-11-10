<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Resguardo
 *
 * @property $id
 * @property $nombre_solicitante
 * @property $number
 * @property $email
 * @property $fecha_resguardo
 * @property $matricula
 * @property $fecha_dev
 * @property $observaciones
 * @property $user_id
 * @property $area_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property ProducResguardo[] $producResguardos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resguardo extends Model
{
    
    static $rules = [
		'nombre_solicitante' => 'required',
		'number' => 'required',
		'email' => 'required',
		'fecha_resguardo' => 'required',
		'matricula' => 'required',
		'fecha_dev' => 'required',
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
    protected $fillable = ['nombre_solicitante','number','email','fecha_resguardo','matricula','fecha_dev','observaciones','user_id','area_id'];


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
    public function producResguardos()
    {
        return $this->hasMany('App\Models\ProducResguardo', 'resguardo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
  

}
