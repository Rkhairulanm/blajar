<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = siswa::orderBy('NIK', 'asc')->paginate(6);
        return view('index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->session()->flash('NIK', $request->NIK);
        // $request->session()->flash('nama', $request->nama);
        // $request->session()->flash('alamat', $request->alamat);

        $request->validate([
            'NIK' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',

        ], [
            'NIK.required' => 'NIK Wajib Di Isi',
            'NIK.numeric' => 'NIK Wajib Di Isi Dengan Angka',
            'nama.required' => 'Nama Wajib Di Isi',
            'alamat.required' => 'Alamat Wajib Di Isi',
            // 'foto.required' => 'foto Wajib Di Isi',
            // 'foto.mimes' => 'Foto hanya boleh berformat JPEG, Jpg, PNG, GIFT'
        ]);

        // $foto_file = $request->file('foto');
        // $foto_ekstensi = $foto_file->extension();
        // $foto_nama = date('ymdhis') .".".$foto_ekstensi;
        // $foto_file->move(public_path('foto'),$foto_nama);
        $data = [
            'NIK' => $request->input('NIK'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            // 'foto' => $foto_nama
        ];
        siswa::create($data);
        return redirect('siswa')->with('success', 'Berhasil Input Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($siswa)
    {
        $data = siswa::where('NIK', $siswa)->first();
        return view('show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($siswa)
    {
        $data = siswa::where('NIK', $siswa)->first();
        return view('edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ], [
            'NIK.numeric' => 'NIK Wajib Di Isi Dengan Angka',
            'nama.required' => 'Nama Wajib Di Isi',
            'alamat.required' => 'Alamat Wajib Di Isi'
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ];
        siswa::where('NIK', $siswa)->update($data);
        return redirect('/siswa')->with('success', 'Update Done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($siswa)
    {
        $data = siswa::where('NIK', $siswa)->first();
        // File::delete(public_path('foto').'/'. $data->foto)->delete();
        siswa::where('NIK', $siswa)->delete();
        return redirect('/siswa')->with('success', 'Delete Done');
    }
}
