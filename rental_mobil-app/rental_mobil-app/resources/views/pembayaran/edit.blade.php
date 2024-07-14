<form method="POST" action="{{ route('pembayaran.update', $pembayaran->id) }}">
    @csrf
    @method('PUT')

    <!-- Form fields -->
    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Enter Tanggal" value="{{ old('tanggal', $pembayaran->tanggal) }}">
    </div>

    <div class="form-group">
        <label for="jumlah_bayar">Jumlah Bayar</label>
        <input type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar" placeholder="Enter Jumlah Bayar" value="{{ old('jumlah_bayar', $pembayaran->jumlah_bayar) }}">
    </div>

    <div class="form-group">
        <label for="peminjaman_id">Peminjam</label>
        <select class="form-control" id="peminjaman_id" name="peminjaman_id">
            <option value="">--Peminjaman--</option>
            @foreach ( $peminjaman as $jns )

            <option value="{{ $jns->id }}" {{ $pembayaran->peminjaman_id == $jns->id ? 'selected' : '' }}>{{ $jns->nama_peminjaman }}</option>
            @endforeach
        </select>
    </div>

    <div class="">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
