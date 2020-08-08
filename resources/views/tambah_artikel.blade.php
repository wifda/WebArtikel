@extends('admin/admin')
@section('konten')
<div class="container" style="align:center">
    <div class="card scroll" style="width:600px;">
        <div class="card-body">
            <h4>Tulis Artikel</h4>
            <form action="/artikel/upload" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Gambar Thumbnails</label>
                    <br>
                    <input type="file" name="gambar">
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="title" class="form-control" placeholder="Judul">

                    @if($errors->has('title'))
                        <div class="text-danger">
                            {{ $errors->first('title')}}
                        </div>
                    @endif
                </div> 
                <div class="form-group">
                    <input type="hidden" name="status_id" value="1">
                </div> 
                <div class="form-group">
                    <label>Kutipan</label>
                    <input type="text" name="kutipan" class="form-control" placeholder="Kutipan">

                    @if($errors->has('kutipan'))
                        <div class="text-danger">
                            {{ $errors->first('kutipan')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Konten</label>
                    <textarea name="konten" class="form-control" placeholder="Konten"></textarea>

                    @if($errors->has('konten'))
                        <div class="text-danger">
                            {{ $errors->first('konten')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Tambahkan">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection