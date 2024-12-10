<?php

namespace Database\Seeders;

use App\Models\medication;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $brands = [
            [
               'name' => '' 
            ],
        ];
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // DB::table('brands')->insert($brands);
        // brand::factory(10)->create(new Sequence(
        //     ['name' => 'Actemra'],
        //     ['name' => 'Acthar'],
        //     ['name' => 'Actimmune'],
        //     ['name' => 'Activase'],
        //     ['name' => 'Adacel'],
        //     ['name' => 'Adakveo'],
        //     ['name' => 'Adbry'],
        //     ['name' => 'Adcetris'],
        //     ['name' => 'Adcirca'],
        //     ['name' => 'Adempas'],
        //     ));
        // "NAMES",
        $some = [
          ["subject" => "ENGLISH",], 
          ["subject" => "KISWA",], 
          ["subject" => "MATHS",], 
          ["subject" => "ENVIRON",], 
          ["subject" => "C.R.E",], 
          ["subject" => "CREATIVE ART",], 

        ];
        $count = 0;
        $medications = medication::get('brand_id');
        foreach ($medications as $med) {
            $count++;
            // DB::table('medications')->where('id', '=',$count)->update(['brand_id' => random_int(1,9)]);
            DB::table('subjects')->insert($some);
        }
    }
}
