<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassModelController extends Controller
{
    public function list()
    {
        $data['getRecord'] = ClassModel::getRecord();

        return view('admin.class.list', $data);
    }

    public function add()
    {
        return view('admin.class.add');
    }

    public function insert(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:class_models',
            'status' => 'required',
        ]);
        $save = new ClassModel();
        $save->name = $request->name;
        $save->status = $request->status;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('admin/class/list')->with('success', 'Class successfully Created');
    }

    public function edit($id)
    {
        $data['getRecord'] = ClassModel::getSingle($id);

        return view('admin.class.edit', $data);
    }

    public function update($id, Request $request)
    {
        $data = ClassModel::find($id);
        $data->name = $request->name;
        $data->status = $request->status;
        $data->save();

        return redirect('admin/class/list')->with('success', 'Class successfully Updated');
    }

    public function delete($id)
    {
        $save = ClassModel::getSingle($id);
        $save->is_delete = 1;
        $save->save();

        return redirect('admin/class/list')->with('success', 'Class successfully Deleted');
    }
}
