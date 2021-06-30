<?php

namespace App\Http\Controllers;

use App\Models\DaftarSidang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function bimbinganinput()
    {
        return view('mahasiswa.bimbinganinput');
    }

    public function bimbingan()
    {
        return view('mahasiswa.bimbingan');
    }

    public function sidang()
    {
        $userid = auth()->user()->id;
        $user = DB::table('users')->where('id', '=', $userid)->first();
        $sidang = DB::table('sidangs')->where('id_mahasiswa', '=', $userid)->first();
        $dosen = DB::table('users')->where('role_id', '=', 2)->get();
        if ($sidang) {
            return view('mahasiswa.sidangview', ['dosens' => $dosen])->with('userid', $userid)->with('sidang', $sidang);
        }
        return view('mahasiswa.sidang', ['dosens' => $dosen])->with('userid', $userid)->with('sidang', $sidang);
    }

    public function updatesidang()
    {
        $userid = auth()->user()->id;
        $user = DB::table('users')->where('id', '=', $userid)->first();
        $sidang = DB::table('sidangs')->where('id_mahasiswa', '=', $userid)->first();
        $dosen = DB::table('users')->where('role_id', '=', 2)->get();

        return view('mahasiswa.updatesidang', ['dosens' => $dosen])->with('userid', $userid)->with('sidang', $sidang);
    }

    public function editsidang(Request $request)
    {


        $this->validate($request, [
            'nama' => 'required',
            'nrp' => 'required',
            'judul' => 'required',
            'id_pembimbing1' => 'required'
        ]);

        $sidang = DaftarSidang::find($request['id']);
        $sidang['nrp'] = $request['nrp'];
        $sidang['nama'] = $request['nama'];
        $sidang['id_pembimbing1'] = $request['id_pembimbing1'];
        $sidang['id_pembimbing2'] = $request['id_pembimbing2'];
        $sidang['judul'] = $request['judul'];
        $sidang->save();

        Alert::toast('Update Data Sidang Berhasil', 'success');
        return $this->sidang();
    }


    public function daftarSidang(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nrp' => 'required',
            'judul' => 'required',
            'id_pembimbing1' => 'required'
        ]);


        DaftarSidang::create($request->all());
        Alert::toast('Pendaftaran Sidang Berhasil', 'success');
        return redirect()->back();
    }

    public function kehadiran()
    {
        return view('mahasiswa.kehadiran');
    }
    public function revisi()
    {
        return view('mahasiswa.revisi');
    }

    public function yudisium()
    {
        return view('mahasiswa.yudisium');
    }

    public function wisuda()
    {
        return view('mahasiswa.wisuda');
    }
}
