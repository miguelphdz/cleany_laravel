<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'id_preferences'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function preference() {
        return $this->belongsTo(Preference::class, 'id_preferences');
    }
}
