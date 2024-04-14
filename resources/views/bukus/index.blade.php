@extends('components.master')

@section('title', 'Buku')

@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h3 class="text-capitalize">Data Buku</h3>
                <p class="text-sm mb-0">
                    <a class="btn btn-success" href="{{ route('bukus.create') }}"> Create</a>
                </p>
            </div>
            <div class="container">
                <div class="card-body p-3">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Buku</th>
                                <th>Judul</th>
                                <th>File</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Kategori</th>
                                <th>Tahun</th>
                                <th>Petugas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            ajax: "{{ route('bukus.index') }}",
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "ISBN",
                    name: "ISBN"
                },
                {
                    data: "judul",
                    name: "judul"
                },
                {
                    data: "file",
                    name: "file"
                },
                {
                    data: "pengarang",
                    name: "pengarang"
                },
                {
                    data: "penerbit",
                    name: "penerbit"
                },
                {
                    data: "kategori",
                    name: "kategori"
                },
                {
                    data: "tahun",
                    name: "tahun"
                },
                {
                    data: "petugas",
                    name: "petugas"
                },
                {
                    data: "action",
                    name: "action",
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#example').on('click', '.delete[data-remote]', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = $(this).data('remote');
            // confirm then
            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    method: '_DELETE',
                    submit: true
                }
            }).always(function(data) {
                $('#example').DataTable().draw(false);
            });
        });
    });
</script>
@endsection
