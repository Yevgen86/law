@extends('layouts.app')

@section('content')

    <div class="container">
        w
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
