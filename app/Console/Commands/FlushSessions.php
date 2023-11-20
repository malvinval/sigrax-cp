<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FlushSessions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flush_sessions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Destroy all sessions.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Session::getHandler()->gc(0);
    }
}
