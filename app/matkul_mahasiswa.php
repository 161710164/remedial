<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkul_mahasiswa extends Model
{
    protected $table ='matkul_mahasiswa';
    protected $fillable = array('mahasiswa_id', 'mapel_id');

    public function mahasiswa()
    {
    	return $this->hasMany('App\mahasiswa', 'mahasiswa_id');
    }

    public function matakul()
    {
    	return $this->hasMany('App\matakul', 'mapel_id');
    }
}
