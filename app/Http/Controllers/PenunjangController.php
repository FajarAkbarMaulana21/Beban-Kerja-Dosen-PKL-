<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kinerjaPenunjang;
use App\Models\penunjang;

class PenunjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indx = kinerjaPenunjang::with('unsur','dosen')->orderByDesc('id')->get();
        return view('pages\admin\penunjang\index', compact('indx'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pen = penunjang::all();
        return view('pages\admin\penunjang\create', compact('pen'));
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
        $data = kinerjaPenunjang::where('id', $id)
        ->with('dosen', 'unsur')->first();

        return view('pages.admin.penunjang.show', compact('data'));
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
        $delete = kinerjaPenunjang::findorfail($id);
        $delete->delete();

        return back();
    }

    public function sendToAssesor($id){

        $findid = kinerjaPenunjang::findorfail($id);

        $rekomendasi = 'Diteruskan';

        $findid->update([
            'rekomendasi' => $rekomendasi,
        ]);

        return back();
    }
}
