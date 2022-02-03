<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\dosen;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class biodataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dosen::all();
        return view('pages.admin.biodata.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('pages.admin.biodata.create', compact('user'));
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
        $req['foto'] = $request->file('foto');

        $id = mt_rand('1','1000');

        $tmbhuser = User::create([
            'id' => $id,
            'name' => $req['nama_depan'],
            'username' => $req['nama_depan'],
            'level' => $req['level'],
            'email' => $req['email'],
            'password' => $passhash
        ]);

        $req['foto'] = $request->file('foto')->store(
            'assets/foto','public'
        );
        $req['id_user'] = $id;
        $tmbah = dosen::create($req);

        if($tmbah == true AND $tmbhuser){
            return redirect()->route('biodata.index');
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
        $detail = dosen::findorfail($id);
        return view('pages.admin.biodata.show', compact('detail'));
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

        return view('pages.admin.biodata.edit', compact('edit'));
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
        $req = $request->all();
        $cariid = dosen::findOrFail($id);
        $req['foto'] = $request->file('foto');

        if(!$req['foto']){

            $cariid->update([
                'nama_depan' => $req['nama_depan'],
                'nama_belakang' => $req['nama_belakang'],
                'email' => $req['email'],
                'jabatan' => $req['jabatan'],
                'tempat' => $req['tempat'],
                'tgl_lhir' => $req['tgl_lhir'],
                'nidn' => $req['nidn'],
                'nip' => $req['nip'],
                'jenis' => $req['jenis'],
                'gelar_depan' => $req['gelar_depan'],
                'gelar_belakang' => $req['gelar_belakang'],
                'golongan' => $req['golongan'],
            ]);
                if($cariid == true){
                    return redirect()->route('biodata.index');
                }else{
                    return back()->withInput();
                }
        }else{
                $req['foto'] = $request->file('foto')->store(
                    'assets/foto','public'
                );
                $cariid->update($req);
                if($cariid == true){
                    return redirect()->route('biodata.index');
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
        $delete = dosen::findorfail($id);
        $delete->delete

        ();
        return back();
    }
}
