<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MapelKelas;

class MapelKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $data = $request->all();
        try {

        foreach($data['kelas_banin_id'] as $kelas_id) {
            $mapelkelas = new MapelKelas;
            $mapelkelas->upsert([
                'mapel_id' => $data['mapel_id'],
                'kelas_banin_id' => $kelas_id
            ], ['mapel_id', 'kelas_banin_id']);
        }
    } catch (\Exception $e) {
        \Response::json($e->getMessage());
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
