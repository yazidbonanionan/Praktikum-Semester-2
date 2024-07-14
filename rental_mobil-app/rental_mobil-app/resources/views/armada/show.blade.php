<x-layout>
    <x-slot name="title">Armada</x-slot>

    <div class="container">
        <div class="d-grid gap-2 mx-auto">
            <button type="button" class="btn btn-outline-primary card" data-toggle="modal" data-target="#modal-default">
                Tambah
            </button>
        </div>

        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Merk</th>
                    <th>Nopol</th>
                    <th>Tahun Beli</th>
                    <th>Deskripsi</th>
                    <th>Jenis Kendaraan</th>
                    <th>Kapasitas Kursi</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_armada as $armada)
                    <tr>
                        <td>{{ $armada->id }}</td>
                        <td>{{ $armada->merk }}</td>
                        <td>{{ $armada->nopol }}</td>
                        <td>{{ $armada->thn_beli }}</td>
                        <td>{{ $armada->deskripsi }}</td>
                        <td>{{ $armada->jenisKendaraan->nama }}</td>
                        <td>{{ $armada->kapasitas_kursi }}</td>
                        <td>{{ $armada->rating }}</td>
                        <td>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                View|Edit
                            </button>
                            <form action="{{ route('armada.destroy', $armada->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
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
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('armada.create')
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="editModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                @include('armada.edit')
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

</x-layout>
