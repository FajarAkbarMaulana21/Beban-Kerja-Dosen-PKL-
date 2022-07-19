<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KinerjaPenelitian;

class DataPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function selesai($id){

        $id = KinerjaPenelitian::findorfail($id);
        $rekomendasi = 'Selesai';

        $id->update([
            'rekomendasi' => $rekomendasi
        ]);

        return back();

     }


    public function index()
    {
        // @if ($item->rekomendasi == 'Diproses')
        // <div class="badge badge-primary p-2">Diproses</div>
        // @elseif($item->rekomendasi == 'Diteruskan')
        // <div class="badge badge-primary p-2">Diteruskan</div>
        // @elseif($item->rekomendasi == 'Diperiksa')
        // <div class="badge badge-primary p-2">Diperiksa</div>
        // @elseif($item->rekomendasi == 'Selesai')
        // <div class="badge badge-success p-2">Selesai</div>
        // @elseif($item->rekomendasi == 'Lanjutkan')
        // <div class="badge badge-warning p-2">Lanjutkan</div>
        // @elseif($item->rekomendasi == 'Gagal')
        // <div class="badge badge-danger p-2">Gagal</div>
        // @elseif($item->rekomendasi == 'Beban Lebih')
        // <div class="badge badge-warning p-2">Beban Lebih</div>
        // @endif

        $indx = KinerjaPenelitian::where('rekomendasi', 'Diteruskan')
        ->orWhere('rekomendasi', 'Diperiksa')
        ->orWhere('rekomendasi', 'Selesai')
        ->orWhere('rekomendasi', 'Lanjutkan')
        ->orWhere('rekomendasi', 'Gagal')
        ->orWhere('rekomendasi', 'Beban Lebih')
        ->with('unsurp','dosen')->get();
        return view('pages\assesor\dataPenelitian\index', compact('indx'));
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
        $data = KinerjaPenelitian::where('id', $id)
        ->with('dosen', 'unsurp')->first();

        return view('pages.assesor.dataPenelitian.show', compact('data'));
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
        //
    }
}
