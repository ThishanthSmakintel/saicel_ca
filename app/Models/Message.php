<?php

// Message.php model

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'message_content', 'sender_name', 'email', 'service_id', 'confirmation_email_sent',
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

