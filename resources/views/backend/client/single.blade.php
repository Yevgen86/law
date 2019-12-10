@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div id="app">
                <div class="col-md-12">
                    <div>
                        <div>
                            <h1>Willkomen in Ihr persönliches Kabinett </h1>
                        </div>

                        Your user id is: {{ $client->id }}
                        Your name is: {{ $client->name }}
                        Your email is: {{ $client->email }}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
