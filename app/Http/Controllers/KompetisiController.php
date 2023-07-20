<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KompetisiController extends Controller
{
    public function tambah(){
        return view('tambahKompetisi');
    }

    public function store(Request $request){
        DB::table('competition')->insert([
            'nama' => $request->nama,
            'desk' => $request->desk,
            'teamreq' => $request->teamreq,
            'harga' => $request->hargadaftar,
            'mdaftar' => $request->tgldaftar,
            'tutup' => $request->tutupdaftar,
            'mulai' => $request->tglmulai,
            'akhir' => $request->akhiracara,
        ]);
        return redirect('/');
    }
    public function edit($id){
        $kompetisi = DB::table('competition')->where('id', $id)->get();
        return view('editKompetisi',['competiton'=>$kompetisi]);
    }
    public function update(Request $request){
        DB::table('competiton')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'desk' => $request->desk,
            'teamreq' => $request->teamreq,
            'harga' => $request->hargadaftar,
            'mdaftar' => $request->tgldaftar,
            'tutup' => $request->tutupdaftar,
            'mulai' => $request->tglmulai,
            'akhir' => $request->akhiracara,
        ]);
        return redirect('/');
    }
    public function hapus($id){
        DB::table('competiton')->where('id',$id)->delete();
        return redirect('/');
    }
}
