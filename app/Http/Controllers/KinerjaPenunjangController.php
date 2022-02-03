<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Auth;
use Illuminate\Http\Request;
use App\Models\kinerjaPenunjang;
use App\Models\dosen;
use App\Models\penunjang;
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

    public function index()
    {
        $indx = kinerjaPenunjang::with('penunjang','dosen')->get();
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
        $req = $request->all();
        $validated = $request->validate([
            'bukti_penugasan' => ['required','image'],
            'sks_beban_kerja' => ['required','numeric'],
            'masa_penugasan' => ['required','numeric'],
            'bukti_dokumen' => ['required','image'],
            'sks_kinerja' => ['required','numeric'],
            'rekomendasi' => ['required', 'in:Selesai,Lanjutan,Gagal,Lainnya,Bebas Lebih'],
        ]);

        $tambah =  kinerjaPenunjang::create($validated);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        //
    }
}
