@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="m-3">
            <a href="#">Add New Client</a>
        </div>
        <input type="text" name="search" value="" id="search" placeholder="Search" autofocus />

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
                </tr>
            </thead>
            @if($clients->count())
                @foreach($clients as $client)
                    <tbody>
                        <tr>
                            <td><a href="#">{{ $client->firstname }}</a></td>
                            <td>{{ $client->lastname }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->tel }}</td>
                            <td>{{ $client->address }}</td>
                            <td>{{ $client->plz }}</td>
                            <td>{{ $client->city }}</td>
                            <td>{{ $client->country }}</td>
                            {{--<td><a href="/client/{{$client->id}}">View Details</a></td>--}}
                        </tr>
                    </tbody>
                @endforeach
            @endif
        </table>

        {{--<p>{!! $clients->appends(\Request::except('page'))->render() !!}</p>--}}
        <p>{{$clients->links()}}</p>
    </div>
@endsection
