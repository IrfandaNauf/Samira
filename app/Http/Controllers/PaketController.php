<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = Paket::all();
        return view('paket.index', compact('paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_paket' => 'required',
            'gambar_paket' => 'required',
            'angsuran_paket' => 'required',
        ]);

        $data = $request->all();
        $data['gambar_paket'] = $request->file('gambar_paket')->store('paket');

        Paket::create($data);

        return redirect()->route('paket.index')->with(['success' => 'Paket Berhasil Ditambahkan']);
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
        $paket = Paket::find($id);

        return view('paket.edit', [
            'paket' => $paket,
        ]);
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
        $paket = Paket::find($id);
        Storage::delete($paket->gambar_paket);
        $paket->update([
            'judul_paket' => $request->judul_paket,
            'angsuran_paket' => $request->angsuran_paket,
            'gambar_paket' => $request->file('gambar_paket')->store('paket'),
            'tanggal' => $request->tanggal,
            'jumlah_paket' => $request->jumlah_paket,
        ]);
        return redirect()->route('paket.index')->with(['success' => 'Paket Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = Paket::find($id);

        Storage::delete($paket->gambar_paket);
        $paket->delete();

        return redirect()->route('paket.index')->with(['success' => 'Paket Berhasil Dihapus']);
    }
}
