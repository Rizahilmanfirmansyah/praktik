@extends('karyawan.layout')

@section('content')

        <div class="container">
            <br><br>
            <h3 class="text-center">Detail Kepegawaian</h3>
        <br><br>
        <div class="card shadow" style="width: 67rem;">
            <div class="card-body">
                <br>
                <a href="{{route('karyawan.create')}}" class="btn btn-success">Tambah</a>
                <br><br>
                    <table id="data" class="table">
                        <thead>
                            <th>NIP</th>
                            <th>NAMA</th>
                            <th>JENIS KELAMIN</th>
                            <th>GOL</th>
                            <th>NAMA GOLONGAN</th>
                            <th>AGAMA</th>
                            <th class="text-center">AKSI</th>
                        </thead>
                        
                            
                           <tr>
                            <td>{{$karyawan->nip}}</td>
                            <td>{{$karyawan->nama}}</td>
                            <td>{{$karyawan->jenis_kelamin}}</td>
                            <td>{{$karyawan->golongan->kode_golongan}}</td>
                            <td>{{$karyawan->golongan->nama_golongan}}</td>
                            <td>{{$karyawan->agama}}</td>
                            <td>
                                <form action="{{route('karyawan.destroy', $karyawan->id)}}">

                                    {{-- <a href="{{route('karyawan.edit', $item->id)}}" class="btn btn-success">Edit</a> --}}

                                    <a href="{{route('karyawan.show', $karyawan->id)}}" class="btn btn-success">Detail</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                
                                </form>
                            </td>
                           </tr>
                           
                           
                        
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



    


    
    
