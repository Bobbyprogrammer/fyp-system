<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord($teacher_id){
        return self::select('logs.*','student.name as student_name','teacher.name as teacher_name')
        ->join('users as student','student.id','=','logs.student_id')
        ->join('users as teacher','teacher.id','=','logs.teacher_id')
        ->where('teacher.id','=', $teacher_id)
        ->orderBy('logs.id','desc')
        ->get();
    }

static public function getRecordStudent($student_id){
    return self::select('logs.*','teacher.name as teacher_name')
    ->join('users as teacher','teacher.id','logs.teacher_id')
    ->join('users as student','student.id','logs.student_id')
    ->where('student.id','=',$student_id)
    ->whereNotIn('logs.id',function($query) {
        $query->select('logsubmits.task_id')->from('logsubmits');
     })
    ->orderBy('id','desc')
    ->get();
}


    public function getDocument(){
        if(!empty($this->file)&&file_exists('upload/tasks/'.$this->file)){
            return url('upload/tasks/'. $this->file);
    }
    else{
        return '';
    }
}
}
