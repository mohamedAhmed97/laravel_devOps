<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class updateVersion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:version';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update version of current app';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newVersion = env('APP_CURRENT_VERSION') + 0.1;
        $this->putPermanentEnv('APP_CURRENT_VERSION', $newVersion);
        echo env('APP_CURRENT_VERSION');
        return Command::SUCCESS;
    }

    public function putPermanentEnv($key, $value)
    {
        $path = app()->environmentFilePath();

        $escaped = preg_quote('=' . env($key), '/');
        
        file_put_contents($path, preg_replace(
            "/^{$key}{$escaped}/m",
            "{$key}={$value}",
            file_get_contents($path)
        ));
    }
}
