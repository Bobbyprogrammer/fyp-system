<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Log;
use App\Models\Logsubmit;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class LogController extends Controller
{
    public function list(){
        $data['header_title']='Tasks';
        $teacher_id=Auth::user()->id;
        $data['getRecord']=Log::getRecord($teacher_id);
        return view('teacher.task.list',$data);
    }
    public function add(){
        $data['header_title']='Add Tasks';
        $id=Auth::user()->id;
        $data['getRecord'] = User::getMyStudent($id);
        return view('teacher.task.add',$data);
    }
    public function insert(Request $request){
        $data=new Log();
        $data->student_id=$request->student_id;
        $data->teacher_id=Auth::user()->id;
        $data->task_date=$request->task_date;
        $data->submission_date=$request->submission_date;
        $data->description=$request->description;
        if(!empty($request->file())){
            $ext=$request->file('file')->getClientOriginalExtension();
            $file=$request->file('file');
            $randomStr=date('Ymdhis').Str::random(20);
            $filename=strtolower($randomStr).'.'.$ext;
            $file->move('upload/tasks', $filename);
            $data->file=$filename;
        }
$data->save();
        return redirect('teacher/task')->with('success','Task Assigned Successfully');
    }

    public function edit($id){
$data['getData']=Log::getSingle($id);
$id=Auth::user()->id;
$data['getRecord'] = User::getMyStudent($id);
$data['header_title']="Edit Task";
return view('teacher.task.edit',$data);
    }
    public function update(Request $request,$id){
        $data=Log::getSingle($id);
        $data->student_id=$request->student_id;
        $data->task_date=$request->task_date;
        $data->submission_date=$request->submission_date;
        $data->description=$request->description;
        if(!empty($request->file())){
            $ext=$request->file('file')->getClientOriginalExtension();
            $file=$request->file('file');
            $randomStr=date('Ymdhis').Str::random(20);
            $filename=strtolower($randomStr).'.'.$ext;
            $file->move('upload/tasks', $filename);
            $data->file=$filename;
        }
$data->save();
return redirect('teacher/task')->with('success','Task Assigned Successfully');
    }

    public function delete($id){
        $data=Log::getSingle($id);
        $data->delete();
        return redirect('teacher/task')->with('success','Task Deleted Successfully');
    }
    // Teacher Side Work
    // Submitted Task
    public function submitted($task_id){
        $task=Log::getSingle($task_id);
$teacher_id=Auth::user()->id;
        if(!empty($task)){
            $data['task_id']=$task_id;
            $data['header_title']="submitted Task";
            $data['getRecord']=Logsubmit::getRecord($task_id);
            return view('teacher.task.submitted',$data);
        }
        else{
           abort(404);
        }


    }

    // Student Side work
    public function myTask(){
       $student_id= Auth::user()->id;
        $data['getRecord']=Log::getRecordStudent($student_id);
        $data['header_title']='My Tasks';
        return view('student.task.mytask',$data);
    }
    public function myTaskSubmit($task_id){
$data['header_title']='Submit My Task';
$data['getRecord']=Log::getSingle($task_id);
        return view('student.task.submit',$data);
    }

    public function myTaskSubmitInsert($task_id,Request $request){
$data=new Logsubmit();
$data->task_id=$task_id;
$data->student_id=Auth::user()->id;
$data->description=$request->description;
if(!empty($request->file())){
    $ext=$request->file('file')->getClientOriginalExtension();
    $file=$request->file('file');
    $randomStr=date('Ymdhis').Str::random(20);
    $filename=strtolower($randomStr).'.'.$ext;
    $file->move('upload/submitted_task', $filename);
    $data->file=$filename;
}
$data->save();
return redirect('student/my_task')->with('success','Task Submitted Successfully');
    }


    public function mySubmittedTask(){
$student_id=Auth::user()->id;
        $data['getRecord']=Logsubmit::getSubmittedTask($student_id);
        $data['header_title']='My Submitted Tasks';
        return view('student.task.submitted',$data);
    }
}
