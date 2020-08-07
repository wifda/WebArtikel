<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $primaryKey = "STATUS_ID";
    protected $table = "status";

    public function statusToArtikel(){
    	return $this->hasMany(Artikel::class);
    }
}
