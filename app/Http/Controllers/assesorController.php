<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\assesor;

class assesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = assesor::all();
        return view('pages.admin.assesor.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.assesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pass = $request['password'];
        $passhash = password_hash($pass, PASSWORD_DEFAULT);
        $req = $request->all();

        $id = mt_rand('1','1000');

        $tmbhuser = User::create([
            'id' => $id,
            'name' => $req['nama'],
            'username' => $req['username'],
            'level' => $req['level'],
            'email' => $req['email'],
            'password' => $passhash
        ]);

        $req['id_user'] = $id;
        $tmbah = assesor::create($req);

        if($tmbah == true){
            return redirect()->route('assesor.index');
        }else{
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = assesor::findorfail($id);
        return view('pages.admin.assesor.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = assesor::findorfail($id);
        $id = $delete['id'];
        $id_user = $delete['id_user'];

        $iduser = User::where('id', $id_user)->get();

        $delete->delete();
        $iduser->each->delete();
        return back()->with('success','Data Dosen Berhasil Dihapus');
    }
}
