<?php

use App\Notification\EmailNotificator;
use App\Notification\PushNotificator;
use App\Notification\SmsNotificator;
use App\EmailNotificationService;
use App\PushNotificationService;
use App\SmsNotificationService;

$smsService = new SmsNotificationService(new SmsNotificator());
$emailService = new EmailNotificationService(new EmailNotificator());
$pushService = new PushNotificationService(new PushNotificator());

$text = 'Какой-то текст';

$users = [];
foreach ($users as $user) {
    $smsService->notify($user, $text);
    $emailService->notify($user, $text);
    $pushService->notify($user, $text);
}

