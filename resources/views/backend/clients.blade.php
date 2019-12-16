@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-2">
            <a href="{{ route('newClient') }}">Neuen Klienten Anlegen</a>
        </div>
        @if($clients->count())
        <input class="mb-2" type="text" name="search" value="" id="search" placeholder="Search" autofocus />

        <table class="table table-bordered sortable" id="table_example">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Adresse</th>
                    <th>Plz</th>
                    <th>Ort</th>
                    <th>Land</th>
                    <th>Klient Löschen</th>
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

        {{--<p>{!! $clients->appends(\Request::except('page'))->render() !!}</p>--}}
        <p>{{$clients->links()}}</p>
    </div>
@endsection
