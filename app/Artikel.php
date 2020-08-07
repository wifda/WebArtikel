<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $primaryKey = "ARTIKEL_ID";
    protected $table ="artikel";
    protected $fillable = ['GAMBAR_ID', 'STATUS_ID', 'ARTIKEL_TITLE', 'ARTIKEL_KUTIPAN', 'ARTIKEL_KONTEN'];

    public function artikelToStatus(){
    	return $this->belongsTo(Status::class,'STATUS_ID');
    }

    public function artikelToGambar(){
    	return $this->belongsTo(Gambar::class,'GAMBAR_ID');
    }
}
