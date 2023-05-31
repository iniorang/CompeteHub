<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
    public function index()
    {
        $peserta = DB::table('peserta')->paginate(2);
        $kompetisi = DB::table('kompetisi')->paginate(10);
        $tim = DB::table('tim')->paginate(10);
        return view('index',compact('kompetisi', 'peserta', 'tim') );
    }

    public function tambah(){
        return view('tambahPeserta');
    }

    public function store(Request $request){
        DB::table('peserta')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'tim' => $request->tim
        ]);
        return redirect('/');
    }
    public function edit($id){
        $peserta = DB::table('peserta')->where('id', $id)->get();
        return view('editPeserta',['peserta'=>$peserta]);
    }
    public function update(Request $request){
        DB::table('peserta')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'tim' => $request->tim
        ]);
        return redirect('/');
    }
    public function hapus($id){
        DB::table('peserta')->where('id',$id)->delete();
        return redirect('/');
    }
}
