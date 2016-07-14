<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class ShopsRepository extends BaseRepository
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
   protected $table = 'shops';

   public function offers()
   {
      return $this->hasMany(OffersRepository::class, 'shop_id');
   }
}
