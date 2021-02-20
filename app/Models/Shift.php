<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Shift
 * @package App\Models
 * @version July 15, 2020, 5:55 am UTC
 *
 */
class Shift extends Model
{
    use SoftDeletes;

    public $table = 'shifts';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'shift_id';

    public $fillable = [
        'shift'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'shift_id' => 'integer',
        'shift' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'shift' => 'required'
    ];

    
}
