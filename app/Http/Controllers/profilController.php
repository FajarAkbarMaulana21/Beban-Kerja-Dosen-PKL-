<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Auth;
use Illuminate\Http\Request;
use App\Models\dosen;

class profilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = \Auth::user()->id;

        $selectid = dosen::where('id_user',$id)->get();
        // dd($selectid);
        return view('pages\user\profil\profil', compact('selectid'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = dosen::findorfail($id);
        return view('pages\user\profil\editprofil',compact('edit'));

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
        $upt = $request->all();
        $data = dosen::findorfail($id);
        $upt['foto'] = $request->file('foto');

        if(!$upt['foto']){
            $data->update([
                'nama_depan' => $upt['nama_depan'],
                'nama_belakang' => $upt['nama_belakang'],
                'email' => $upt['email'],
                'jabatan' => $upt['jabatan'],
                'tempat' => $upt['tempat'],
                'tgl_lhir' => $upt['tgl_lhir'],
                'nidn' => $upt['nidn'],
                'nip' => $upt['nip'],
                'jenis' => $upt['jenis'],
                'gelar_depan' => $upt['gelar_depan'],
                'gelar_belakang' => $upt['gelar_belakang'],
                'golongan' => $upt['golongan'],
            ]);
                if($upt == true){
                    return redirect()->route('profil.index');
                }else{
                    return back()->withInput();
                }
        }else{
                $req['foto'] = $request->file('foto')->store(
                    'assets/foto','public'
                );
                $data->update($req);
                if($data == true){
                    return redirect()->route('profil.index');
                }else{
                    return back()->withInput();
                }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
