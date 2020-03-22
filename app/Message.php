<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['session_id', 'body'];

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
