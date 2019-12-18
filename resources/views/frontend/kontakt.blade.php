@extends('layouts.app')

@section('style')
    <style>
        body {
            background-size: cover;
            background: url("{{ asset('/images/bg-contact.jpg') }}") no-repeat fixed 85% 60%;
            height: 100vh;
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="container" id="contact-form">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        Hier nehmen sie mit uns Kontakt für ein Erstgespräch auf
                    </div>
                    <div id="app">
                        <!--call vue.js -->
                        <contacts></contacts>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
