<?php


namespace App;


use App\Models\User;
use App\Notification\SmsNotificator;

class SmsNotificationService implements NotificationServiceInterface
{
    private $notificator;

    public function __construct(SmsNotificator $notificator)
    {
        $this->notificator = $notificator;
    }

    public function notify(User $user, $text)
    {
        $this->notificator->send($user->phone, $text);
    }
}
