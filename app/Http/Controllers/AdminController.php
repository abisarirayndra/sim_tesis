<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
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

    public function verifikasi_yudisium()
    {
        return view('admin.verifikasi_yudisium');
    }

    public function sk_yudisium()
    {
        return view('admin.sk_yudisium');
    }

    public function verifikasi_wisuda()
    {
        return view('admin.verifikasi_wisuda');
    }

    public function sk_wisuda()
    {
        return view('admin.sk_wisuda');
    }


    public function pdf_yudisium()
    {
        $data = ['title' => 'Kelengkapan Yudisium'];

        $pdf = PDF::loadView('/admin/pdf_yudisium', $data);
        return $pdf->stream('kelengkapan_yudisium.pdf');
    }
    public function pdf_wisuda()
    {
        $data = ['title' => 'Kelengkapan Wisuda'];

        $pdf = PDF::loadView('/admin/pdf_wisuda', $data);
        return $pdf->stream('kelengkapan_wisuda.pdf');
    }



}
