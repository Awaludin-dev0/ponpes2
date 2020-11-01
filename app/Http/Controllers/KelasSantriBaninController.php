<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Models\KelasSantriBanin;

class KelasSantriBaninController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //return \Response::json(KelasSantriBanin::with(['data_santri', 'kelas_banin'])->paginate(10));
        if ($request->query('cari') != '') {
            $cari = $request->query('cari');
            // print_r($cari);
            return Response::json(
                KelasSantriBanin::select(
                        'kelas_santri_banin.id as id',
                        'data_santri.nama_santri',
                        'kelas_banin.nama_kelas',
                        'kelas_banin_id',
                        'data_santri_id'
                    )->join('data_santri', 'data_santri.id', '=', 'kelas_santri_banin.data_santri_id')
                ->join('kelas_banin', 'kelas_banin.id', '=', 'kelas_santri_banin.kelas_banin_id')
                ->where('nama_santri', 'like', '%' .$cari . '%')->get());
        } else {

        return \Response::json(
            KelasSantriBanin::select(
                    'kelas_santri_banin.id as id',
                    'data_santri.nama_santri',
                    'kelas_banin.nama_kelas',
                    'kelas_banin_id',
                    'data_santri_id'
                )->join('data_santri', 'data_santri.id', '=', 'kelas_santri_banin.data_santri_id')
            ->join('kelas_banin', 'kelas_banin.id', '=', 'kelas_santri_banin.kelas_banin_id')
            ->paginate(10));
        }
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
        $kelassantribanin = new KelasSantriBanin;
        $kelassantribanin->data_santri_id = $request->data_santri_id;
        $kelassantribanin->kelas_banin_id = $request->kelas_banin_id;
        $kelassantribanin->save();
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
        $kelassantribanin = KelasSantriBanin::find($id);
        $kelassantribanin->data_santri_id = $request->data_santri_id;
        $kelassantribanin->kelas_banin_id = $request->kelas_banin_id;
        $kelassantribanin->save();
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
