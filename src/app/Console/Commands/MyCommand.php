<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Person;

class MyCommand extends Command
{
  protected $signature = 'my:cmd';
  protected $description = 'This is my first command';

  public function __construct()
  {
      parent::__construct();
  }

  public function handle()
  {
    $min = (int)$this->ask('min age:');
    $max = (int)$this->ask('max age:');
    $headers = ['id', 'name', 'age', 'mail'];
    $result = Person::select($headers)
      ->where('age', '>=' , $min)
      ->where('age', '<=', $max)
      ->orderBy('age')->get();
    if ($result->count() == 0)
    {
      $this->error("can't find Person.");
      return;
    }
    $data = $result->toArray();
    $this->table($headers, $data);

  }
}
