<?php

namespace App\Http\Controllers;

use App\Models\Rekam;
use Illuminate\Http\Request;

class RekamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekam = Rekam::select('*', 'users.nama AS users_nama', 'penyakit.nama AS penyakit_nama')
                        ->leftJoin('users', 'rekam.users_id', '=', 'users.id')
                        ->leftJoin('penyakit', 'rekam.penyakit_id', '=', 'penyakit.id')
                        ->leftJoin('tindakan', 'rekam.tindakan_id', '=', 'tindakan.id')
                        ->leftJoin('jadwal', 'rekam.jadwal_id', '=', 'jadwal.id')
                        ->get();
        return view('admin.main.rekam.index', compact('rekam'));
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
     * @param  \App\Models\Rekam  $rekam
     * @return \Illuminate\Http\Response
     */
    public function show(Rekam $rekam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekam  $rekam
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekam $rekam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekam  $rekam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekam $rekam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekam  $rekam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekam $rekam)
    {
        //
    }
}
