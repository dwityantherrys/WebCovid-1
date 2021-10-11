<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai=Pegawai::all();
        return view('pegawai.tampil', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pegawai =Pegawai::all();
        return view('pegawai.tambah' , compact('pegawai'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd('msk');
        $pegawai = new pegawai();
        $pegawai->NIP = $request ->NIP;
        $pegawai->nama = $request ->nama;
        $pegawai->jabatan = $request ->jabatan;
        
        $pegawai->save();
        return redirect ('pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pegawai = Pegawai::find($id);
        return view ('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $pegawai = Pegawai::find($id);
        return view ('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pegawai = \App\Models\pegawai::find($id);
        $pegawai->NIP = $request ->NIP;
        $pegawai->nama = $request ->nama;
        $pegawai->jabatan = $request ->jabatan;
        $pegawai->save();  


        return redirect('pegawai');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pegawai = pegawai::find($id);
        $pegawai->delete();

        return redirect('pegawai');
    }
}
