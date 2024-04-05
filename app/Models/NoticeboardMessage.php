<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeboardMessage extends Model
{
    use HasFactory;
    protected $table='notice_board_message';
    static public function DeleteRecord($id){
       
       NoticeboardMessage::where('noticeboards_id','=',$id)->delete();
    }
}

