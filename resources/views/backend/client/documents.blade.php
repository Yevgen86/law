@extends('layouts.app')

@section('content')

    <div class="container" id="docs">
        @if($documents->count())
            <div class="row justify-content-center">
                <h3>Dokumentliste</h3>
            </div>
            <div class="row justify-content-center">


                <div class="col-10">
                    <input type="text" name="search" value="" id="search" placeholder="Search" autofocus/>
                    <table class="table table-bordered sortable table-hover" id="table_example">
                        <thead class="thead-light">
                        <tr>
                            <th>Dokumentname</th>
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
                        @else
                            <div class="row justify-content-center">
                                <h3>Keine Dokumente vorhanden</h3>
                            </div>
                        @endif
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <a href="/single" class="btn btn-secondary">Zurück</a>
            </div>
    </div>

@endsection
