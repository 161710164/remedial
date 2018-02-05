<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakul extends Model
{
    protected $table='mata_kuliah';
    protected $fillable= array('nama_matkul','kkm');
}
