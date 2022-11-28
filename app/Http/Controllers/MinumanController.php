<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Minuman;

class MinumanController extends Controller
{
    public function buat()
    {
        return view("minuman.form-input");
    }

    public function simpan(Request $request)
    {
        $minuman = new minuman();
        $minuman->nama = $request->get("nama");
        $minuman->keterangan = $request->get("keterangan");
        $minuman->save();

        return redirect(route("tampil_minuman", ['id' => $minuman->id]));
    }

    public function tampil($id)
    {
        $minuman = minuman::find($id);

        return view("minuman.tampil")->with("minuman", $minuman);
    }

    public function semua()
    {
        $data = minuman::all();
        return view("minuman.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("minuman.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $minuman = minuman::find($id);
        $minuman->nama = $request->get("nama");
        $minuman->keterangan = $request->get("keterangan");
        $minuman->save();

        return redirect(route("tampil_minuman", ['id' => $minuman->id]));
    }

    public function hapus($id)
    {
        minuman::destroy($id);
        return redirect(route('semua_minuman'));
    }
}