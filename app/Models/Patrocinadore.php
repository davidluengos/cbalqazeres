<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Patrocinadore
 *
 * @property $id
 * @property $nombre
 * @property $tipo_patrocinador_id
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property PatrocinadorTipo $patrocinadorTipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Patrocinadore extends Model
{
    
    static $rules = [
		'tipo_patrocinador_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipo_patrocinador_id','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patrocinadorTipo()
    {
        return $this->hasOne('App\Models\PatrocinadorTipo', 'id', 'tipo_patrocinador_id');
    }
    

}
