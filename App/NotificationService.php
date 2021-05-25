<?php


namespace App;

use App\Models\User;
use App\Notification\EmailNotificator;
use App\Notification\SmsNotificator;

class NotificationService
{
    public function notify(User $user, $text)
    {
        $emailNotificator = new EmailNotificator();
        $smsNotificator = new SmsNotificator();
        $emailNotificator->sendEmail($user->email, $text);
        $smsNotificator>sendSms($user->phone, $text);
    }
}

