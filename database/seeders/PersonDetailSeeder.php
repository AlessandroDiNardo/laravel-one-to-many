<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Model
use App\Models\Person;
use App\Models\PersonDetail;

class PersonDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::all() -> each(function($p){
            $persDet = PersonDetail::factory()->make();
            $persDet -> person() -> associate($p);

            $persDet ->save();
        });
    }
}
