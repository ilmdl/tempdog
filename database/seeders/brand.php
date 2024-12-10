<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class brand extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        brand::factory(10)->create(new Sequence(
            ['name' => 'Actemra'],
            ['name' => 'Acthar'],
            ['name' => 'Actimmune'],
            ['name' => 'Activase'],
            ['name' => 'Adacel'],
            ['name' => 'Adakveo'],
            ['name' => 'Adbry'],
            ['name' => 'Adcetris'],
            ['name' => 'Adcirca'],
            ['name' => 'Adempas'],
            ));
    }
}
