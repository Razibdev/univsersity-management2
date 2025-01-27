<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Faculty
 * @package App\Models
 * @version July 15, 2020, 8:54 am UTC
 *
 */
class Faculty extends Model
{
    use SoftDeletes;

    public $table = 'faculties';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'faculty_id';

    public $fillable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'faculty_id' => 'integer',
        'faculty_name' => 'string',
        'faculty_code' => 'string',
        'faculty_description' => 'string',
        'faculty_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'faculty_name' => 'required',
        'faculty_code' => 'required',
        'faculty_description' => 'required',
        'faculty_status' => 'required'
    ];

    
}
