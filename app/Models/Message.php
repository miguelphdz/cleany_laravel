<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['message', 'id_chats', 'id_user', 'time'];

    public function chat() {
        return $this->belongsTo(Chat::class, 'id_chats');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
}
