<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        return view('prestasi.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar_prestasi' => 'required',
        ]);

        $data = $request->all();
        $data['gambar_prestasi'] = $request->file('gambar_prestasi')->store('prestasi');

        Prestasi::create($data);

        return redirect()->route('prestasi.index')->with(['success' => 'Prestasi Berhasil Ditambahkan']);
    }

    public function edit($id)
    {
        $prestasi = Prestasi::find($id);

        return view ('prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::find($id);
        Storage::delete($prestasi->gambar_prestasi);
        $prestasi->update([
            'gambar_prestasi' => $request->file('gambar_prestasi')->store('prestasi'),
        ]);
        return redirect()->route('prestasi.index')->with(['success' => 'Prestasi Berhasil Diedit']);
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::find($id);

        Storage::delete($prestasi->gambar_prestasi);
        $prestasi->delete();

        return redirect()->route('prestasi.index')->with(['success' => 'Prestasi Berhasil Dihapus']);
    }
}
