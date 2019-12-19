@extends('layouts.app')

@section('content')
    <div class="container-fluid" id="requests-page">
        <h1>Aktuelle Anfragen</h1>
        <div class="row justify-content-center">


                <div class="table-responsive col-9">
                    <table class="table table-bordered table-hover sortable">
                        <thead class="thead-light">
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

            <div class="pagination-container">
                <p>{{$data->links()}}</p>
            </div>
        </div>
    </div>


@endsection
