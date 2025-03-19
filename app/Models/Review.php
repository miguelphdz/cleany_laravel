<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'id_user', 'id_profile'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function profile() {
        return $this->belongsTo(Profile::class, 'id_profile');
    }
}
