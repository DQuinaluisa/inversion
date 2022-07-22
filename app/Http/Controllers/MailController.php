<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function enviar () {
        User::chunk(200, function($users){
            foreach ($users as $user) {
                Mail::send('emails', ['user' => $user],  function($message) use ($user) {

                    $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                    $message->to($user->email, $user->name)->subject('Tiene novedades para ti' . '  ' . '  ' . $user->name);



                });
            }
        });

        return view('message');
    }
}
