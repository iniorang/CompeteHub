<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
    public function index()
    {
        $peserta = DB::table('users')->paginate(10);
        $kompetisi = DB::table('competition')->paginate(10);
        $tim = DB::table('team')->paginate(10);
        return view('admin',compact('kompetisi', 'peserta', 'tim') );
    }

    public function tambah(){
        return view('tambahPeserta');
    }

    public function store(Request $request){
        DB::table('peserta')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/');
    }
    public function edit($id){
        $peserta = DB::table('peserta')->where('id', $id)->get();
        return view('crud.profile',['peserta'=>$peserta]);
    }
    public function update(Request $request){
        DB::table('peserta')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/');
    }
    public function hapus($id){
        DB::table('peserta')->where('id',$id)->delete();
        return redirect('/');
    }
}
