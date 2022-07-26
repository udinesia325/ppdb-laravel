<?php

namespace Database\Seeders;

use App\Models\DataSiswa;
use Illuminate\Database\Seeder;

class DataSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataSiswa::factory(5)->create();
    }
}
