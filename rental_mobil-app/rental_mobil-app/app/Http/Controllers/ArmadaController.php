<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use App\Models\Jenis_Kendaraan;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Armada',
        ];

        $list_armada = Armada::all();
        $jenis_kendaraan = Jenis_Kendaraan::all();
        return view('armada.show', compact('list_armada', 'jenis_kendaraan', 'data_layout'));
    }

    public function create()
    {
        $jenis_kendaraan = Jenis_Kendaraan::all();
        return view('armada.create', compact('jenis_kendaraan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|string|max:30',
            'nopol' => 'required|string|max:20',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'nullable|string|max:200',
            'jenis_kendaraan_id' => 'required|integer',
            'kapasitas_kursi' => 'nullable|integer',
            'rating' => 'nullable|integer',
        ]);

        Armada::create($request->all());

        return redirect()->route('armada.show')->with('success', 'Armada berhasil dibuat.');
    }

    public function edit($id)
    {
        $armada = Armada::findOrFail($id);
        $jenis_kendaraan = Jenis_Kendaraan::all();

        return view('armada.edit', compact('armada', 'jenis_kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required|string|max:30',
            'nopol' => 'required|string|max:20',
            'thn_beli' => 'required|integer',
            'deskripsi' => 'nullable|string|max:200',
            'jenis_kendaraan_id' => 'required|integer',
            'kapasitas_kursi' => 'nullable|integer',
            'rating' => 'nullable|integer',
        ]);

        $armada = Armada::findOrFail($id);
        $armada->update($request->all());

        return redirect()->route('armada.show')->with('success', 'Armada berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $armada = Armada::findOrFail($id);
        $armada->delete();

        return redirect()->route('armada.show')->with('success', 'Armada berhasil dihapus.');
    }
}
