<?php


namespace App;


use App\Models\User;
use App\Notification\EmailNotificator;

class EmailNotificationService implements NotificationServiceInterface
{
    private $notificator;

    public function __construct(EmailNotificator $notificator)
    {
        $this->notificator = $notificator;
    }

    public function notify(User $user, $text)
    {
        $this->notificator->send($user->email, $text);
    }
}
