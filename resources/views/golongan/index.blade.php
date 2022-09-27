@extends('karyawan.layout')

@section('content')
    

        <div class="container">
        <br><br>
        <h3 style="text-center">Data Golongan</h3>
        <br><br>
        <div class="card shadow" style="width: 67rem;">
            <div class="card-body">
                <br>
                <a href="{{route('golongan.create')}}" class="btn btn-success">Tambah</a>
                <br><br>
                    <table id="data" class="table">
                        <thead>
                            <th>NO</th>
                            <th>KODE GOLONGAN</th>
                            <th>NAMA GOLONGAN</th>
                            <th class="text-center">AKSI</th>
                        </thead>
                        @foreach ($golongan as $key => $item)
                        <tr>
                            
                                <td>{{$item->id}}</td>
                                <td>{{$item->kode_golongan}}</td>
                                <td>{{$item->nama_golongan}}</td>
                                <td>
                                    <form action="{{route('golongan.destroy', $item->id)}}">
    
                                        <a href="{{route('golongan.edit', $item->id)}}" class="btn btn-success">Edit</a>
    
                                        <a href="{{route('golongan.show', $item->id)}}" class="btn btn-success">Detail</a>
    
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
              <br><br><br>
    @endsection



    


    