<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    //
	protected $primaryKey = "gambar_id";
    protected $table = "gambar";
    protected $fillable = ['GAMBAR_NAMA'];

    public function gambarToArtikel(){
    	return $this->hasMany(Artikel::class);
    }

}
