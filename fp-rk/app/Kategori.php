<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = kategoris;
    protected $fillable = [nama_mapel];
    public $timestamps = false;
}
