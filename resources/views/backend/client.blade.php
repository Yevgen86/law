@extends('layouts.app')

@section('content')

    <div class="container" id="change-client-page">

        <h3> {{$client->firstname ." ".$client->lastname}}</h3>


        <div class="row justify-content-center mybg">
            @if ($errors->any())
                <div class="validation-errors">
                    <ul class="validation-error">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-header col-12">
                <h4>{{ __('Stammdaten ') }}</h4>
                <form method="POST" action="/clients/{{$client->id}}">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password-confirm">{{ __('Nachname') }}</label>
                            <input name="lastname"
                                   id="lastname"
                                   value="{{$client ? $client->lastname : old('lastname')}}"
                                   type="text"
                                   class="form-control"
                                   required>
                            @error('lastname') is-invalid @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">{{ __('Vorname') }}</label>
                            <input name="firstname"
                                   id="firstname"
                                   type="text"
                                   class="form-control"
                                   value="{{$client ? $client->firstname : old('firstname')}}"
                                   required
                                   autocomplete="firstname"
                                   autofocus>
                            @error('firstname') is-invalid @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">{{ __('Email') }}</label>
                            <input name="email"
                                   id="email"
                                   type="text"
                                   class="form-control"
                                   value="{{$client ? $client->email : old('email')}}"
                                   required
                                   autocomplete="email"
                                   autofocus>
                            @error('email') is-invalid @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel">{{ __('Nr') }}</label>
                            <input name="tel"
                                   id="tel"
                                   type="text"
                                   value="{{$client ? $client->tel : old('tel')}}"
                                   class="form-control"
                                   required>
                            @error('tel') is-invalid @enderror
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="address">{{ __('Adresse') }}</label>
                            <input name="address"
                                   id="address"
                                   type="text"
                                   class="form-control"
                                   value="{{$client ? $client->address : old('address')}}"
                                   required
                                   autocomplete="address"
                                   autofocus>
                            @error('address') is-invalid @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="plz">{{ __('PLZ') }}</label>
                            <input name="plz"
                                   id="plz"
                                   type="text"
                                   value="{{$client ? $client->plz : old('plz')}}"
                                   class="form-control"
                                   required>
                            @error('plz') is-invalid @enderror
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="city">{{ __('Ort') }}</label>
                            <input name="city"
                                   id="city"
                                   type="text"
                                   class="form-control"
                                   value="{{$client ? $client->city : old('city')}}"
                                   required
                                   autocomplete="ort"
                                   autofocus>
                            @error('city') is-invalid @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country">{{ __('Land') }}</label>
                            <input name="country"
                                   id="country"
                                   value="{{$client ? $client->country : old('country')}}"
                                   type="text"
                                   class="form-control"
                                   required>
                            @error('country') is-invalid @enderror
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mybg">
                        <div class="col-6 offset-md-4">
                            <a href="/clients" class="btn btn-secondary">Zurück</a>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Speichern') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row justify-content-center mybg">
            <div class="card-header col-12">
                <h3>Dokument hochladen</h3>

                <form action="/clients/{{$id}}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="form-row">
                        <div class="form-group">
                            <lable for="doc">Dokument hochladen</lable>
                            <input type="file" class="form-control-file" id="doc" name="doc">
                            @error('doc')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <lable for="title">Dokumentname</lable>
                            <input type="text" class="form-control" id="title" name="title">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Hochladen</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @if($documents->count())
            <div class="row justify-content-center mybg">
                <div class="card-header col-12">
                    <h3>Dokumenten</h3>

                    <div class="mb-2">
                        <input type="text" name="search" value="" id="search" placeholder="Dokument suchen..." autofocus/>
                    </div>
                    <table class="table table-bordered sortable" id="table_example">
                        <thead>
                        <tr>
                            <th>Dokumentname</th>
                            <th>Dokument löschen</th>
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
                </div>
            </div>
    </div>
@endsection
