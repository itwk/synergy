<?php


namespace App;


use App\Models\User;
use App\Notification\PushNotificator;

class PushNotificationService implements NotificationServiceInterface
{
    private $notificator;

    public function __construct(PushNotificator $notificator)
    {
        $this->notificator = $notificator;
    }

    public function notify(User $user, $text)
    {
        $this->notificator->send($user->deviceId, $text);
    }
}
