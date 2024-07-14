<?php

// app/Http/Controllers/JenisKendaraanController.php

namespace App\Http\Controllers;

use App\Models\Jenis_Kendaraan;
use Illuminate\Http\Request;

class JenisKendaraanController extends Controller
{
    public function show()
    {
        $jenisKendaraans = Jenis_Kendaraan::all();
        return view('jenis_kendaraan.show', compact('jenisKendaraans'));
    }

    public function create()
    {
        return view('jenis_kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:20|unique:jenis_kendaraan,nama',
        ]);

        Jenis_Kendaraan::create($request->all());

        return redirect()->route('jenis_kendaraan.show')
            ->with('success', 'Jenis Kendaraan created successfully.');
    }

    public function edit($id)
    {
        $jenisKendaraan = Jenis_Kendaraan::findOrFail($id);
        return view('jenis_kendaraan.edit', compact('jenisKendaraan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:20|unique:jenis_kendaraan,nama,' . $id,
        ]);

        $jenisKendaraan = Jenis_Kendaraan::findOrFail($id);
        $jenisKendaraan->update($request->all());

        return redirect()->route('jenis_kendaraan.show')
            ->with('success', 'Jenis Kendaraan updated successfully.');
    }

    public function destroy($id)
    {
        $jenisKendaraan = Jenis_Kendaraan::findOrFail($id);
        $jenisKendaraan->delete();

        return redirect()->route('jenis_kendaraan.show')
            ->with('success', 'Jenis Kendaraan deleted successfully.');
    }
}
