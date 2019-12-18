@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="top-left">
            <a href="/clients">Zurück</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Neuer Klient ') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addClient') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input name="firstname"
                                           id="firstname"
                                           type="text"
                                           class="form-control"
                                           @error('firstname') is-invalid @enderror
                                           value="{{ old('firstname') }}"
                                           required
                                           autocomplete="firstname"
                                           autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input  name="lastname"
                                            id="lastname"
                                           type="text"
                                           class="form-control"
                                           required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input name="email"
                                           id="email"
                                           type="email"
                                           class="form-control"
                                           @error('email') is-invalid @enderror
                                           value="{{ old('email') }}"
                                           required
                                           autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input name="password"
                                           id="password"
                                           type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           required
                                           autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input  name="password_confirmation"
                                            id="password-confirm"
                                            type="password"
                                            class="form-control"
                                            required
                                            autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>

                                <div class="col-md-6">
                                    <input  name="tel"
                                            id="tel"
                                            type="number"
                                            class="form-control"
                                            required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                                <div class="col-md-6">
                                    <input  name="address"
                                            id="address"
                                            type="text"
                                            class="form-control"
                                            required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="plz" class="col-md-4 col-form-label text-md-right">{{ __('Plz') }}</label>

                                <div class="col-md-6">
                                    <input  name="plz"
                                            id="plz"
                                            type="number"
                                            class="form-control"
                                            required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ort') }}</label>

                                <div class="col-md-6">
                                    <input  name="city"
                                            id="city"
                                            type="text"
                                            class="form-control"
                                            required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Land') }}</label>

                                <div class="col-md-6">
                                    <input  name="country"
                                            id="country"
                                            type="text"
                                            class="form-control"
                                            required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Anlegen') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
