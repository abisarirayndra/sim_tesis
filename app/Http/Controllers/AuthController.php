<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class AuthController extends Controller
{
   public function register(){
       return view('auth.register');
   }

   public function login(){
       return view('auth.login');
   }

   public function reg(Request $request){
        $sudah_reg = User::where('email', $request->email)->first();
        if(isset($sudah_reg)){
            Alert::toast('Email Sudah Terdaftar', 'error');
            return redirect()->back();
        }
        else{
            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id,
            ]);
            Alert::toast('Akun Berhasil Diaktivasi', 'success');
            return redirect()->route('login');
        }
   }

   public function log(Request $request){
       $credential = [
        'email' => $request->email,
        'password' => $request->password,
        ];

        if(Auth::attempt($credential)){

            if(auth()->user()->role_id == 1){
                Alert::toast('Selamat Datang Mahasiswa', 'success');
                return redirect()->route('mahasiswa');
            }
            elseif (auth()->user()->role_id == 2) {
                Alert::toast('Selamat Datang Dosen', 'success');
                return redirect()->route('dosen');
            }
            elseif (auth()->user()->role_id == 3) {
                Alert::toast('Selamat Datang Admin', 'success');
                return redirect()->route('admin');
            }
            // elseif (auth()->user()->role_id == 4) {
            //     Alert::toast('Selamat Datang Kalab', 'success');
            //     return redirect()->route('');
            // }
        }

        Alert::toast('Akun Tidak Ditemukan','error');
        return redirect()->back();
   }

   public function logout(){
        Auth::logout();
        Alert::toast('Kamu Berhasil Keluar', 'success');
        return redirect()->route('login');
   }

   public function reset(){
       return view('auth.reset');
   }

   public function upReset(Request $request){
       $user = User::where('username', $request->username)->where('email', $request->email)->first();

       if(isset($user)){
           $user->update([
                'password' => Hash::make($request->password),
           ]);
           Alert::toast('Update password berhasil', 'success');
           return redirect()->route('login');
       }
       else{
           Alert::error('Gagal','Akun Tidak Ditemukan');
           return redirect()->back();
       }
   }
}
