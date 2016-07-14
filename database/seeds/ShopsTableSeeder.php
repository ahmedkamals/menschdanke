<?php

use Illuminate\Database\Seeder;
use App\Repositories;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Repositories\ShopsRepository::create([
          'name' => str_random(10),
          'description' => str_random(100),
      ]);
    }
}
