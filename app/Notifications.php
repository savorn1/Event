<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
