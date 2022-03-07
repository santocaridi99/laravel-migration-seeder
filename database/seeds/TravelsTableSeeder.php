<?php
// uso feker per inserire dati pseudoreali
use Faker\Generator as Faker;
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $travel = new Travel();
            // nome pacchetto fake do nomi femminli
            $travel->package = $faker->firstNameFemale();
            // destinazione do una nazione
            $travel->destination = $faker->country();
            // bonus
            $travel->familyBonus = $faker->boolean();
            // tipo di pacchetto
            // lunghezza di tre parole
            // true per non far ritornare un array
            $travel->type = $faker->word(3, true);
            // da 100 euro a 1000
            $travel->price = $faker->numberBetween(100, 1000);
            $travel->save();
        }
    }
}
