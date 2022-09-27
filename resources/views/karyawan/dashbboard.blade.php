@extends('karyawan.layout')

@section('content')
    
<div class="container">
    <br><br>
    <h3 class="text-center">Jumlah Data Pegawai</h3>
    <br><br>
    <div class="row">
    <a href="{{route('karyawan.index')}}" class="btn btn-success">Data Pegawai</a>
    &nbsp; &nbsp;
    <a href="{{route('golongan.index')}}" class="btn btn-primary">Data Golongan</a>
    &nbsp; &nbsp;
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Aksi
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <div class="container">
                <li>
                    <button type="submit" class="btn btn-success">ADMINISTRATOR</button>
                </li>
                <div style="margin-top: 10px;">
          <li>
            <form action="{{url('aksilogout')}}" method="post" >
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
             </form>
         </li>
                </div>
        </div>
        </ul>
      </div>
        
</div>
    <br><br>
    <div class="d-flex justify-content-center">
    <div class="card shadow" style="width: 15rem;">
        <div class="card-body">
            <p class="">{{$countpegawai}}</p>
            <p>Jumlah Pegawai</p>
            <hr>
            <div class="text-center">
            <a href="{{route('karyawan.index')}}">Info Lanjut</a>
        </div>
        </div>
    </div>
</div>
</div>
@endsection