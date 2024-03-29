<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
  protected $table = 'notifications';
  public $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;
  protected $dates = [
    'created_at'
  ];
}
