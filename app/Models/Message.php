<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name', 'email', 'subject', 'service', 'message',
    ];

    protected $guarded = [
        'id', 'created_at', 'updated_at',
    ];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
