<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Invoice;
use App\Models\Client;

class GenerateInvoices extends Command
{
    protected $signature = 'generate:invoices
                            {count=50 : Number of invoices to generate}
                            {--client= : Specific client ID to assign invoices to}';

    protected $description = 'Generate fake invoices for testing';

    public function handle()
    {
        $count = (int)$this->argument('count');
        $clientId = $this->option('client');

        // Verify we have clients
        if (Client::count() === 0) {
            $this->error('No clients found. Please create clients first.');
            return;
        }

        $this->info("Generating {$count} invoices...");

        $bar = $this->output->createProgressBar($count);

        Invoice::factory()
            ->count($count)
            ->create([
                'client_id' => $clientId ?: Client::inRandomOrder()->first()->id
            ])
            ->each(function () use ($bar) {
                $bar->advance();
            });

        $bar->finish();
        $this->newLine();
        $this->info("Successfully generated {$count} invoices!");
    }
}
