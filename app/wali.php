<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    protected $table ='wali';
    protected $fillable = array('nama', 'alamat', 'mahasiswa_id');

	public function mahasiswa()
	{
		return $this->belongsTo('App\mahasiswa', 'mahasiswa_id');
	}
}