<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Classes
 * @package App\Models
 * @version July 15, 2020, 3:24 am UTC
 *
 */
class Classes extends Model
{
    use SoftDeletes;

    public $table = 'classes';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];


    protected $primaryKey = 'class_id';

    public $fillable = [
        'class_name',
        'class_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_id' => 'integer',
        'class_name' => 'varchar, 255',
        'class_code' => 'varchar, 255'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'class_name' => 'required'
    ];

    
}
