<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\models\KinerjaPenelitian;
use App\models\KinerjaPenunjang;
use App\models\dosen;

class BerandaController extends Controller
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
        // compact('var_nama')
        // $var_nama = 'Imam Farisi';
        $user = \Auth::user()->level;
        if($user == 'Admin'){
            $sum = KinerjaPenelitian::all();$sum = $sum->count();
            $sum1 = KinerjaPenunjang::all();$sum1 = $sum1->count();
            $sum2 = dosen::all();$sum2 = $sum2->count();

            return view('pages.Admin.dashboard', compact('sum','sum1','sum2'));
        }elseif($user == 'Dosen'){
            return view('pages.user.dashboard');
        }elseif($user == 'Assesor'){
            return view('pages.assesor.dashboard');
        }
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
