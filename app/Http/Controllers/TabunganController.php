<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index() {

        $data = Tabungan::get();

        return view('tabungan')
        ->with('data', $data);
    }

    public function create() {

        $coba = Tabungan::all();
        //dd($coba);
        return view('index')->with('coba',$coba);
    }

    


    public function store (Request $request){
        $request->validate([
            'nama'=> 'required',
            'NIS'=> 'required',
            'rombel'=> 'required',
            'rayon'=> 'required',
        ]);

        Tabungan::create([
            'nama'=> $request->nama,
            'NIS'=> $request->NIS,
            'rombel'=> $request->rombel,
            'rayon'=> $request->rayon

        ]);

        return redirect('/index')->with('success','Data berhasil dibuat');

    }


    public function edit ($id){
        $data = Tabungan::where('id',$id)->first();
        // dd($data);
        return view('edit')
        ->with('data',$data);

    }

    public function storeEdit(Request $request , $id){

        $request->validate([
            'NIS' => 'required|min:8',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'action' => 'required',
            'uang' => 'required',
        ]);

        $data = Tabungan::where('id', $id)->first();

        if ($request->action == 'add') {
            $total_money = $data['jumlah_uang'] + $request->uang;
        } else {
            if ($data['jumlah_uang'] < $request->uang) {
                return redirect(route('index'))->with('fail', 'Salda Anda Kurang');
            } elseif ($data['jumlah_uang'] == $request->uang) {
                $total_money = $data['jumlah_uang'] - $request->uang;
            } else {
                $total_money = $data['jumlah_uang'] - $request->uang;
            }
        }

        $data->update([
            'nama' => $request->nama,
            'NIS' => $request->NIS,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'jumlah_uang' => $total_money,

        ]);

        return redirect(route('index'));
    }  

    public function destroy($id) {
        Tabungan::where('id', $id)->delete();
        return redirect()->back()->with('delete', 'Deleted Successfully');
    }






}
