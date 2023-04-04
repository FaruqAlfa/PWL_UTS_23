<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pegawais = Pegawai::where([
            ['Nama', '!=' , Null],
            [function ($query) use ($request){
                if (($search = $request->search)){
                    $query->orWhere('Nama', 'Like', '%' . $search . '%')->get();
                }
            }]
        ])->paginate(5);
        $posts = Pegawai::orderBy('nip', 'desc');
        return view('pegawais.index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'gaji_pokok' => 'required',
            ]);
            //fungsi eloquent untuk menambah data
            Pegawai::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('pegawais.index')->with('success', 'Pegawai Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nip)
    {
        $Pegawai = Pegawai::find($nip);
        return view('pegawais.detail', compact('Pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nip)
    {
        $Pegawai = Pegawai::find($nip);
        return view('pegawais.edit', compact('Pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nip)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'gaji_pokok' => 'required',
        ]);
            //fungsi eloquent untuk mengupdate data inputan kita
            Pegawai::find($nip)->update($request->all());
    
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('pegawais.index') ->with('success', 'Pegawai Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nip)
    {
        Pegawai::find($nip)->delete();
        return redirect()->route('pegawais.index') -> with('success', 'Pegawai Berhasil Dihapus');
    }
}
