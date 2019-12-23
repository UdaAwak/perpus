@extends('admin.templates.default')

@section('content')
    <section class="content">
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Penulis</h3>
                    <a href="{{ route('admin.author.create') }}" class="btn btn-primary">Tambah Penulis</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
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
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.author.data') }}',
                columns:[
                    { data: 'id' },
                    { data: 'name' }
                ]
            })
        })
    </script>
@endpush