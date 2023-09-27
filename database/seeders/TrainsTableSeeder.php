<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i <200 ; $i++) { 
            
            $train = new Train();
            
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->numberBetween(1000, 9999);
            $train->numero_carrozze = $faker->numberBetween(0, 99);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->data_odierna = $faker->dateTimeInInterval("-3 days", "+6days");
            
            $train->save();
        }
    }
}
