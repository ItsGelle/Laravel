@extends('layouts.master')

@section('page_title')
    <h1>Agenda</h1>
@stop

@section('navbar')
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Info</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/historie">Historie</a>
                <a class="dropdown-item" href="/spelers">Players</a>
                <a class="dropdown-item" href="/agenda">Agenda</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://fcbayern.com/en" target="_blank">Bayern München</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
    </ul>
@stop

@section('content')

    <div style="font-size: 20px; background: none" class="agenda">
        <h1>Historie</h1>
        <p>
            24-11-18 <br>
            15:30 <br>
            FC Bayern Munich - Fortuna Düsseldorf <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            27-11-18 <br>
            21:00 <br>
            FC Bayern Munich - Benfica <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            08-12-18 <br>
            15:30 <br>
            FC Bayern Munich - 1. FC Nürnberg <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            19-12-18 <br>
            15:30 <br>
            FC Bayern Munich - RB Leipzig <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            26-01-19 <br>
            02:37 <br>
            FC Bayern München vs VfB Stuttgart <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            09-02-19 <br>
            02:37 <br>
            FC Bayern München vs FC Schalke 04 <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            23-02-19 <br>
            02:37 <br>
            FC Bayern München vs Hertha BSC <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            09-03-19 <br>
            02:37 <br>
            FC Bayern München vs VfL Wolfsburg <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            16-03-19 <br>
            15:30 <br>
            FC Bayern Munich - 1. FSV Mainz 05 <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            06-04-19 <br>
            02:37 <br>
            FC Bayern München vs Borussia Dortmund <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            20-04-19 <br>
            02:37 <br>
            FC Bayern München vs SV Werder Bremen <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            04-05-19 <br>
            15:30 <br>
            FC Bayern München vs Hannover 96 <br>
            Allianz Arena <br>
            München, Duitsland <br>
        <hr>
        <br>
            18-05-19 <br>
            01:04 <br>
            FC Bayern Munich - Eintracht Frankfurt <br>
            Allianz Arena <br>
            München, Duitsland
        </p>
    </div>

@stop