<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ClassModel;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Import\UserImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function changePassword()
    {
        $data['header_title'] = "Change password";
        return view('profile.change_password', $data);
    }
    public function updatePassword(Request $request)
    {
        $user = User::getSingle(Auth::user()->id);
        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('success', 'password successfully updated');
        } else {
            return redirect()->back()->with('error', 'Old Password is not correct');
        }
    }

    // Importing Students Routes
    public function import()
    {
        $data['getClass'] = ClassModel::getClass();
        return view('admin.student.import', $data);
    }
    public function store(Request $request)
    {
        $student = Excel::Import(new UsersImport, request()->file('file'));
        return redirect('import')->with('success', 'Students Imported Successfully');
    }
}
