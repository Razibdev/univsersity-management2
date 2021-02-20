<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Batch
 * @package App\Models
 * @version July 15, 2020, 5:49 am UTC
 *
 */
class Batch extends Model
{
    use SoftDeletes;

    public $table = 'batches';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];


    protected $primaryKey = 'batch_id';

    public $fillable = [
        'batch'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'batch_id' => 'integer',
        'batch' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'batch' => 'required'
    ];

    
}
