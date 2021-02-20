<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClassAssigning
 * @package App\Models
 * @version July 15, 2020, 9:32 am UTC
 *
 */
class ClassAssigning extends Model
{
    use SoftDeletes;

    public $table = 'class_assignings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];


    protected $primaryKey = 'class_assign_id';

    public $fillable = [
        'teacher_id',
        'schedule_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_assign_id' => 'integer',
        'teacher_id' => 'integer',
        'schedule_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'schedule_id' => 'required',
        'teacher_id' => 'required'
    ];

    
}
