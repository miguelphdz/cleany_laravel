<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = ['date'];

    public function messages() {
        return $this->hasMany(Message::class, 'id_chats');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_chats', 'id_chats', 'id_users');
    }
}
