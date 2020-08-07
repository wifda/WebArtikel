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
                    <input type="file" name="image">
                </div> 
                <div class="form-group">
                    <label>Status Bulan</label>
                    <br>
                    <select class="form-control form-control-sm mb-3" name="idstatus">
                        @foreach($status as $s)
                            <option value="{{$s->ID_STATUS}}">{{$s->STATUS_BULAN}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Proyek</label>
                    <br>
                    <select class="form-control form-control-sm mb-3" name="idspesifikasi">
                        @foreach($proyek_spek as $ps)
                            <option value="{{$ps->ID_SPESIFIKASI_PROYEK}}">{{$ps->NAMA_SPESIFIKASI_PROYEK}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">

                    @if($errors->has('keterangan'))
                        <div class="text-danger">
                            {{ $errors->first('keterangan')}}
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