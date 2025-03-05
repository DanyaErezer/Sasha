<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers;
use Illuminate\Http\Request;

class CallRequestController extends Controller
{
    public function call(Request $request)
    {
        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:30',
            'phone' => 'required|string|max:25',
        ]);

        // Получите данные
        $name = $request->input('name');
        $phone = $request->input('phone');

        // Отправка сообщения в Telegram
        $this->sendTelegramMessage($name, $phone);

        return redirect()->back()->with('success', 'Ваш запрос успешно отправлен!');
    }

    private function sendTelegramMessage($name, $phone)
    {
        // Удаление нецифровых символов из номера
        $phone = preg_replace('/\D/', '', $phone);

        $message = "Новое обращение:\nИмя: $name\nТелефон: $phone";


        Http::post("https://api.telegram.org/bot7933156134:AAGIi9VSq_PG3lr8zfIMUhvRsDNbmhK7YWE/sendMessage", [
            'chat_id' => '509595351',
            'text' => $message,
        ]);

    }


}
