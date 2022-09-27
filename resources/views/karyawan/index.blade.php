@extends('karyawan.layout')

@section('content')
    

        <div class="container">
            <br><br>
            <h3 class="text-center">Data Pegawai</h3>
        <br><br>
        <div class="card shadow" style="width: 67rem;">
            <div class="card-body">
                <br>
                <a href="{{route('karyawan.create')}}" class="btn btn-success">Tambah</a>
                <br><br>
                    <table id="data" class="table text-center">
                        <thead>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>NAMA</th>
                            <th>JENIS KELAMIN</th>
                            <th class="text-center">STATUS</th>
                            <th>GOL</th>
                            <th>AGAMA</th>
                            <th class="text-center">AKSI</th>
                        </thead>
                        
                            @foreach ($karyawan as $item)
                           <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nip}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->status_nikah}}</td>
                            <td>{{$item->golongan->kode_golongan}}</td>
                            <td>{{$item->agama}}</td>
                            <td>
                                <form action="{{route('karyawan.destroy', $item->id)}}">

                                    <a href="{{route('karyawan.edit', $item->id)}}" class="btn btn-success">Edit</a>

                                    <a href="{{route('karyawan.show', $item->id)}}" class="btn btn-success">Detail</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                
                                </form>
                            </td>
                           </tr>
                           @endforeach
                           
                        
                    </table>
                </div>
            </div>
            </div>
            </div>
            <script>
                $(document).ready(function () {
               $('#data').DataTable();
           });
              </script>
    @endsection



    


    