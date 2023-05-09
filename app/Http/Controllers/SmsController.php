<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelSmpp\SmppServiceInterface;

class SmsController extends Controller
{
    public function send(SmppServiceInterface $smpp)
    {
        dd($smpp);
        $smpp->sendOne("01550061007", 'Hi, this SMS was send via SMPP protocol');
    }
}
