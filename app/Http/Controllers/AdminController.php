<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Lapor;
use \App\User;
class AdminController extends Controller
{
    public function all()
    {
    	$user = User::all();
    	$lapor = Lapor::all();
    	$count = Lapor::count();
    	$count_user = User::count();
    	return view('admin.index', compact('lapor', 'count', 'user', 'count_user'));
    }

    public function update(Request $r)
    {
        $id = $r->id;
        $status = "Diterima";

        $lapor = Lapor::find($id);
        $lapor->status = $status;
        $lapor->save();

        return redirect()->back();
    }

    public function update_user(Request $r)
    {
    	$id = $r->id;
        $nama = $r->name;
        $email = $r->email;

        $lapor = User::find($id);
        $lapor->name = $nama;
        $lapor->email = $email;
        $lapor->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $user = User::all()->where('id',$id);

        return view('admin.edit', compact('user'));
    }

    public function delete($id)
    {
    	$user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
    public function delete_lapor($id)
    {
    	$lapor = Lapor::find($id);
        $lapor->delete();

        return redirect()->back();
    }
}
