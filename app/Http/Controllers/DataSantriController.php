<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\DataSantri;

class DataSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->query('cari') != '') {
            $cari = $request->query('cari');
            // print_r($cari);
            return Response::json(DataSantri::where('nama_santri', 'like', '%' .$cari . '%')->get());
        } else {
            return Response::json(DataSantri::paginate(10));
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
        try {
            $data = $request->all();
            $datasantri = new DataSantri;
            $datasantri->nama_santri = $data['nama_santri'];
            $datasantri->nomor_induk = $data['nomor_induk'];
            $datasantri->tempat_lahir = $data['tempat_lahir'];
            $datasantri->tanggal_lahir = $data['tanggal_lahir'];
            $datasantri->alamat_santri = $data['alamat_santri'];
            $datasantri->nomor_telepon = $data['nomor_telepon'];
            $datasantri->status_dalam_keluarga = $data['status_dalam_keluarga'];
            $datasantri->anak_ke = $data['anak_ke'];
            $datasantri->ayah = $data['ayah'];
            $datasantri->ibu = $data['ibu'];
            $datasantri->alamat_ortu = $data['alamat_ortu'];
            $datasantri->alamat_wali = $data['alamat_wali'];
            $datasantri->nomor_telepon_ortu = $data['nomor_telepon_ortu'];
            $datasantri->nomor_telepon_wali = $data['nomor_telepon_wali'];
            $datasantri->diterima_diponpes_tgl = $data['diterima_diponpes_tgl'];
            $datasantri->pekerjaan_wali = $data['pekerjaan_wali'];
            $datasantri->diterima_diponpes_dikelas = $data['diterima_diponpes_dikelas'];
            $datasantri->sekolah_asal = $data['sekolah_asal'];
            $datasantri->save();

            return \Response::json(['status' => 'success'], 200);
        } catch (Exception $e) {
            return \Response::json(['status' => 'Gagal'], 500);
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
        try {
            $data = $request->all();
            $datasantri = DataSantri::find($id);
            $datasantri->nama_santri = $data['nama_santri'];
            $datasantri->nomor_induk = $data['nomor_induk'];
            $datasantri->tempat_lahir = $data['tempat_lahir'];
            $datasantri->tanggal_lahir = $data['tanggal_lahir'];
            $datasantri->alamat_santri = $data['alamat_santri'];
            $datasantri->nomor_telepon = $data['nomor_telepon'];
            $datasantri->status_dalam_keluarga = $data['status_dalam_keluarga'];
            $datasantri->anak_ke = $data['anak_ke'];
            $datasantri->ayah = $data['ayah'];
            $datasantri->ibu = $data['ibu'];
            $datasantri->alamat_ortu = $data['alamat_ortu'];
            $datasantri->alamat_wali = $data['alamat_wali'];
            $datasantri->nomor_telepon_ortu = $data['nomor_telepon_ortu'];
            $datasantri->nomor_telepon_wali = $data['nomor_telepon_wali'];
            $datasantri->diterima_diponpes_tgl = $data['diterima_diponpes_tgl'];
            $datasantri->pekerjaan_wali = $data['pekerjaan_wali'];
            $datasantri->diterima_diponpes_dikelas = $data['diterima_diponpes_dikelas'];
            $datasantri->sekolah_asal = $data['sekolah_asal'];
            $datasantri->save();

            return \Response::json(['status' => 'success'], 200);
        } catch (Exception $e) {
            return \Response::json(['status' => 'Gagal'], 500);
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


    public function santribanin() {
        return \Response::json(['data' => DataSantri::where('jenis_kelamin', 'L')
            ->where('is_active', 1)->get()]);
    }
}
