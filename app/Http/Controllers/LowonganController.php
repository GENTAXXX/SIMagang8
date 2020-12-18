<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongan = Lowongan::latest()->paginate(5);
        return view('Mitra.lowongan', compact('lowongan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'lokasi' => 'required',
            'telepon' => 'required',
            // 'jumlah_mhs' => 'required',
            // 'id_skill' => 'required',
            // 'id_provinsi' => 'required',
            // 'id_kabupaten' => 'required',
            // 'id_mitra' => 'required',
            // 'id_kategori' => 'required',
        ]);

        Lowongan::create($request->all());

        return redirect()->route('lowongan.index')
        ->with('success', 'Lowongan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lowongan $lowongan)
    {
        return view('Mitra.show',compact('lowongan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lowongan $lowongan)
    {
        return view('Mitra.edit',compact('lowongan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lowongan $lowongan)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'lokasi' => 'required',
            'telepon' => 'required',
            // 'jumlah_mhs' => 'required',
            // 'id_skill' => 'required',
            // 'id_provinsi' => 'required',
            // 'id_kabupaten' => 'required',
            // 'id_mitra' => 'required',
            // 'id_kategori' => 'required',
        ]);

        $lowongan->update($request->all());

        return redirect()->route('lowongan.index')
        ->with('success', 'Lowongan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lowongan $lowongan)
    {
        $lowongan->delete();

        return redirect()->route('lowongan.index')
        ->with('success', 'Lowongan deleted successfully');
    }
}
