<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\NilaiSidang;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Models\DaftarSidang;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dosen.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function bimbingandetail()
    {
        return view('dosen.bimbingandetail');
    }

    public function daftarsidang()
    {
        $userid = auth()->user()->id;
        $user = DB::table('users')->where('id', '=', $userid)->first();
        $sidang = DB::table('sidangs')->where('id_pembimbing1', '=', $userid)->orWhere('id_pembimbing2', '=', $userid)->get();
        $dosen = DB::table('users')->where('role_id', '=', 2)->get();

        //return view('dosen.daftarsidang');
        return view('dosen.daftarsidang')->with('userid', $userid)->with('sidangs', $sidang)->with('dosens', $dosen);
    }
    public function approvesidang($id)
    {
        $sidang = DaftarSidang::find($id);
        $sidang['verification_sidang'] = true;
        $sidang->save();
        return $this->daftarsidang();
    }

    public function rejectsidang($id)
    {
        $sidang = DaftarSidang::find($id);
        $sidang['verification_sidang'] = false;
        $sidang->save();
        return $this->daftarsidang();
    }

    public function bimbinganlist()
    {
        return view('dosen.bimbinganlist');
    }

    public function sidang()
    {
        return view('dosen.sidang');
    }

    public function verifikasi()
    {
        return view('dosen.verifikasi');
    }

    public function nilai()
    {
        return view('dosen.nilai');
    }

    public function upNilaiSidang(Request $request)
    {
        NilaiSidang::create($request->all());
        Alert::toast('Input Nilai Sidang Berhasil', 'success');
        return redirect()->back();
    }

    public function pdf_revisi()
    {
        $data = ['title' => 'File Revisi'];

        $pdf = PDF::loadView('/dosen/pdf_revisi', $data);
        return $pdf->stream('file_revisi.pdf');
    }
}
