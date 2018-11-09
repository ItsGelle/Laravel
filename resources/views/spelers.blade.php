@extends('layouts.master')

@section('page_title')
    <h1>Spelers</h1>
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
                <a class="dropdown-item" href="/spelers">Spelers</a>
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

    <div style="font-size: 20px; text-align: center" class="spelers">
        <h1>Spelers</h1>

        <h3>Dit zijn de keepers: <br></h3>
        <p>
            Christian Früchtl, <br>
            Ron-Thorben Hoffmann, <br>
            Manuel Neuer, <br>
            Tom Starke, <br>
            Sven Ulreich, <br>
            Leo Weinkauf. <br>
        </p>

        <h3>Dit zijn de verdedigers: <br></h3>
        <p>
            David Alaba, <br>
            Jérôme Boateng, <br>
            Felix Götze, <br>
            Mats Hummels, <br>
            Javi Martínez, <br>
            Juan Bernat, <br>
            Joshua Kimmich, <br>
            Lukas Mai, <br>
           Jonathan Meier, <br>
            Rafinha, <br>
            Niklas Süle. <br>
        </p>

        <h3>Dit zijn de middenvelders: <br></h3>
        <p>
            Fabian Benko, <br>
            Kingsley Coman, <br>
            Niklas Dorsch, <br>
            Franck Ribéry, <br>
            James Rodríguez, <br>
            Sebastian Rudy, <br>
            Meritan Shabani, <br>
            Thiago 	[Spanje], <br>
            Timothy Tillman, <br>
            Corentin Tolisso, <br>
            Arturo Vidal. <br>
        </p>

        <h3>Dit zijn de aanvallers: </h3>
        <p>
            Franck Evina, <br>
            Robert Lewandowski, <br>
            Thomas Müller, <br>
            Miloš Pantović, <br>
            Arjen Robben, <br>
            Sandro Wagner, <br>
            Manuel Wintzheimer, <br>
            Kwasi Wriedt. <br>
        </p>
    </div>

@stop