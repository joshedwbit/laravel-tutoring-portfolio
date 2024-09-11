<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DbBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Database Backup - Users, Papers, Reviews tables';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $fileName = "backup_" . strtotime(now()) . ".sql" ;
        $command = "mysqldump -u " .  env('DB_USERNAME') . " -p" . env('DB_PASSWORD') . " --no-tablespaces " . env('DB_DATABASE') . " users papers reviews > " . storage_path() . "/app/backup/" . $fileName;

        $output = null;
        $resultCode = null;

        exec($command, $output, $resultCode);

        if ($resultCode === 0) {
            $this->info('Backup completed successfully.');
        } else {
            $this->error('Backup failed.');
        }
    }
}
