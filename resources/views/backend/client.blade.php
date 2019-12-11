@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="top-left">
            <a href="/clients">Zurück</a>
        </div>

        <form action="/clients/{{$id}}" enctype="multipart/form-data" method="post">
            @csrf

                <div class="row"><h1>Dokumente</h1></div>
                <div class="row">
                    <lable for="doc" class="col-md-4 col-form-label">Ein Dokument Hochladen</lable>
                    <input type="file" class="form-control-file" id="doc" name="doc">
                    @if($errors->has('doc'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('doc') }}</strong>
                </span>
                    @endif
                </div>

                <div class="row">
                    <lable for="title" class="col-md-4 col-form-label">Ein Dokument Hochladen</lable>
                    <input type="text" class="form-control-file" id="title" name="title">
                @if($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
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
            <input type="text" name="search" value="" id="search" placeholder="Search" autofocus />
        </div>
            <table class="table table-bordered sortable" id="table_example">
                <thead>
                <tr>
                    <th>Dokument Name</th>
                </tr>
                </thead>
                @if($documents->count())
                    @foreach($documents as $document)
                        <tbody>
                        <tr>
                            <td>
                                <a href="{{ asset($document->link) }}">{{ $document->name }}</a>

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
