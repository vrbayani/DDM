<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $modules = [
         	[
         		'name' => 'Prostodontics',
         		'module_number' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
         	],
         	[
         		'name' => 'Endodontics',
         		'module_number' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
         	],
         	[
         		'name' => 'Restorative Dentistry',
         		'module_number' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
         	],
         	[
         		'name' => 'Orthodontics',
         		'module_number' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
         	],
         	[
         		'name' => 'Oral Surgery',
         		'module_number' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
         	],
         	[
         		'name' => 'Periodontics',
         		'module_number' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
         	],
         	[
         		'name' => 'Oral Diagnostics',
         		'module_number' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
         	],
         	[
         		'name' => 'Pediatric Dentistry',
         		'module_number' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
         	],
        ];

        DB::table('modules')->insert($modules);

    }
}
