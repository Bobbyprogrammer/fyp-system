<?php
namespace App\Http\Controllers;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProposalController extends Controller
{
    public function list()
    {
        $data['header_title'] = 'My Proposal';
$id=Auth::user()->id;
        $data['getRecord']=Proposal::getRecord($id);
        return view('student.proposal.list', $data);
    }
    public function add()
    {
        $data['header_title'] = 'Add Proposal';
        return view('student.proposal.add', $data);
    }

    public function insert(Request $request)
    {

        $validated=$request->validate([
'title'=>'required',
'description'=>'required',
'feature'=>'required',
'tools'=>'required',
        ]);
        $data = new Proposal();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->feature = $request->feature;
        $data->methodology = $request->methodology;
        $data->tools = $request->tools;
        $data->suggestion = $request->suggestion;
        $data->student_id = Auth::user()->id;

        $data->save();
        return redirect('student/proposal/list')->with('success', 'Proposal Added Successfully');

    }
    public function edit($id){
        $data['getRecord']=Proposal::getSingle($id);
$data['header_title']='Edit Proposal';
        return view('student.proposal.edit',$data);
    }
    public function update(Request $request, $id){
        $data=Proposal::getSingle($id);
        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'feature'=>'required',
            'tools'=>'required',
                    ]);
                    $data->title = $request->title;
                    $data->description = $request->description;
                    $data->feature = $request->feature;
                    $data->methodology = $request->methodology;
                    $data->tools = $request->tools;
                    $data->suggestion = $request->suggestion;
                    $data->save();
                    return redirect('student/proposal/list')->with('success', 'Proposal Updated Successfully');
    }

    public function delete($id){
        $data=Proposal::getSingle($id);
        $data->delete();
        return redirect('student/proposal/list')->with('success', 'Proposal Deleted Successfully');

    }

    // Teacher Side Work


    // Proposal of Students
    public function  myStudentProposal()
    {
        $id=Auth::user()->id;
        $data['header_title'] = 'My Students Proposal';
        $data['getRecord']=Proposal::getProposalTeacher($id);
        return view('teacher.proposal', $data);
    }
    // Teacher Suggestions To Proposal
    public function editTeacher($id){
        $data['getRecord']=Proposal::getSingle($id);
$data['header_title']='Edit Proposal';
        return view('student.proposal.edit',$data);
    }
    public function updateTeacher(Request $request, $id){
        $data=Proposal::getSingle($id);
        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'feature'=>'required',
            'tools'=>'required',
                    ]);
                    $data->title = $request->title;
                    $data->description = $request->description;
                    $data->feature = $request->feature;
                    $data->methodology = $request->methodology;
                    $data->tools = $request->tools;
                    $data->suggestion = $request->suggestion;
                    $data->save();
                    return redirect('teacher/my_student/proposal')->with('success', 'Proposal Updated Successfully');
    }

    // Student View Proposal

    public function viewMyProposal($id){
        $data=Proposal::getSingle($id);
        return view('student.proposal.view',compact('data'));
    }
}
