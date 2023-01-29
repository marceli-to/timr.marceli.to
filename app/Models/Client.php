<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\ModelFlags\Models\Concerns\HasFlags;

class Client extends Model
{
  use SoftDeletes, HasFlags;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'acronym',
    'byline',
    'street',
    'zip',
    'city',
  ];
}
