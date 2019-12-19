@extends('layouts.app')

@section('content')
    <div class="container-fluid" id="clients-page">
        <h1>Klienten</h1>
        <div class="row justify-content-center">
            @if($clients->count())
                <div class="form-inline mb-3 mt-5 col-9 search-btn-container">
                    <div class="form-group mr-2 ml-4">
                        <input type="text" class="form-control" id="search" placeholder=" Klienten finden...">
                    </div>
                    <a href="{{ route('newClient') }}" class="btn btn-success btn-lg">Neuen Klienten anlegen</a>
                </div>
        </div>
        <div class="row justify-content-center">
                <div class="table-responsive col-9">
                    <table class="table table-bordered sortable table-hover" id="table_example">
                        <thead class="thead-light">
                        <tr>
                            <th>Vorname</th>
                            <th>Nachname</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Adresse</th>
                            <th>PLZ</th>
                            <th>Ort</th>
                            <th>Land</th>
                            <th>Aktion</th>
                        </tr>
                        </thead>
                        @foreach($clients as $client)
                            <tbody>
                            <tr>
                                <td><a href="/clients/{{$client->id}}">{{ $client->firstname }}</a></td>
                                <td>{{ $client->lastname }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->tel }}</td>
                                <td>{{ $client->address }}</td>
                                <td>{{ $client->plz }}</td>
                                <td>{{ $client->city }}</td>
                                <td>{{ $client->country }}</td>
                                <td><a href="/client/{{$client->id}}/delete">Löschen</a></td>
                            </tr>
                            </tbody>
                        @endforeach
                        @endif
                    </table>
                </div>
                <div class="pagination-container">
                    <p>{{$clients->links()}}</p>
                </div>
        </div>
    </div>
@endsection
