<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $primaryKey='ban_id';

  public function uploadKeKorlo(){
      return $this->belongsTo('App\Models\User','ban_creator','id');
}
}
