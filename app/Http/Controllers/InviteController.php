<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\User;

class InviteController extends Controller
{
    function invite_friend(Request $request){
        $link = User::where('email', $request->email)->first()->referral_link;
        Mail::to($request->friendEmail)->send(new SendMailable( $request->name, $link ));
        
        return 'Email was sent';
    }
}