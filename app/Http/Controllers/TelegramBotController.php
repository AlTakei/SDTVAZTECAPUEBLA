<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function handle(Request $request)
    {
        $update = Telegram::commandsHandler(true);

        $message = $update->getMessage();
        $chat_id = $message->getChat()->getId();

        $text = 'Este es un mensaje personalizado';
        
        Telegram::sendMessage([
            'chat_id' => $chat_id,
            'text' => 'Hello!'
        ]);
    }
}
