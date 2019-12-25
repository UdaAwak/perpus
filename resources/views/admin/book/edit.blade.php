@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.author.update', $author) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Nama</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $author->name }}" required autocomplete="name" placeholder="Masukkan Nama Penulis" autofocus >

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input type="submit" value="Ubah" class="btn btn-primary">
                    
                </div>
            </form>
        </div>
    </div>
@endsection