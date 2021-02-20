<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admission
 * @package App\Models
 * @version July 15, 2020, 4:37 am UTC
 *
 */
class Admission extends Model
{
    use SoftDeletes;

    public $table = 'admissions';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];


    protected $primaryKey = 'student_id';

    public $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'Mother_name',
        'father_phone',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'dateregistered',
        'user_id',
        'image',
        'faculty_id',
        'batch_id',
        'department_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'Mother_name' => 'string',
        'father_phone' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'dateregistered' => 'date',
        'user_id' => 'integer',
        'department_id' => 'integer',
        'faculty_id' => 'integer',
        'batch_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'father_name' => 'required',
        'Mother_name' => 'required',
        'father_phone' => 'required',
        'gender' => 'required',
        'email' => 'required|between:3,64|email|unique:users',
        'dob' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'current_address' => 'required',
        'nationality' => 'required',
        'passport' => 'required',
        'status' => 'required',
        'dateregistered' => 'required',
        'user_id' => 'required',
        'department_id' => 'required',
        'faculty_id' => 'required',
        'batch_id' => 'required'
    ];

    
}
