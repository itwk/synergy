<?php


namespace App\Notification;


interface NotificatorInterface
{
//    public function __construct(NotificatorInterface $notificator);
    public function send($phone, $text);
}
