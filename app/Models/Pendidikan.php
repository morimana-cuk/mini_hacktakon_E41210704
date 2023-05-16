<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';
    protected $primaryKey = 'nim';
    public $incrementing = false; // auto pada primaryKey incremment false
  public $timestamps = false; // create_at dan update_at false
}
