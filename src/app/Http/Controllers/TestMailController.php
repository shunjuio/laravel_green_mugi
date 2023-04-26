<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\sendTestMailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
  public function send()
  {
    Mail::to('test@example.com')
      ->send(new sendTestMailJob());
  }
}
