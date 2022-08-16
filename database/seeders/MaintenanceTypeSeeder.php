<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintenanceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Maintenance_type::create(["maintenance"=>"1000 Kilo"],
                                             ["maintenance"=>"10000 kilo"],
                                             ["maintenance"=>"30000 kilo"],
                                             ["maintenance"=>"100000 kilo"]);
    }
}
