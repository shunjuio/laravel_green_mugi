<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use App\Person; //これを追加

class PersonEvent
{
    use  SerializesModels;
    public $person;

    public function __construct(Person $person)
    {
      $this->person = $person;
    }

}
