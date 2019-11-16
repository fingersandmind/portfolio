<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['about', 'user_id', 'address', 'website', 'facebook', 'instagram', 'other_info', 'other_info2'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
