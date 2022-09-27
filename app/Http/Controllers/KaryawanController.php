<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use App\Models\golongan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = karyawan::all();
        return view('karyawan.index', compact('karyawan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gol = golongan::all();
        return view('karyawan.create', compact('gol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nip'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'agama'=>'required',
            'status_nikah'=>'required',
            'golongan_id'=>'required',
        ]);

        $karyawan = karyawan::create([
            'nip'=>$request->nip,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'status_nikah'=>$request->status_nikah,
            'golongan_id'=>$request->golongan_id,
        ]);

        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = karyawan::where('id', $id)->first();
        return view('karyawan.detail', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('karyawan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nip'=>'required',
            'nik'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'agama'=>'required',
            'status_nikah'=>'required',
            'golongan_id'=>'required',
        ]);

        $karyawan = karyawan::where('id', $id);

        $karyawan->update($request());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = karyawan::where('id', $id);
        $karyawan->delete();
        return redirect()->route('karyawan.index'); 
    }
}
