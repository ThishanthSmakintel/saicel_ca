<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'replies';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'message_id',
        'message',
        'status',
        'confirmation_email_sent',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get the message that owns the reply.
     */
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
