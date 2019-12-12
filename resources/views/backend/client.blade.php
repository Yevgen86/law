@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="float-right">
            <h3> {{$client->firstname ." ".$client->lastname}} Profile</h3>
        </div>
        <div class="top-left">
            <a href="/clients">Zurück</a>
        </div>

        <form action="/clients/{{$id}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row"><h1>Dokumente</h1></div>
            <div class="row">
                <lable for="doc" class="col-md-4 col-form-label">Ein Dokument Hochladen</lable>
                <input type="file" class="form-control-file" id="doc" name="doc">
                @error('doc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="row">
                <lable for="title" class="col-md-4 col-form-label">Ein Dokument Hochladen</lable>
                <input type="text" class="form-control-file" id="title" name="title">
                @error('title')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row">
                <button class="btn btn-primary" type="submit">Hochladen</button>
            </div>
        </form>
        <br>
        <div class="row">
            <h3>Dokument Liste</h3>
        </div>
        <div class="row">
            <input type="text" name="search" value="" id="search" placeholder="Search" autofocus/>
        </div>
        <table class="table table-bordered sortable" id="table_example">
            <thead>
            <tr>
                <th>Dokument Name</th>
                <th>DoKument Löschen</th>
            </tr>
            </thead>
            @if($documents->count())
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
            @endif
        </table>

        {{--<p>{!! $clients->appends(\Request::except('page'))->render() !!}</p>--}}
        <p>{{$documents->links()}}</p>
    </div>
    </div>

@endsection
