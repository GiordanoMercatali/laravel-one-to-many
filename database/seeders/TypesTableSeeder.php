<?php

namespace Database\Seeders;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<5; $i++){
            $type = new Type();
            $type->name = $faker->word();
            $type->slug = Str::slug($type->name);
            $type->save();
        }
    }
}
