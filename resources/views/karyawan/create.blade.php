@extends('karyawan.layout')

@section('content')
<br><br>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card shadow" style="width: 24rem">
            <div class="card-header">
                Tambah Data Pegawai
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Waduh!</strong>Kesalahan input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{route('karyawan.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="text" name="nip" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">NAMA</label>
                        <input type="text" name="nama" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">JENIS KELAMIN</label>
                        <input type="text" name="jenis_kelamin" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">STATUS</label>
                        <input type="text" name="status_nikah" class="form-control" id="">
                    </div>
                       <div class="form-group">
                        <label for="jabatan_id">PILIH GOLONGAN</label>
                        <select class="form-control select2" style="width: 100%" name="golongan_id" id="">
                            <option value="" disable>Pilih Golongan</option>
                         @foreach ( $gol as $item )
                          <option value="{{ $item->id}}">{{ $item->nama_golongan}}</option>
                           @endforeach
                      </select>
                       </div>
                    <div class="form-group">
                        <label for="">AGAMA</label>
                        <input type="text" name="agama" class="form-control" id="">
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>

            </div>
        </div>
    </div>
</div>
<br><br>
    
@endsection