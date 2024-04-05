<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Request;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    static public function getSingle($id)
    {
        return self::findorfail($id);
    }

    static public function getTotalStudent($student){
        return self::select('users.id')
        ->where('users.status','0')
        ->where('users.is_delete','0')
        ->where('users.user_type',$student)
        ->count();
    }

    static public function getTotalAdmin($admin){
        return self::select('users.id')
        ->where('users.status','0')
        ->where('users.is_delete','0')
        ->where('users.user_type',$admin)
        ->count();
    }
    static public function
    getTotalTeacher($teacher){
        return self::select('users.id')
        ->where('users.status','0')
        ->where('users.is_delete','0')
        ->where('users.user_type',$teacher)
        ->count();
    }

    static function getAdmin()
    {
        $return = self::select('users.*')
            ->where('user_type', '=', 1)
            ->where('is_delete', '=', 0);
        $return = $return->orderBy('id', 'desc')->get();

        return $return;
    }

    public static function getTeacher()
    {
        $return = self::select('users.*')
            ->where('users.user_type', '=', 2)
            ->where('users.is_delete', '=', 0);

        $return = $return->orderBy('users.id', 'desc')->get();

        return $return;
    }
    static function getStudent()
    {
        $return = self::select('users.*', 'class_models.name as class_name', 'teacher.name as teacher_name')
            ->join('users as teacher', 'teacher.id', '=', 'users.teacher_id', 'left')
            ->join('class_models', 'class_models.id', '=', 'users.class_id', 'left')
            ->where('users.user_type', '=', 3)
            ->where('users.is_delete', '=', 0);
        $return = $return->orderBy('users.id', 'desc')->get();
        return $return;
    }
    static public function getMyStudent($teacher_id)
    {
        $return = self::select('users.*', 'class_models.name as class_name', 'teacher.name as teacher_name')
            ->join('users as teacher', 'teacher.id', '=', 'users.teacher_id')
            ->join('class_models', 'class_models.id', '=', 'users.class_id', 'left')
            ->where('users.user_type', '=', 3)
            ->where('users.teacher_id', '=', $teacher_id)
            ->where('users.is_delete', '=', 0)
            ->orderBy('users.id', 'desc')->get();
        return $return;
    }


    static public function getTotalMyStudent($teacher_id)
    {
        $return = self::select('users.id*')
            ->where('users.user_type', '=', 3)
            ->where('users.teacher_id', '=', $teacher_id)
            ->where('users.is_delete', '=', 0)
->count();
        return $return;
    }

    static public  function getSearchStudent()
    {

        $return = self::select('users.*', 'class_models.name as class_name', 'teacher.name as teacher_name')
            ->join('users as teacher', 'teacher.id', '=', 'users.teacher_id')
            ->join('class_models', 'class_models.id', '=', 'users.class_id', 'left')
            ->where('users.user_type', '=', 3)
            ->where('users.is_delete', '=', 0);

        $return = $return->orderBy('users.id', 'desc')->limit(50)->get();

        return $return;
    }

}
