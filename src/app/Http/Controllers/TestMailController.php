<?php

namespace App\Http\Controllers;


use App\Jobs\SendTestMailJob;
use App\Mail\SendTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
  public function index()
  {
    return '<h1>Hello</h1>';
  }
  public function send()
  {
    SendTestMailJob::dispatch();
  }
}
