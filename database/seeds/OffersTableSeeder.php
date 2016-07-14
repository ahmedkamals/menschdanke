<?php

use Illuminate\Database\Seeder;
use App\Repositories;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Repositories\ShopsRepository::class, 3)->create()->each(function($shop) {
        $shop->offers()->save(factory(Repositories\OffersRepository::class)->make());
      });
    }
}
