<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['session_id', 'body'];

    public function getCreatedAtAttribute($date)
    {
        Carbon::setLocale('nl');
        $localTime = Carbon::parse($date)->timezone('Europe/Amsterdam');
        return Carbon::parse($localTime)->format('H:i');
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
