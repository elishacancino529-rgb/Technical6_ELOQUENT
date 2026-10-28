<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            ['full_name' => 'Andrea Reyes', 'email' => 'andrea.reyes@example.com', 'phone' => '0917 555 0101'],
            ['full_name' => 'Miguel Santos', 'email' => 'miguel.santos@example.com', 'phone' => '0917 555 0102'],
            ['full_name' => 'Bea Mendoza', 'email' => 'bea.mendoza@example.com', 'phone' => '0917 555 0103'],
            ['full_name' => 'Carlo Dela Cruz', 'email' => 'carlo.delacruz@example.com', 'phone' => '0917 555 0104'],
            ['full_name' => 'Nina Garcia', 'email' => 'nina.garcia@example.com', 'phone' => '0917 555 0105'],
        ] as $customer) {
            Customer::updateOrCreate(['email' => $customer['email']], $customer);
        }
    }
}
