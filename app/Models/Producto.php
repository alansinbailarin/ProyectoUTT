<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $num_inventario
 * @property $area_id
 * @property $tipo_id
 * @property $fecha_alta
 * @property $marca_id
 * @property $user_id
 * @property $status_id
 * @property $modelo_id
 * @property $num_serie
 * @property $categoria_id
 * @property $subcategoria_id
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property Categoria $categoria
 * @property Estado $estado
 * @property Marca $marca
 * @property Modelo $modelo
 * @property Producresguardo[] $producresguardos
 * @property Produprestamo[] $produprestamos
 * @property Subcategoria $subcategoria
 * @property Tipoalta $tipoalta
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'num_inventario' => 'required',
		'area_id' => 'required',
		'tipo_id' => 'required',
		'fecha_alta' => 'required',
		'marca_id' => 'required',
		'user_id' => 'required',
		'status_id' => 'required',
		'modelo_id' => 'required',
		'num_serie' => 'required',
		'categoria_id' => 'required',
		'subcategoria_id' => 'required',

    ];
//php artisan serve --host=172.10.102.160
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['num_inventario','area_id','tipo_id','fecha_alta','marca_id','user_id','status_id','modelo_id','num_serie','categoria_id','subcategoria_id','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'area_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'status_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Models\Modelo', 'id', 'modelo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function producresguardos()
    {
        return $this->hasMany('App\Models\Producresguardo', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produprestamos()
    {
        return $this->hasMany('App\Models\Produprestamo', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subcategoria()
    {
        return $this->hasOne('App\Models\Subcategoria', 'id', 'subcategoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoalta()
    {
        return $this->hasOne('App\Models\Tipoalta', 'id', 'tipo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
