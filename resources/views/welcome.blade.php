@extends('layouts.app')

@section('style')
    <style>
        body {
            background-size: cover;
            background: url("{{ asset('/images/activity-board.jpg') }}") no-repeat fixed center;
            height: 100vh;
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid welcome-container">

    </div>
@endsection
