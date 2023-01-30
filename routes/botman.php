<?php
use App\Http\Controller\BotManController;

$botman= resolve('botman');

$botman->hears('Hi',function($bot)
{
    $bot->reply('Hello');
}
);

$botman->hears('Start conversation', BotManController::class.'@startConversation');



?>