<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use LaravelSmpp\SmppServiceInterface;

class Smpp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'smpp:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle(SmppServiceInterface $smpp)
    {
        $smpp->sendOne("201005252259", 'Hi, this SMS was send via SMPP protocol');
        dd("dd");
    }
}
