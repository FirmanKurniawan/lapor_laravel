<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lapor;
use App\User;

class LaporController extends Controller
{
    public function save(Request $r)
    {
    	$judul = $r->judul;
    	$penulis = $r->penulis;
    	$deskripsi = $r->deskripsi;
        $telepon = $r->telepon;
    	$status = "Menunggu";
    	$gambar = $r->gambar;

    	$lapor = new Lapor;
    	$lapor->judul = $judul;
    	$lapor->penulis = $penulis;
    	$lapor->deskripsi = $deskripsi;
        $lapor->telepon = $telepon;
    	$lapor->status = $status;

    	$file = $r->file('gambar');
    	$filename = $file->getClientOriginalName();
    	$r->file('gambar')->move("gambar/", $filename);
    	$lapor->gambar = $filename;
    	$lapor->save();

    	return redirect()->back();

    }

    public function delete($id)
    {
        $lapor = Lapor::find($id);
        $lapor->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $lapor = Lapor::all()->where('id',$id);

        return view('lapor.edit', compact('lapor'));
    }

    public function update(Request $r)
    {
        $id = $r->id;
        $judul = $r->judul;
        $penulis = $r->penulis;
        $deskripsi = $r->deskripsi;
        $telepon = $r->telepon;
        $gambar = $r->gambar;

        $lapor = Lapor::find($id);
        $lapor->judul = $judul;
        $lapor->penulis = $penulis;
        $lapor->deskripsi = $deskripsi;
        $lapor->telepon = $telepon;

        $file = $r->file('gambar');
        $filename = $file->getClientOriginalName();
        $r->file('gambar')->move("gambar/", $filename);
        $lapor->gambar = $filename;
        $lapor->save();

        return redirect()->back();
    }

    public function lapor()
    {
        $lapor = Lapor::where('status', 'Diterima')->paginate(env('PER_PAGE'));

        return view('welcome', compact('lapor'));

    }

    public function tester()
    {
        $tester = User::all();

        return view('tester', compact('tester'));
    }

    // public function cari2(Request $r)
    // {
    //     $nama = $r->nama;
    //     $lapor = Lapor::all()->where('nama', 'like', '%'.$nama.'%');

    //     return redirect($nama);
    // }

    // public function cari($cari)
    // {   
    //     $count = Lapor::count();
    //     $lapor = Lapor::all()->where('judul', $cari);

    //     // dd($lapor);     
    //     return view('welcome',compact('lapor', 'count'));
    // }
}
