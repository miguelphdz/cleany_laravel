<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'photo', 'id_users'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

}
