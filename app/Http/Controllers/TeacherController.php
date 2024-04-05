<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proposal;
use App\Models\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Str;
class TeacherController extends Controller
{
    public function list(){
    $data['getTeacher']=User::getTeacher();
return view('admin.teacher.list',$data);
}
public function add(){
return view('admin.teacher.add');
}

public function insert(Request $request){
$validated=$request->validate([
'email'=>'required|email|unique:users',
]);
$teacher = new User();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = Hash::make($request->password);
        $teacher->user_type = 2;
        $teacher->save();
        return redirect('admin/teacher/list')->with('status', 'Teacher Created Successfully!!');
}
public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);

        if (!empty($data['getRecord'])) {
            return view('admin.teacher.edit', $data);
        } else {
            abort(404);
        }
    }

    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'email' => 'required |email|unique:users,email,' . $id,
        ]);
        $student = User::getSingle($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->save();
        return redirect('admin/teacher/list')->with('success', 'Teacher Created Updated!!');
    }

    public function delete($id)
    {
        $getRecord = User::getSingle($id);

        if (!empty($getRecord)) {
            $getRecord->is_delete = 1;
            $getRecord->save();
            return redirect('admin/teacher/list')->with('success', 'Teacher Deleted Successfully!!');
        } else {
            abort(404);
        }
    }

    // My Students
    public function myStudent($id){
        $data['getTeacher']=User::getSingle($id);
        $data['header_title']='My Students';
        $data['teacher_id']=$id;
        $data['getRecord'] =User::getStudent();
        $data['getSearchStudent']=User::getSearchStudent();
        $data['getMyRecord'] = User::getMyStudent($id);
        return view('admin.teacher.mystudent',$data);
        }
        public function assignStudentTeacher($student_id,$teacher_id){
            $student=User::getSingle($student_id);
            $student->teacher_id=$teacher_id;
            $student->save();
            return redirect()->back()->with('success', 'Teacher Assigned Successfully!!');
            }
            public function assignStudentTeacherDelete($student_id){
            $student=User::getSingle($student_id);
            $student->teacher_id=null;
            $student->save();
            return redirect()->back()->with('success', ' Assigned Teacher  Deleted Successfully!!');
            }

            // Teacher Side Work

            public function myStudentTeacher(){
                $id=Auth::user()->id;
                $data['header_title']='My Students';
                $data['getRecord'] = User::getMyStudent($id);
                return view('teacher.mystudent',$data);
                }
                //  Proposals
                public function approveProposal($id){

                    $approve=Proposal::getSingle($id);
                    $approve->status='Approved';
                    $approve->save();
                    return redirect('teacher/my_student/proposal')->with('success','Proposal Approved');

                }
                public function rejectProposal($id){

                    $approve=Proposal::getSingle($id);
                    $approve->status='Rejected';
                    $approve->save();
                    return redirect('teacher/my_student/proposal')->with('error','Proposal Rejected');

                }
                public function viewProposal($id){
                    $data=Proposal::getSingle($id);
                    return view('teacher.view_proposal',compact('data'));
                }



}
