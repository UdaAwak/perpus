@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.book.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group @error('title') has-error @enderror">
                    <label for="title">Judul</label>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" placeholder="Masukkan judul buku" autofocus >

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group @error('description') has-error @enderror">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" rows="3" class="form-control" required autocomplete="description" placeholder="Tuliskan deskripsi buku">{{ old('description') }}</textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group @error('author_id') has-error @enderror">                  
                    <label for="author_id">Penulis</label>
                    <select class="form-control select2" style="width: 100%" name="author_id" id="author_id">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    
                    @error('author_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group @error('cover') has-error @enderror">                  
                    <label for="cover">Sampul</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="cover" id="cover" class="custom-file-input">
                            <label class="custom-file-label" for="cover">Pilih file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>

                    @error('cover')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group @error('qty') has-error @enderror">                  
                    <label for="qty">Jumlah</label>
                    <input id="qty" type="text" class="form-control @error('qty') is-invalid @enderror" name="qty" value="{{ old('qty') }}" required autocomplete="qty" placeholder="Masukkan jumlah buku">
                    
                    @error('qty')
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

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script>
        $('.select2').select2()

        $(document).ready(function () {
        bsCustomFileInput.init();
        });
    </script>
@endpush