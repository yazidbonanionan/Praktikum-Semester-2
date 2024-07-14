<form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
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
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Enter Tanggal" value="{{ old('tanggal') }}">
        </div>

        <div class="form-group">
            <label for="jumlah_bayar">Jumlah Bayar</label>
            <input type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar" placeholder="Enter Jumlah Bayar" value="{{ old('jumlah_bayar') }}">
        </div>
        <div class="form-group">
            <label for="peminjaman_id">Jpeminjaman</label>
            <select class="form-control" id="peminjaman_id" name="peminjaman_id">
                <option value="">--Peminjam--</option>
                @foreach ( $peminjaman as $jns )
                <option value="{{$jns->id }}">{{$jns->nama_peminjaman}}</option>
                @endforeach
            </select>
        </div>


    <div class="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
