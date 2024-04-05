<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeBoard;
use App\Models\NoticeboardMessage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class NoticeBoardController extends Controller
{
public function noticeBoard(){
    $data['getRecord']=NoticeBoard::getRecord();
$data['header_title']="Notice Board";
    return view('admin.noticeboard.list',$data);
}
public function addNoticeBoard(){
    $data['header_title']="Add Notice";
    return view('admin.noticeboard.add',$data);
}
public function insertNoticeBoard(Request $request){
    $data=new Noticeboard();
    $data->title=$request->title;
    $data->notice_date=$request->notice_date;
    $data->publish_date=$request->publish_date;
    $data->message=$request->message;
    $data->created_by=Auth::user()->id;
    $data->save();

    if(!empty($request->message_to)){
        foreach ($request->message_to as  $message_to) {
            $message=new NoticeboardMessage();
            $message->noticeboards_id=$data->id;
            $message->message_to=$message_to;
            $message->save();
                }
    }


    return redirect('admin/notice_board')->with('success','Notice Add Successfully!!');

}

public function edit($id){
    $data['getdata']=NoticeBoard::getSingle($id);
$data['header_title']="Edit Notice Board";
    return view('admin.noticeboard.edit',$data);
}

public function update(Request $request, $id){
    $data= Noticeboard::getSingle($id);
    $data->title=$request->title;
    $data->notice_date=$request->notice_date;
    $data->publish_date=$request->publish_date;
    $data->message=$request->message;

    $data->save();

    NoticeboardMessage::DeleteRecord($id);
    if(!empty($request->message_to)){
        foreach ($request->message_to as  $message_to) {
            $message=new NoticeboardMessage();
            $message->noticeboards_id=$data->id;
            $message->message_to=$message_to;
            $message->save();
                }
    }


    return redirect('admin/notice_board')->with('success','Notice Updated Successfully!!');

}





public function delete($id){
    $data=NoticeBoard::getSingle($id);
    $data->delete();
    return redirect('admin/notice_board')->with('success','Notice Add Successfully!!');

}

// Student side work
public function myNoticeboardStudent(){
    $data['getRecord']=NoticeBoard::getRecordUser(Auth::user()->user_type);
    $data['header_title']="my Notice Board";
    return view('student.mynoticeboard',$data);
}
// Teacher Side Work
public function myNoticeboardTeacher(){
    $data['getRecord']=NoticeBoard::getRecordUser(Auth::user()->user_type);
    $data['header_title']="my Notice Board";
   return view('teacher.mynotice',$data);
}
}
