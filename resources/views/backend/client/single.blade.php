@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1>Willkomen {{ auth()->user()->name }} </h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 justify-content-center">
                {{--Your user id is: {{ $client->id }}
                Your name is: {{ $client->name }}
                Your email is: {{ $client->email }}--}}

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="{{ asset('images/logo.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Termine</h5>
                                <p class="card-text">Hier können Sie Ihre reservierten und bestätigten Termine
                                    verwalten</p>
                                <a href="#" class="btn btn-primary">Zu den Terminen</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card ">
                            <img src="{{ asset('images/logo.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Termin reservieren</h5>
                                <p class="card-text">Reservieren Sie hier einen Termin für sich</p>
                                <a href="#" class="btn btn-primary">Freie Termine</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="{{ asset('images/logo.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eigene Daten & Dokumente</h5>
                                <p class="card-text">Sehen Sie Ihre persönlichen Informationen, Dokumente,
                                    Bescheide, Ladungen uvm.</p>
                                <a href="#" class="btn btn-primary">weiter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
