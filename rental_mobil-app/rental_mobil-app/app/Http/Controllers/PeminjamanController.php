<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Armada;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Admin',
        ];

        $list_peminjaman = Peminjaman::all();
        $armada = Armada::all();
        return view('peminjaman.show', compact('list_peminjaman', 'armada', 'data_layout'));
    }

    public function create()
    {
        $armadas = Armada::all();
        return view('peminjaman.create', compact('armadas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjaman' => 'required|string|max:45',
            'ktp_peminjam' => 'required|string|max:20',
            'keperluan_pinjam' => 'required|string|max:100',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after_or_equal:mulai',
            'biaya' => 'required|numeric',
            'armada_id' => 'required|integer',
            'komentar_peminjam' => 'nullable|string|max:100',
            'status_pinjam' => 'nullable|string|max:20',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('peminjaman.show')->with('success', 'Peminjaman created successfully.');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $armadas = Armada::all();

        return view('peminjaman.edit', compact('peminjaman', 'armadas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_peminjaman' => 'required|string|max:45',
            'ktp_peminjam' => 'required|string|max:20',
            'keperluan_pinjam' => 'required|string|max:100',
            'mulai' => 'required|date',
            'selesai' => 'required|date|after_or_equal:mulai',
            'biaya' => 'required|numeric',
            'armada_id' => 'required|integer',
            'komentar_peminjam' => 'nullable|string|max:100',
            'status_pinjam' => 'nullable|string|max:20',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());

        return redirect()->route('peminjaman.show')->with('success', 'Peminjaman updated successfully.');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.show')->with('success', 'Peminjaman deleted successfully.');
    }
}
