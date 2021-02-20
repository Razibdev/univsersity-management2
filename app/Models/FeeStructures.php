<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FeeStructures
 * @package App\Models
 * @version August 4, 2020, 1:16 pm UTC
 *
 * @property integer $semester_id
 * @property integer $course_id
 * @property integer $level_id
 * @property number $admissionFee
 * @property number $semesterFee
 */
class FeeStructures extends Model
{
    use SoftDeletes;

    public $table = 'fee_structures';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';


    public $fillable = [
        'semester_id',
        'course_id',
        'level_id',
        'admissionFee',
        'semesterFee'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'semester_id' => 'integer',
        'course_id' => 'integer',
        'level_id' => 'integer',
        'admissionFee' => 'float',
        'semesterFee' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'semester_id' => 'required',
        'course_id' => 'required',
        'level_id' => 'required',
        'admissionFee' => 'required',
        'semesterFee' => 'required'
    ];

    
}
