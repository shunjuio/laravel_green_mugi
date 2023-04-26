<?php

namespace App\Console\Commands;

use App\Jobs\SendTestMailJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Queue;


class SendTestMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send-mail';

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
      SendTestMailJob::dispatch()
        ->onQueue('testmail');
      echo "Sent Queue" ."\n";
    }
}
