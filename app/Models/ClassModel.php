<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $table="class_models";


    public function user(){
        return $this->hasMany(User::class,"class_id");
    }



    public static function getSingle($id)
    {
        return self::find($id);
    }


    static public function getTotalClass(){
        return self::select('class_models.id')
        ->where('class_models.status','=','0')
        ->where('class_models.is_delete','=','0')
        ->count();
    }
    public static function getRecord()
    {
        $return = ClassModel::select('class_models.*', 'users.name as created_by_name')->join('users', 'users.id', 'class_models.created_by');
        $return = $return
            ->where('class_models.is_delete', '=', 0)
            ->orderBy('class_models.id', 'desc')
            ->get();
        return $return;
    }
    public static function getClass()
    {
        $return = ClassModel::select('class_models.*')
            ->join('users', 'users.id', 'class_models.created_by')
            ->where('class_models.is_delete', '=', 0)
            ->where('class_models.status', '=', 0)
            ->orderBy('class_models.name', 'desc')
            ->get();
        return $return;
    }
}
