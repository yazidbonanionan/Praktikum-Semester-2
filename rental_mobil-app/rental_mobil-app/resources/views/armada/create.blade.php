<form action="{{ route('armada.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="merk">Merk</label>
            <input type="text" class="form-control" id="merk" name="merk" placeholder="Enter merk" value="{{ old('merk') }}">
        </div>

        <div class="form-group">
            <label for="nopol">No Polisi</label>
            <input type="text" class="form-control" id="nopol" name="nopol" placeholder="Enter No Polisi" value="{{ old('nopol') }}">
        </div>

        <div class="form-group">
            <label for="thn_beli">Tahun Beli</label>
            <input type="number" class="form-control" id="thn_beli" name="thn_beli" placeholder="Enter Tahun Beli" value="{{ old('thn_beli') }}">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Enter Deskripsi" value="{{ old('deskripsi') }}">
        </div>

        <div class="form-group">
            <label for="jenis_kendaraan_id">Jenis Kendaraan ID</label>
            <select class="form-control" id="jenis_kendaraan_id" name="jenis_kendaraan_id">
                <option value="">--Jenis Kendaraan--</option>
                @foreach ( $jenis_kendaraan as $jns )

                <option value="{{$jns->id }}">{{$jns->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="kapasitas_kursi">Kapasitas Kursi</label>
            <input type="number" class="form-control" id="kapasitas_kursi" name="kapasitas_kursi" placeholder="Enter Kapasitas Kursi" value="{{ old('kapasitas_kursi') }}">
        </div>

        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" class="form-control" id="rating" name="rating" placeholder="Enter Rating" value="{{ old('rating') }}">
        </div>

    <div class="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
