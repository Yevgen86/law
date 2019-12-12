@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1 style="text-align: center;">Willkomen {{ auth()->user()->name }} </h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="{{ asset('images/logo.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Termine</h5>
                                <p class="card-text" style="height: 40px;">Hier können Sie Ihre reservierten und
                                    bestätigten
                                    Termine verwalten</p>
                                <a href="#" class="btn btn-primary" style="display: block; text-transform: uppercase;">weiter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="{{ asset('images/logo.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Termin reservieren</h5>
                                <p class="card-text" style="height: 40px;">Reservieren Sie hier einen Termin für
                                    sich</p>
                                <a href="#" class="btn btn-primary" style="display: block; text-transform: uppercase;">weiter</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="{{ asset('images/logo.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Eigene Daten & Dokumente</h5>
                                <p class="card-text" style="height: 40px;">Persönlichen Informationen, Dokumente,
                                    Bescheide, Ladungen uvm.</p>
                                <a href="#" class="btn btn-primary" style="display: block; text-transform: uppercase;">weiter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
