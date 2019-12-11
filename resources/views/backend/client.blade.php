@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="top-left">
            <a href="/clients">Zurück</a>
        </div>

        <form action="/clients/{{$id}}" enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">
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


                    <div class="row pt-5">
                        <button class="btn btn-primary" type="submit">Hochladen</button>
                    </div>
                </div>
        </form>
    </div>
@endsection
