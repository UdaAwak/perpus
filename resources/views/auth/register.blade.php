@extends('frontend.templates.default')

@section('content')
    <div class="container">
        <h3>Resgister</h3>
        <form action="{{ route('register') }}" class="col s12" method="post">
            @csrf

            <div class="div row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">person</i>
                    <input type="text" class="@error('name') invalid @enderror" name="name" id="name" value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" class="validate @error('email') invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" class="@error('password') invalid @enderror" name="password" id="password" value="">
                    <label for="password">Password</label>
                    @error('password')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" class="@error('password_confirmation') invalid @enderror" name="password_confirmation" id="password_confirmation" value="">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    @error('password_confirmation')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>

                <div class="input-field right">
                    <input type="submit" value="Register" class="btn wave-effect waves-light red accent-1">
                </div>
            </div>
        </form>
    </div>
@endsection
