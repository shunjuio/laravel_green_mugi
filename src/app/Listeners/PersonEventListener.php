<?php

namespace App\Listeners;

use App\Events\PersonEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Person;
use Illuminate\Support\Facades\Storage;
class PersonEventListener
{
  public function __construct()
  {

  }

  public function handle(PersonEvent $event)
  {
    Storage::append('person_access_log.txt',
    '[PersonEvent] ' .now() . ' ' .
    $event->person->all_data);
  }
}
