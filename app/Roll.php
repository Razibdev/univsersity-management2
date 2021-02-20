<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Session;

class Roll extends Model
{
    use SoftDeletes;
     public $table = 'rolls';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'rolls_id';

    public $fillable = [
        'student_id', 'username', 'password', 'login_time', 'logout_time'
    ];

    public static function onlineStudent(){
        $students = Roll::join('admissions', 'admissions.student_id', '=', 'rolls.student_id')->where(['username' => Session::get('studentSession')])->first();
        return $students;


    }
}
