<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    $customers = Customer::factory()->count(30)->make();

        $this->call(CustomerSeeder::class);
        // Customer::factory(10)->create();
    }
}
