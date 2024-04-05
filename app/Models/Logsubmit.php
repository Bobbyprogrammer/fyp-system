<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Logsubmit extends Model
{
    use HasFactory;
  static  public function getSubmittedTask($student_id){
        return self::select('logsubmits.*','teacher.name as teacher_name')
        ->join('logs','logs.id','=','logsubmits.task_id')
        ->join('users as teacher','teacher.id','logs.teacher_id')
        ->where('logsubmits.student_id','=',$student_id)
        ->orderBy('logsubmits.id','desc')
        ->get();
    }
    public function getDocument(){
        if(!empty($this->file)&&file_exists('upload/submitted_task/'.$this->file)){
            return url('upload/submitted_task/'. $this->file);
    }
    else{
        return '';
    }
}
public function getTask(){
    return $this->belongsTo(Log::class,'task_id');
}

static public function getRecord($task_id){
    return self::select('logsubmits.*','student.name as student_name')
    ->join('logs','logs.id','=','logsubmits.task_id')
    ->join('users as student','student.id','logs.student_id')
    ->where('logsubmits.task_id','=',$task_id)
    ->orderBy('logsubmits.id','desc')
    ->get();
}
public function getStudent(){
    return $this->belongsTo(User::class,'student_id');
}
}
