<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'Kategori';
    protected $primaryKey = 'id_mapel';
    public $timestamps = false;
    protected $guarded = [];

  
}
