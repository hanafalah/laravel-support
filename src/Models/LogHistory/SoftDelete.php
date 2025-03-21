<?php

namespace Hanafalah\LaravelSupport\Models\LogHistory;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelSupport\Models;

class SoftDelete extends Models\BaseModel
{
  use HasProps, SoftDeletes;

  public $incrementing     = false;
  protected $primaryKey    = "id";
  protected $keyType       = 'string';
  protected $fillable      = [
    "id",
    "reference_id",
    "reference_type",
    "user_id",
    "user_name",
    "props",
    "deleted_at"
  ];

  public function reference()
  {
    return $this->morphTo('reference');
  }
  public function user()
  {
    return $this->belongsToModel('User');
  }
}
