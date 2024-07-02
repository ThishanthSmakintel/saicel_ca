<?php


namespace App\Mail;

use App\Models\Message;
use App\Models\Reply;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $reply;

    public function __construct(Message $message, Reply $reply)
    {
        $this->message = $message;
        $this->reply = $reply;
    }

    public function build()
    {
        return $this->view('emails.reply_notification')
                    ->with([
                        'message' => $this->message,
                        'reply' => $this->reply,
                    ]);
    }
}
