@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-2">
            <h4>Aktuelle Anfragen</h4>
            <table class="table table-bordered sortable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Thema</th>
                    <th>Rechtsschutz vorhanden</th>
                    <th>Anwalt vorhanden</th>
                    <th>Anfrage löschen</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $i)
                    <tr>
                        <td><b> {{$i->firstname}} {{$i->lastname}} </b></td>
                        <td><a href="mailto:{{$i->email}}"> {{$i->email}}</a></td>
                        <td> {{$i->phone}} </td>
                        <td> {{$i->thema}} </td>
                        <td> {{$i->rechtsschutz}} </td>
                        <td> {{$i->rechtsvertretung}} </td>
                        <td><a href="/contacts/{{$i->id}}/delete">Löschen</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$data->links()}}
    </div>


@endsection
