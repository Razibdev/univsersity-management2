<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 * @package App\Models
 * @version July 15, 2020, 6:01 am UTC
 *
 */
class Course extends Model
{
    use SoftDeletes;

    public $table = 'courses';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];


    protected $primaryKey = 'course_id';

    public $fillable = [
        'course_name',
        'course_code',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'course_id' => 'integer',
        'course_name' => 'string',
        'course_code' => 'string',
        'description' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_name' => 'required',
        'course_code' => 'required',
        'description' => 'required',
        'status' => 'required'
    ];

    
}
