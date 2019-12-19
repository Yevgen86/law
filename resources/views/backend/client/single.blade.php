@extends('layouts.app')

@section('content')
    <div class="container-fluid" id="single-page">
            <div>
                <h1>Willkomen {{ auth()->user()->name }} </h1>
            </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="{{ asset('images/reserved.jpg') }}" class="card-img-top" alt="calendar-appointments">
                            <div class="card-body">
                                <h5 class="card-title">Termine</h5>
                                <p class="card-text">Ihre reservierten und
                                    bestätigten
                                    Termine verwalten</p>
                                <a href="#" class="btn btn-primary disabled">weiter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="{{ asset('images/calendar.jpg') }}" class="card-img-top" alt="reserve appointments">
                            <div class="card-body">
                                <h5 class="card-title">Termin reservieren</h5>
                                <p class="card-text">Reservieren Sie hier einen Termin für
                                    sich</p>
                                <a href="#" class="btn btn-primary disabled">weiter</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="{{ asset('images/agreement.jpg') }}" class="card-img-top" alt="my documents">
                            <div class="card-body">
                                <h5 class="card-title">Dokumente</h5>
                                <p class="card-text">Dokumente,
                                    Bescheide, Ladungen uvm.</p>
                                <a href="/single/{{ auth()->user()->id }}/doc" class="btn btn-primary">weiter</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="card">
                            <img src="{{ asset('images/personal-data.jpg') }}" class="card-img-top" alt="my personal information">
                            <div class="card-body">
                                <h5 class="card-title">Eigene Daten</h5>
                                <p class="card-text">Persönlichen Informationen</p>
                                <a href="/single/{{ auth()->user()->id }}/profile" class="btn btn-primary">weiter</a>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
@endsection
