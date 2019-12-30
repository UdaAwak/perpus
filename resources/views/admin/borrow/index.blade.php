@extends('admin.templates.default')

@section('content')
    <section class="content">
        <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Judul Buku</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

    <form action="" method="POST" id="returnForm">
        @csrf
        @method("PUT")
        <input type="submit" value="Return" style="display: none">
    </form>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endpush

@push('scripts')

    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <script>
        $(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.borrow.data') }}',
                columns:[
                    { data: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'user' },
                    { data: 'book_title'},
                    { data: 'action'},
                ]
            })
        })
    </script>

    @include('admin.templates.partials.alerts')

@endpush