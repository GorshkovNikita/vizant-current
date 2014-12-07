<?php

class HomeController extends BaseController {

	public function postMail() {

        $msg = Input::all();

        if (Input::exists('order-submit')) {

            HomeController::sendOrder($msg);

        }
        elseif (Input::exists('tel-submit')) {

            HomeController::sendCall($msg);

        }
        elseif (Input::exists('mail-submit')) {

            HomeController::sendMail($msg);

        }

        return Redirect::to(URL::previous());

    }

    private static function sendOrder($msg) {

        $filepath = '';
        if (Input::hasFile('order-file')) {
            $destinationPath = __DIR__.'/../../www/files/';
            $file = Input::file('order-file');
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $filepath = $destinationPath.'/'.$filename;
        }

        $data = [
            'name' => $msg['order-user-name'],
            'email' => $msg['order-user-email'],
            'tel' => $msg['order-user-tel'],
            'typeproduct' => $msg['order-type-product'],
            'typework' => $msg['order-type-work'],
            'text' => $msg['order-text']
        ];

        Mail::send('emails.order', $data, function(\Illuminate\Mail\Message $message) use ($data, $filepath) {

            $message->from($data['email'], $data['name']);
            $message->to('rk@vizant.ru', 'Vizant')->subject('Заказ с сайта vizant.ru');
            if ($filepath != '')
                $message->attach($filepath);

        });

    }

    private static function sendCall($msg) {

        $data = [
            'name' => $msg['tel-user-name'],
            'email' => $msg['tel-user-email'],
            'tel' => $msg['tel-user-tel'],
            'time' => $msg['tel-time']
        ];

        Mail::send('emails.tel', $data, function(\Illuminate\Mail\Message $message) use ($msg) {

            $message->from($msg['tel-user-email'], $msg['tel-user-name']);
            $message->to('rk@vizant.ru', 'Vizant')->subject('Запрос на обратный звонок с сайта vizant.ru');

        });

    }

    private static function sendMail($msg) {

        $data = [
            'name' => $msg['mail-user-name'],
            'email' => $msg['mail-user-email'],
            'tel' => $msg['mail-user-tel'],
            'text' => $msg['mail-text']
        ];

        Mail::send('emails.mail', $data, function(\Illuminate\Mail\Message $message) use ($msg) {

            $message->from($msg['mail-user-email'], $msg['mail-user-name']);
            $message->to('rk@vizant.ru', 'Vizant')->subject('Сообщение с сайта vizant.ru');

        });

    }

}
