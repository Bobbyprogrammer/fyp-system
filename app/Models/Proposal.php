<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
static public function getSingle($id){
    return self::find($id);
}

static public function getTotalProposal(){
    return self::select('proposals.id')
    ->count();
}
    static public function getRecord($student_id){
        return self::select('proposals.*','users.name as student_name')
->join('users','users.id','=','proposals.student_id')
->where('proposals.student_id','=', $student_id)
        ->orderBy('proposals.id','desc')
        ->get();
    }

    // Teacher Side Work
    static public function getProposalTeacher($teacher_id){
        return self::select('proposals.*','users.name as student_name','users.email as student_email')
        ->join('users','users.id','=','proposals.student_id')
        ->join('users as teacher','teacher.id','=','users.teacher_id')
        ->where('users.teacher_id', '=', $teacher_id)
        ->orderBy('proposals.id','desc')
        ->get();
    }

    static public function  getTotalMyStudentProposal($teacher_id){
        return self::select('proposals.*')
        ->join('users','users.id','=','proposals.student_id')
        ->join('users as teacher','teacher.id','=','users.teacher_id')
        ->where('users.teacher_id', '=', $teacher_id)

        ->count();
    }

    public function getStudent(){
        return $this->belongsTo(User::class,'student_id');
    }
}
