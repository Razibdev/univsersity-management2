<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Academic
 * @package App\Models
 * @version July 15, 2020, 9:17 am UTC
 *
 */
class Academic extends Model
{
    use SoftDeletes;

    public $table = 'academics';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'academic_id';

    public $fillable = [
        'academic_year'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'academic_id' => 'integer',
        'academic_year' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'academic_year' => 'required'
        
    ];

    
}
