<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataSiswaRequest;
use App\Http\Requests\UpdateDataSiswaRequest;
use App\Models\DataSiswa;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.index', [
            'title' => 'Daftar Siswa',
            'data_siswas' => DataSiswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create', [
            'title' => 'Siswa Baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataSiswaRequest $request)
    {   
        $validate = $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:data_siswas',
            'nisn' => 'required|unique:data_siswas',
            'tahun_masuk' => 'required',
            'asal' => '',
            'tanggal_lahir' => '',
        ]);

        DataSiswa::create($validate);
        return view('siswa.index', [
            'title' => 'Daftar Siswa',
            'data_siswas' => DataSiswa::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(DataSiswa $dataSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSiswa $dataSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataSiswaRequest  $request
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataSiswaRequest $request, DataSiswa $dataSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSiswa $dataSiswa)
    {
        //
    }
}
