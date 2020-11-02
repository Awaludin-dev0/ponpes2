<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruBanin;

class GuruBaninController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return \Response::json(GuruBanin::with(['user', 'kelas_banin'])->paginate(10));
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
        if (is_array($data['kelas_banin_id'])) {
            foreach($data['kelas_banin_id'] as $kelas_id) {
                $guru_banin = new GuruBanin;
                $guru_banin->user_id = $data['user_id'];
                $guru_banin->kelas_banin_id = $kelas_id;
                $guru_banin->save();
            }
        } else {
            $guru_banin = new GuruBanin;
            $guru_banin->user_id = $data['user_id'];
            $guru_banin->kelas_banin_id = $data['kelas_banin_id'];
            $guru_banin->save();
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
