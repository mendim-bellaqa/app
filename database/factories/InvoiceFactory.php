<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition()
    {
        return [
            'client_id' => Client::factory(),
            'invoice_number' => 'INV-'.now()->format('Ymd').'-'.$this->faker->unique()->numberBetween(1000, 9999),
            'invoice_date' => now(),
            'due_date' => now()->addDays(30),
            'status' => $this->faker->randomElement(['draft', 'sent', 'paid', 'overdue']),
            'subtotal' => $this->faker->randomFloat(2, 100, 10000),
            'tax_rate' => $this->faker->randomFloat(2, 0, 20),
            'tax_amount' => function (array $attributes) {
                return $attributes['subtotal'] * ($attributes['tax_rate'] / 100);
            },
            'total' => function (array $attributes) {
                return $attributes['subtotal'] + $attributes['tax_amount'];
            },
            'notes' => $this->faker->boolean(30) ? $this->faker->sentence : null,
        ];
    }
}
