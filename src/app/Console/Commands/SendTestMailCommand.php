<?php

namespace App\Console\Commands;

use App\Jobs\SendTestMailJob;
use Illuminate\Console\Command;

class SendTestMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stm:cmd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Test Mail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      SendTestMailJob::dispatch();
      echo "Sent Queue" ."\n";
    }
}
