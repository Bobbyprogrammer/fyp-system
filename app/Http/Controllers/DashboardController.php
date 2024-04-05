<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ClassModel;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['header_title'] = 'Dashboard';
        if (Auth::user()->user_type == 1) {
            $data['totalStudent']=User::getTotalStudent(3);
            $data['totalAdmin']=User::getTotalAdmin(1);
            $data['totalTeacher']=User::getTotalTeacher(2);
            $data['totalClass']=ClassModel::getTotalClass();
            $data['totalProposal']=Proposal::getTotalProposal();
            return view('admin.dashboard', $data);
        } else if (Auth::user()->user_type == 2) {
        $teacher_id=Auth::user()->id;
            $data['totalStudent']=User::getTotalMyStudent($teacher_id);
            $data['totalProposal']=Proposal::getTotalMyStudentProposal($teacher_id);
            return view('teacher.dashboard', $data);
        } else if (Auth::user()->user_type == 3) {
            return view('student.dashboard', $data);
        }
    }
}
