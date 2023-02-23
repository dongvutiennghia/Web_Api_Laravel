<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    Customer::factory()->count(30)->make();
    $customers=0;
    while($customers<30){
        $customers++;
    DB::table('customer')->insert([
        'name_customer' => Str::random(10),
        'phone_customer' => Str::random(10),
        'address_customer' => Str::random(10),

        'email_customer' => Str::random(10).'@gmail.com',
        'city_customer' => Str::random(10),

        // 'password' => Hash::make('password'),
    ]);
    }}
// }
}
