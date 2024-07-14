<x-layout>
    <x-slot name="title">Peminjaman</x-slot>

    <div class="container">
        <button type="button" class="btn btn-outline-primary card" data-toggle="modal" data-target="#modal-tambah">
            Tambah
        </button>

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Peminjaman</th>
                    <th>KTP Peminjam</th>
                    <th>Keperluan Pinjam</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Biaya</th>
                    <th>Armada</th>
                    <th>Komentar Peminjam</th>
                    <th>Status Pinjam</th>
                    @if(auth()->user()->usertype == 'admin')
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($list_peminjaman as $peminjaman)
                    <tr>
                        <td>{{ $peminjaman->id }}</td>
                        <td>{{ $peminjaman->nama_peminjaman }}</td>
                        <td>{{ $peminjaman->ktp_peminjam }}</td>
                        <td>{{ $peminjaman->keperluan_pinjam }}</td>
                        <td>{{ $peminjaman->mulai }}</td>
                        <td>{{ $peminjaman->selesai }}</td>
                        <td>{{ $peminjaman->biaya }}</td>
                        <td>{{ $peminjaman->armada->merk }} - {{ $peminjaman->armada->nopol }}</td>
                        <td>{{ $peminjaman->komentar_peminjam }}</td>
                        <td>{{ $peminjaman->status_pinjam }}</td>
                        @if(auth()->user()->usertype == 'admin')
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <td >
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $peminjaman->id }}">
                                    View|Edit
                                </button>
                                <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </div>
                        @endif
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{ $peminjaman->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Peminjaman</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @include('peminjaman.edit')
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.Edit Modal -->
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Peminjaman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('peminjaman.create')
                </div>
            </div>
        </div>
    </div>
    <!-- /.Modal Tambah -->

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    @endpush

</x-layout>
