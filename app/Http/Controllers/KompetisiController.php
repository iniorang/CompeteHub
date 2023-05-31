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
        DB::table('kompetisi')->insert([
            'nama' => $request->nama,
        ]);
        return redirect('/');
    }
    public function edit($id){
        $kompetisi = DB::table('kompetisi')->where('id', $id)->get();
        return view('editKompetisi',['kompetisi'=>$kompetisi]);
    }
    public function update(Request $request){
        DB::table('kompetisi')->where('id',$request->id)->update([
            'nama' => $request->nama
        ]);
        return redirect('/');
    }
    public function hapus($id){
        DB::table('kompetisi')->where('id',$id)->delete();
        return redirect('/');
    }
}
