<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Afram',
                'company' => 'smartcash',
                'org_number' => '123456-1234',
                'SSN' => '1995-3254-3453',
                'ZIP_Code' => '534-34',
                'residence' => 'norrköping',
                'description' => 'description',
                'created_at' => '2020-10-07 09:08:28',
                'updated_at' => '2020-10-07 09:08:28',
            ],
            [
                'id' => 2,
                'name' => 'John',
                'company' => 'smartcash',
                'org_number' => '123456-1234',
                'SSN' => '1995-3254-3453',
                'ZIP_Code' => '534-34',
                'residence' => 'norrköping',
                'description' => 'description',
                'created_at' => '2020-10-07 09:08:28',
                'updated_at' => '2020-10-07 09:08:28',
            ],
            [
                'id' => 3,
                'name' => 'Hanna',
                'company' => 'smartcash',
                'org_number' => '123456-1234',
                'SSN' => '1995-3254-3453',
                'ZIP_Code' => '534-34',
                'residence' => 'norrköping',
                'description' => 'description',
                'created_at' => '2020-10-07 09:08:28',
                'updated_at' => '2020-10-07 09:08:28',
            ],
        ];

        Customer::insert($customers);
    }
}
