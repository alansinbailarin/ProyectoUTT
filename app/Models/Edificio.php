<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Edificio
 *
 * @property $id
 * @property $name
 * @property $number
 * @property $email
 * @property $ubicacion
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Area[] $areas
 * @property Planta[] $plantas
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Edificio extends Model
{
    
    static $rules = [
		'name' => 'required',
		'number' => 'required',
		'email' => 'required',
		'ubicacion' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','number','email','ubicacion','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areas()
    {
        return $this->hasMany('App\Models\Area', 'edificio_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantas()
    {
        return $this->hasMany('App\Models\Planta', 'edificio_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
