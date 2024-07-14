<x-layout>
    <x-slot name="title">Pembayaran</x-slot>

    <div class="container">
        <button type="button" class="btn btn-outline-primary card" data-toggle="modal" data-target="#modal-default">
            Tambah
        </button>

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Jumlah Bayar</th>
                    <th>Peminjaman ID</th>
                    @if(auth()->user()->usertype == 'admin')
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($list_pembayaran as $pembayaran)
                    <tr>
                        <td>{{ $pembayaran->id }}</td>
                        <td>{{ $pembayaran->tanggal }}</td>
                        <td>{{ $pembayaran->jumlah_bayar }}</td>
                        <td>{{ $pembayaran->peminjaman->nama_peminjaman }}</td>
                        @if(auth()->user()->usertype == 'admin')
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal-{{ $pembayaran->id }}">
                                View|Edit
                            </button>
                            <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    <div class="modal fade" id="editModal-{{ $pembayaran->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Pembayaran</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @include('pembayaran.edit')
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

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
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Pembayaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('pembayaran.create')
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</x-layout>
