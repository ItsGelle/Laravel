@extends('layouts.master')

@section('page_title')
    <h1>History</h1>
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

    <div style="font-size: 20px" class="historie">
        <h1>Historie</h1>

        <p>FC Bayern München is een Duitse voetbalclub uit München, uitkomend in de Bundesliga en opgericht in 1900. <br>
        De thuishaven was tot de zomer van 2005 het Olympiastadion, maar is verruild voor de Allianz Arena.
        Bayern is de bekendste en succesvolste club van Duitsland en behoort tot de Europese en wereldtop. <br>
        FC Bayern slaagde er als één van de weinige Europese topclubs in om samen met Manchester United, Ajax, Juventus en Chelsea,
        <br>alle drie de UEFA-hoofdcompetities (Europacup I / UEFA Champions League, Europacup II en UEFA Cup / UEFA Europa League) te winnen.
        <br> Opvallend is dat de opkomst van deze vereniging,
        <br>tot circa 1965 kleiner dan stadgenoot TSV 1860 München, gelijk opliep met de opkomst van Franz Beckenbauer. </p>
    </div>

@stop
