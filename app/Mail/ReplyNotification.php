<?php

namespace App\Mail;

use App\Models\Message;
use App\Models\Reply;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $messageModel;
    public $replyModel;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\Message $message
     * @param \App\Models\Reply $reply
     * @return void
     */
    public function __construct(Message $message, Reply $reply)
    {
        $this->messageModel = $message;
        $this->replyModel = $reply;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail-template.reply_notification')
                    ->subject('Reply Notification')
                    ->with([
                        'sender_name' => $this->messageModel->name,
                        'message_content' => $this->messageModel->message,
                        'reply_message' => $this->replyModel->message,
                        'reply_status' => $this->replyModel->status,
                        'reply_created_at' => $this->replyModel->created_at->format('Y-m-d H:i:s'),
                    ]);
    }
}
