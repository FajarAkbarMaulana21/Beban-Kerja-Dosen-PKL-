<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Auth;
use Illuminate\Http\Request;
use App\Models\kinerjaPenunjang;
use App\Models\dosen;
use App\Models\penunjang;
use App\Models\Subkegiatan;
use Illuminate\Support\Facades\Validator;


class KinerjaPenunjangController extends Controller
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

    public function getSubkegiatan(Request $request){
        $id_pengajuan = $request->id_pengajuan;

        $subs = Subkegiatan::where('id_penunjang', $id_pengajuan)
        ->with('kegiatan')
        ->get();

        // dd($subs);
        foreach($subs as $sub){
            echo "<option value='$sub->subkegiatan'>$sub->subkegiatan (Max Kum: $sub->angka_kredit)</option>";
        }

    }


    public function index()
    {
        $idsesi = \Auth::user()->id;
        // ambil id login
        $sesi = dosen::where('id_user', $idsesi)->get();
        foreach($sesi as $ses){
            $idses = $ses->id;
        }
        // menyamakan data
        $indx = kinerjaPenunjang::where('id_dosen', $idses)
            ->with('unsur')->get();

        return view('pages.user.penunjang.index', compact('indx'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cekid = \Auth::user()->id;
        $dosen = dosen::where('id_user',$cekid)->get();

        $penunjang = penunjang::all();
        // $sub = Subkegiatan::all();

        // $id = $penunjang['id'];

        // dd($id);

        return view('pages.user.penunjang.create', compact('dosen','penunjang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $req = $request->all();

        $rekomendasi = 'Diproses';

        $this->validate($request, [
            'bukti_penugasan' => 'required',
            'bukti_penugasan.*' => 'required'
        ]);

        $files = [];
        if($request->hasfile('bukti_penugasan'))
        {
            foreach($request->file('bukti_penugasan') as $data)
            {
                $name = time().rand(1,100).'.'.$data->extension();
                $data->move(public_path('doc/penunjang'), $name);
                $files[] = $name;

            }
        }


        $data = new kinerjaPenunjang();
        $data->id_dosen = $request->id_dosen;
        $data->id_subkegiatan = $request->penunjang_id;
        $data->nama_kegiatan = $request->namasub;
        $data->filenames = $files;
        $data->sks_beban_kerja = $request->sks_beban_kerja;
        $data->semester = $request->semester;
        $data->tahun_akademik = $request->tahun_akademik;
        $data->tgl_mulai = $request->tgl_mulai;
        $data->tgl_selesai = $request->tgl_selesai;
        $data->rekomendasi = $rekomendasi;
        $data->save();


        return redirect()->route('kinerja-penunjang.index');
        // $sub = Subkegiatan::all();
        // $kum = $sub['angka_kredit'];


        // $tambah =  kinerjaPenunjang::create($validated);

        // dd($validated);
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
        $data = kinerjaPenunjang::findorfail($id);
        $id_sub = $data['id_subkegiatan'];

        $penunjang = penunjang::all();

        return view('pages.user.penunjang.edit', compact('data', 'penunjang'));

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

        $id = kinerjaPenunjang::findorfail($id);

        $cekif = $request['bukti_penugasan'];
        if(!empty($cekif)){
            $this->validate($request, [
                'bukti_penugasan' => 'required',
                'bukti_penugasan.*' => 'required'
            ]);

            $files = [];
            if($request->hasfile('bukti_penugasan'))
            {
                foreach($request->file('bukti_penugasan') as $data)
                {
                    $name = time().rand(1,100).'.'.$data->extension();
                    $data->move(public_path('doc/penunjang'), $name);
                    $files[] = $name;

                }
            }
            $id->update([
                'id_subkegiatan' => $req['penunjang_id'],
                'nama_kegiatan' => $req['namasub'],
                'filenames' => $files,
                'sks_beban_kerja' => $req['sks_beban_kerja'],
                'semester' => $req['semester'],
                'tahun_akademik' => $req['tahun_akademik'],
                'tgl_mulai' => $req['tgl_mulai'],
                'tgl_selesai' => $req['tgl_selesai'],
            ]);
            return redirect()->route('kinerja-penunjang.index');
        }
        else{
            $id->update([
                'id_subkegiatan' => $req['penunjang_id'],
                'nama_kegiatan' => $req['namasub'],
                'sks_beban_kerja' => $req['sks_beban_kerja'],
                'semester' => $req['semester'],
                'tahun_akademik' => $req['tahun_akademik'],
                'tgl_mulai' => $req['tgl_mulai'],
                'tgl_selesai' => $req['tgl_selesai'],
            ]);
            return redirect()->route('kinerja-penunjang.index');
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
        $delete = kinerjaPenunjang::findorfail($id);
        $delete->delete();

        return back();
    }
}
