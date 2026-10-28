<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            ['username' => 'maria_admin', 'full_name' => 'Maria Lopez'],
            ['username' => 'josh_cashier', 'full_name' => 'Joshua Tan'],
            ['username' => 'ella_cashier', 'full_name' => 'Ella Ramos'],
            ['username' => 'paolo_stock', 'full_name' => 'Paolo Lim'],
            ['username' => 'sara_manager', 'full_name' => 'Sara Aquino'],
        ] as $user) {
            User::updateOrCreate(['username' => $user['username']], $user);
        }
    }
}
