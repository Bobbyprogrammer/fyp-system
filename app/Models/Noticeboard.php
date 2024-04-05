<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Noticeboard extends Model
{
    use HasFactory;
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord(){
return self::select("noticeboards.*",'users.name as created_by')
->join("users","users.id","=","noticeboards.created_by")
->orderBy('noticeboards.id','desc')
->get();
    }
    public function getMessage(){
        return $this->hasMany(NoticeboardMessage::class,'noticeboards_id');
    }

     public function getMessageToSingle($noticeboards_id,$message_to){
       return NoticeboardMessage::where('noticeboards_id','=',$noticeboards_id)
        ->where('message_to','=',$message_to)->first();
    }

    static public function getRecordUser($message_to){
        return self::select("noticeboards.*",'users.name as created_by')
        ->join("users","users.id","=","noticeboards.created_by")
        ->join('notice_board_message','notice_board_message.noticeboards_id','=','noticeboards.id')
        ->where('notice_board_message.message_to','=',$message_to)
        ->where('noticeboards.publish_date','>=',date('Y-m-d'))
        ->orderBy('noticeboards.id','desc')
        ->get();
    }

}
