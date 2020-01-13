<?php

namespace App;

use App\Scopes\ReverseScope;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $guarded = [];


  public static function boot()
  {
    parent::boot();

    static::addGlobalScope(new ReverseScope);
  }

  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
