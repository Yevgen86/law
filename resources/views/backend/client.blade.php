@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="float-right">
            <h3> {{$client->firstname ." ".$client->lastname}}</h3>
        </div>
        <div class="top-left mb-2">
            <a href="/clients">Zurück</a>
        </div>

        @if ($errors->any())
            <div class="validation-errors">
                <ul class="validation-error">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-header">{{ __('Stammdaten ') }}
            <form method="POST" action="/clients/{{$client->id}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="name" class="col-2">{{ __('Vorname') }}</label>
                    <input name="firstname"
                           id="firstname"
                           type="text"
                           class="form-control col-4"
                           value="{{$client ? $client->firstname : old('firstname')}}"
                           required
                           autocomplete="firstname"
                           autofocus>
                    @error('firstname') is-invalid @enderror

                    <label for="password-confirm" class="col-2">{{ __('Nachname') }}</label>
                    <input  name="lastname"
                            id="lastname"
                            value="{{$client ? $client->lastname : old('lastname')}}"
                            type="text"
                            class="form-control col-4"
                            required>
                    @error('lastname') is-invalid @enderror
                </div>

                <div class="form-group row">
                    <label for="email" class="col-2">{{ __('Email') }}</label>
                    <input name="email"
                           id="email"
                           type="text"
                           class="form-control col-4"
                           value="{{$client ? $client->email : old('email')}}"
                           required
                           autocomplete="email"
                           autofocus>
                    @error('email') is-invalid @enderror

                    <label for="tel" class="col-2">{{ __('Nr') }}</label>
                    <input  name="tel"
                            id="tel"
                            type="text"
                            value="{{$client ? $client->tel : old('tel')}}"
                            class="form-control col-4"
                            required>
                    @error('tel') is-invalid @enderror
                </div>
                <div class="form-group row">
                    <label for="address" class="col-2">{{ __('Adresse') }}</label>
                    <input name="address"
                           id="address"
                           type="text"
                           class="form-control col-4"
                           value="{{$client ? $client->address : old('address')}}"
                           required
                           autocomplete="address"
                           autofocus>
                    @error('address') is-invalid @enderror

                    <label for="plz" class="col-2">{{ __('PLZ') }}</label>
                    <input  name="plz"
                            id="plz"
                            type="text"
                            value="{{$client ? $client->plz : old('plz')}}"
                            class="form-control col-4"
                            required>
                    @error('plz') is-invalid @enderror
                </div>
                <div class="form-group row">
                    <label for="city" class="col-2">{{ __('Ort') }}</label>
                    <input name="city"
                           id="city"
                           type="text"
                           class="form-control col-4"
                           value="{{$client ? $client->city : old('city')}}"
                           required
                           autocomplete="ort"
                           autofocus>
                    @error('city') is-invalid @enderror

                    <label for="country" class="col-2">{{ __('Land') }}</label>
                    <input  name="country"
                            id="country"
                            value="{{$client ? $client->country : old('country')}}"
                            type="text"
                            class="form-control col-4"
                            required>
                    @error('country') is-invalid @enderror
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Speichern') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="mt-5">
            <div class="card-header">
                <form action="/clients/{{$id}}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="row">
                        <h3>Dokument hochladen</h3>
                    </div>
                    <div class="row mb-1">
                        <lable for="doc" class="">Dokument hochladen</lable>
                        <input type="file" class="form-control-file" id="doc" name="doc">
                        @error('doc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-2">
                        <lable for="title" class="">Dokument Name</lable>
                        <input type="text" class="form-control" id="title" name="title">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row mb-1">
                        <button class="btn btn-primary" type="submit">Hochladen</button>
                    </div>
                </form>
            </div>

        @if($documents->count())
        <div class="row mt-5">
            <h3>Dokument Liste</h3>
        </div>
        <div class="mb-2">
            <input type="text" name="search" value="" id="search" placeholder="Search" autofocus/>
        </div>
        <table class="table table-bordered sortable" id="table_example">
            <thead>
                <tr>
                <th>Dokument Name</th>
                <th>Dokument Löschen</th>
            </tr>
            </thead>
                @foreach($documents as $document)
                    <tbody>
                    <tr>
                        <td>
                            <a href="{{ asset($document->link) }}">{{ $document->name }}</a>
                        </td>
                        <td>
                            <a href="/clients/doc/{{$document->id}}">Löschen</a>
                        </td>
                    </tr>
                    </tbody>
                @endforeach
                    <p>{{$documents->links()}}</p>
            @endif
        </table>

        {{--<p>{!! $clients->appends(\Request::except('page'))->render() !!}</p>--}}
    </div>
    </div>

@endsection
