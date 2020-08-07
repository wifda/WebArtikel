<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    //
	protected $primaryKey = "GAMBAR_ID";
    protected $table = "gambar";

    public function gambarToArtikel(){
    	return $this->hasMany(Artikel::class);
    }

}
