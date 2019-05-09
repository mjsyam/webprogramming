<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'nim' => 'required|max:255',
            'nama' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'fakultas' => 'required|max:255',
        ]);

        //$link = tap(new Mahasiswa($data))->save();

        DB::table('mahasiswas')->insert([
            'nim' => $data['nim'],
            'nama' => $data['nama'],
            'jurusan' => $data['jurusan'],
            'fakultas' => $data['fakultas'],
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$mhs = Mahasiswa::all()->paginate(5);

        $mhs = DB::table('mahasiswas')->paginate(15);
        $no = 0;
        //return view('mahasiswa')->with('mhs', $mhs);
        return view('mahasiswa', ['mhs' => $mhs, 'no' => $no]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mhs = DB::table('mahasiswas')->where('nim', $id)->get();

        return view('mahasiswa_edit', ['mhs' => $mhs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    { }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('mahasiswas')->where('nim', $id)->delete();

        return redirect('/mahasiswa');
    }
}
