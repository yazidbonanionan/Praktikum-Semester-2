<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Pembayaran',
        ];

        $list_pembayaran = Pembayaran::all();
        $peminjaman = Peminjaman::all();
        return view('pembayaran.show', compact('list_pembayaran', 'peminjaman', 'data_layout'));
    }

    public function create()
    {
        $peminjaman = Peminjaman::all();
        return view('pembayaran.create', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'peminjaman_id' => 'required|integer|exists:peminjaman,id',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('pembayaran.show')->with('success', 'Pembayaran created successfully.');
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $peminjaman = Peminjaman::all();

        // Debugging: Output contents of $peminjaman
        dd($peminjaman);

        return view('pembayaran.edit', compact('pembayaran', 'peminjaman'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah_bayar' => 'required|numeric',
            'peminjaman_id' => 'required|integer|exists:peminjaman,id',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($request->all());

        return redirect()->route('pembayaran.show')->with('success', 'Pembayaran updated successfully.');
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();

        return redirect()->route('pembayaran.show')->with('success', 'Pembayaran deleted successfully.');
    }

}
