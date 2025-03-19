<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChat extends Model
{
    use HasFactory;
    protected $fillable = ['id_chats', 'id_users'];

    public function chat() {
        return $this->belongsTo(Chat::class, 'id_chats');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_users');
    }
}
