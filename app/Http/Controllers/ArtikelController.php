<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use App\Status;
use App\Artikel;
use DB;

class ArtikelController extends Controller
{
    //
    public function tambah(){
        $gambar = Gambar::all();
        $status = Status::all();
        $artikel = Artikel::all();
        
        return view('/tambah_artikel',compact('gambar','status','artikel'));
    }
    public function upload(Request $request){
        if($request->hasFile('gambar')){
            $resource = $request->file('gambar');
            $name = $resource->getClientOriginalName();
            $image = new Gambar;
            $image->GAMBAR_NAMA=$resource->getClientOriginalName();
            $resource->move(\base_path() ."/public/data_file", $image->GAMBAR_NAMA);
            // $save = DB::table('gambar')->insert(['image' => $image->GAMBAR_NAMA]);
            
            $image->save();
            
            // die();
            // $id = Image::create([
            //         'GAMBAR' => $name
            //     ]);
            echo 'aaa';
            echo "Gambar berhasil di upload";
            // echo $gambar;
            echo $image->gambar_id;
            
            echo 'aaa';
            // echo $gambar->ID_GAMBAR;
            // die();
            $id = Artikel::create([
                'STATUS_ID' =>$request->status_id,
                'GAMBAR_ID' => $image->gambar_id,
                'ARTIKEL_TITLE' => $request->title,
                'ARTIKEL_KUTIPAN' => $request->kutipan,
                'ARTIKEL_KONTEN' => $request->konten
            ]);
            
        }else{
            echo "Gagal upload artikel";
        }
               
        return redirect('/dashboard');
    }

    public function hapus($ARTIKEL_ID){
        $artikel = Artikel::findOrFail($ARTIKEL_ID);
        $gambar = Gambar::where('gambar_id', '=' , $artikel->GAMBAR_ID)->get();
        DB::delete('delete from artikel where ARTIKEL_ID = ?',[$ARTIKEL_ID]);
        DB::delete('delete from gambar where GAMBAR_ID = ?',[$artikel->GAMBAR_ID]);
        return redirect()->back();

    }
}
