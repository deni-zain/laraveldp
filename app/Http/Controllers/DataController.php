<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $duaputra = DB::table('tbduaputra')->where('nama', 'like', "%" . $request->search . "%")
                ->orwhere('id', 'like', "%" . $request->search . "%")
                ->orwhere('alamat', 'like', "%" . $request->search . "%")
                ->orwhere('jurusan', 'like', "%" . $request->search . "%")
                ->orwhere('poto', 'like', "%" . $request->search . "%")->paginate(5);
            return view('DATA.data', ['duaputra' => $duaputra]);
        } else {
            $duaputra = DB::table('tbduaputra')->paginate(5);
            return view('DATA.data', ['duaputra' => $duaputra]);
        }
        // $cari = $request->search;
    }
    public function kami()
    {
        return view('student.index');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DATA.data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('tbduaputra')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'poto' => $request->poto
        ]);

        return redirect('/data')->with('setatus', 'Data telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $duaputra = DB::table('tbduaputra')->where('id', $id)->get();
        return view('edit.edit', ['duaputra' => $duaputra]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('tbduaputra')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'poto' => $request->poto
        ]);
        return redirect('/data')->with('sukses', 'Data telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbduaputra')->where('id', $id)->delete();
        return redirect('/data')->with('delete', 'Data telah dihapus');
    }
}
