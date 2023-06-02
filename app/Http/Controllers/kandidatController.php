<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index()
    {
        $kandidat = Kandidat::all();
        return view('kandidat.index', compact('kandidat'));
    }

    public function create()
    {
        return view('kandidat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'partai' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        Kandidat::create($request->all());

        return redirect()->route('kandidat.index')
            ->with('success', 'Kandidat berhasil ditambahkan.');
    }

    public function show(Kandidat $kandidat)
    {
        return view('kandidat.show', compact('kandidat'));
    }

    public function edit(Kandidat $kandidat)
    {
        return view('kandidat.edit', compact('kandidat'));
    }

    public function update(Request $request, Kandidat $kandidat)
    {
        $request->validate([
            'nama' => 'required',
            'partai' => 'required',
            // tambah                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          kan validasi lainnya sesuai kebutuhan
        ]);

        $kandidat->update($request->all());

        return redirect()->route('kandidat.index')
            ->with('success', 'Kandidat berhasil diperbarui.');
    }

    public function destroy(Kandidat $kandidat)
    {
        $kandidat->delete();

        return redirect()->route('kandidat.index')
            ->with('success', 'Kandidat berhasil dihapus.');
    }
}
