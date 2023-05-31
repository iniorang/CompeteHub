<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimController extends Controller
{
    public function tambah(){
        return view('tambahTim');
    }

    public function store(Request $request){
        DB::table('tim')->insert([
            'nama' => $request->nama,
        ]);
        return redirect('/');
    }
    public function edit($id){
        $tim = DB::table('tim')->where('id', $id)->get();
        return view('editTim',['tim'=>$tim]);
    }
    public function update(Request $request){
        DB::table('tim')->where('id',$request->id)->update([
            'nama' => $request->nama
        ]);
        return redirect('/');
    }
    public function hapus($id){
        DB::table('tim')->where('id',$id)->delete();
        return redirect('/');
    }
}
