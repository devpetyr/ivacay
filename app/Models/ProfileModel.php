<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    protected $table= "profiles";
    use HasFactory;

    public function getProfileUser()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
