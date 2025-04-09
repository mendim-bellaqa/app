<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Client;

class GenerateClients extends Command
{
    protected $signature = 'generate:clients {count=100}';
    protected $description = 'Generate fake clients for testing';

    public function handle()
    {
        $count = (int) $this->argument('count');

        if ($count < 1) {
            $this->error('Count must be at least 1');
            return;
        }

        $this->info("Generating {$count} clients...");

        $bar = $this->output->createProgressBar($count);

        Client::factory()
            ->count($count)
            ->create()
            ->each(function () use ($bar) {
                $bar->advance();
            });

        $bar->finish();
        $this->newLine();
        $this->info("Successfully generated {$count} clients!");
    }
}
