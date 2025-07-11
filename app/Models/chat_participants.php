<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat_participants extends Model
{
    use HasFactory;
     protected $table = "chat_participants";
    protected $guarded = ["id"];
     public function user(){
        return $this->belongsTo(User::class , 'chat_id');
    }
}
