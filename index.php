<?php

use App\EmailNotificationService;
use App\SmsNotificationService;

$smsService = new SmsNotificationService();
$emailService = new EmailNotificationService();

$text = 'Какой-то текст';

$users = [];
foreach ($users as $user) {
    $smsService->notify($user, $text);
    $emailService->notify($user, $text);
}

