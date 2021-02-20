<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Classroom
 * @package App\Models
 * @version July 15, 2020, 4:48 am UTC
 *
 */
class Classroom extends Model
{
    use SoftDeletes;

    public $table = 'classrooms';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'classroom_id';
    protected $dates = ['deleted_at'];



    public $fillable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'classroom_id' => 'integer',
        'classroom_name' => 'varchar, 255',
        'classroom_code' => 'varchar, 255',
        'classroom_description' => 'text',
        'classroom_status' => 'tinyint'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'classroom_name' => 'required'
    ];

    
}
