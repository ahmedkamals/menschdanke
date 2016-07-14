<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class OffersRepository extends BaseRepository
{
  const DB_COLUMN_SHOP_ID = 'shop_id';

  /**
   * The table associated with the model.
   *
   * @var string
   */
   protected $table = 'offers';

   /**
   * Get the user that owns the phone.
   */
   public function shop()
   {
       return $this->belongsTo(ShopsRepository::class, static::DB_COLUMN_SHOP_ID);
   }
}
