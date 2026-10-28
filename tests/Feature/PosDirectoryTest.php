<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PosDirectoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_seeded_records_are_displayed_on_the_directory_pages(): void
    {
        $this->seed();

        $this->assertSame(5, Customer::count());
        $this->assertSame(5, User::count());

        $this->get('/')->assertOk()->assertSee('TOTAL CUSTOMERS')->assertSee('TEAM USERS');
        $this->get('/customers')->assertOk()->assertSee('Andrea Reyes')->assertSee('andrea.reyes@example.com');
        $this->get('/users')->assertOk()->assertSee('Maria Lopez')->assertSee('maria_admin');
    }

    public function test_directories_show_new_database_records(): void
    {
        Customer::create(['full_name' => 'New Customer', 'email' => 'new@example.com', 'phone' => '0999 123 4567']);
        User::create(['username' => 'new_user', 'full_name' => 'New User']);

        $this->get('/customers')->assertOk()->assertSee('New Customer')->assertSee('0999 123 4567');
        $this->get('/users')->assertOk()->assertSee('New User')->assertSee('new_user');
    }
}
