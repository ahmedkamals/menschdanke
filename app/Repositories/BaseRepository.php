<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository extends Model
{
  const CREATED_AT = 'created';
  const UPDATED_AT = 'modified';

   /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
   protected $dates = ['created', 'modified'];

   public function getCreatedAtColumn() {
     return self::CREATED_AT;
   }

   public function getUpdateAtColumn() {
      return self::UPDATED_AT;
   }
}
