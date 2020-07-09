<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $table = "tb_category";

	protected $primaryKey = 'kat_id';

    protected $fillable = ['kat_nama', 'kat_teks'];
}
