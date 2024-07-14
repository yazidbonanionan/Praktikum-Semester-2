<form method="POST" action="{{ route('peminjaman.update', $peminjaman->id) }}">
    @csrf
    @method('PUT')

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-group">
            <label for="nama_peminjaman">Nama Peminjaman</label>
            <input type="text" class="form-control" id="nama_peminjaman" name="nama_peminjaman" placeholder="Enter Nama Peminjaman" value="{{ old('nama_peminjaman', $peminjaman->nama_peminjaman) }}">
        </div>

        <div class="form-group">
            <label for="ktp_peminjam">KTP Peminjam</label>
            <input type="text" class="form-control" id="ktp_peminjam" name="ktp_peminjam" placeholder="Enter KTP Peminjam" value="{{ old('ktp_peminjam', $peminjaman->ktp_peminjam) }}">
        </div>

        <div class="form-group">
            <label for="keperluan_pinjam">Keperluan Pinjam</label>
            <input type="text" class="form-control" id="keperluan_pinjam" name="keperluan_pinjam" placeholder="Enter Keperluan Pinjam" value="{{ old('keperluan_pinjam', $peminjaman->keperluan_pinjam) }}">
        </div>

        <div class="form-group">
            <label for="mulai">Mulai</label>
            <input type="date" class="form-control" id="mulai" name="mulai" value="{{ old('mulai', $peminjaman->mulai) }}">
        </div>

        <div class="form-group">
            <label for="selesai">Selesai</label>
            <input type="date" class="form-control" id="selesai" name="selesai" value="{{ old('selesai', $peminjaman->selesai) }}">
        </div>

        <div class="form-group">
            <label for="biaya">Biaya</label>
            <input type="number" step="any" class="form-control" id="biaya" name="biaya" placeholder="Enter Biaya" value="{{ old('biaya', $peminjaman->biaya) }}">
        </div>

        <div class="form-group">
            <label for="armada_id">Armada</label>
            <select class="form-control" id="armada_id" name="armada_id">
                <option value="">--Armada--</option>
                @foreach ($armada as $jns)
                    <option value="{{ $jns->id }}" {{ $peminjaman->armada_id == $jns->id ? 'selected' : '' }}>{{ $jns->merk }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="komentar_peminjam">Komentar Peminjam</label>
            <input type="text" class="form-control" id="komentar_peminjam" name="komentar_peminjam" placeholder="Enter Komentar Peminjam" value="{{ old('komentar_peminjam', $peminjaman->komentar_peminjam) }}">
        </div>

        <div class="form-group">
            <label for="status_pinjam">Status Pinjam</label>
            <input type="text" class="form-control" id="status_pinjam" name="status_pinjam" placeholder="Enter Status Pinjam" value="{{ old('status_pinjam', $peminjaman->status_pinjam) }}">
        </div>

        <div class="">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
