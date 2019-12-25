@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.author.store') }}" method="POST">
                @csrf

                <div class="form-group @error('name') has-error @enderror">
                    <label for="name">Nama</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Masukkan Nama Penulis" autofocus >

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                

                <div class="form-group">
                    <input type="submit" value="Tambah" class="btn btn-primary">
                    
                </div>
            </form>
        </div>
    </div>
@endsection