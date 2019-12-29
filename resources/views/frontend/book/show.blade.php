@extends('frontend.templates.default')

@section('content')
    <div class="col s12 m12">
        <h4><strong>Detail Buku</strong></h4>
        <div class="card horizontal hoverable">
            <div class="card-image">
                <img src="{{ $book->getCover() }}" >
            </div>
            <div class="card-stacked">
                <div class="card-content">
                <h4 class="red-text accent-2">{{ $book->title }}</h4>
                <blockquote>
                    <p>{{ $book->description }}</p>
                </blockquote>
                <p>
                    <i class="material-icons">person</i> {{ $book->author->name }}
                </p>
                <p>
                    <i class="material-icons">book</i> {{ $book->qty }}
                </p>
                </div>
                <div class="card-action">
                <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
                </div>
            </div>
        </div>
    </div>

    <h5>Buku Lainnya dari Penulis <strong class="blue-text">{{ $book->author->name }} ...</strong></h5>
    <div class="row">
        {{-- {{ dd($book->author->books) }} --}}
        @foreach ($book->author->books->shuffle()->take(4) as $book)
            <div class="col s12 m6">
                <div class="card horizontal hoverable">
                    <div class="card-image">
                        <img src="{{ $book->getCover() }}" style="height: 200px">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                        <h5>
                            <a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title, 20) }}</a>
                        </h5>
                        <p>{{ Str::limit($book->description, 150) }}</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection