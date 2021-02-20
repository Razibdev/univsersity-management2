<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Attendance
 * @package App\Models
 * @version July 15, 2020, 9:09 am UTC
 *
 */
class Attendance extends Model
{
    use SoftDeletes;

    public $table = 'attendances';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];


    protected $primaryKey = 'attendance_id';

    public $fillable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attendace_status'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'attendance_id' => 'integer',
        'student_id' => 'integer',
        'class_id' => 'integer',
        'subject_id' => 'integer',
        'teacher_id' => 'integer',
        'attendace_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required',
        'class_id' => 'required',
        'subject_id' => 'required',
        'teacher_id' => 'required',
        'attendace_status' => 'required'
    ];

    
}
