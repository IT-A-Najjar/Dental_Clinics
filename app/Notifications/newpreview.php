<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newpreview extends Notification
{
    use Queueable;

    private $id_preview;
    private $user_create;
    private $name;
    public function __construct($id_preview,$user_create,$name)
    {
        $this->id_preview=$id_preview;
        $this->user_create=$user_create;
        $this->name=$name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase($notifiable)
    {
        return [
            'id_preview'=>$this->id_preview,
            'user_create'=>$this->user_create,
            'name'=>$this->name
        ];
    }
}
