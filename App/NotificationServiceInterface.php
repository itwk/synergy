<?php


namespace App;


use App\Models\User;

interface NotificationServiceInterface
{
    public function notify(User $user, $text);

}
