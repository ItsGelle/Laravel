@extends('layouts.master')

@section('page_title')
    <h1>Contact</h1>
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

    <form style="text-align: center;" action="">
        <label><input type="text" id="Voornaam" placeholder="Voornaam"></label><br>
        <label><input type="text" id="Achternaam" placeholder="Achternaam"></label><br>
        <label><input type="password" id="Password" placeholder="Password"></label><br>
        <label><input type="email" id="Email" placeholder="email"></label><br>
        <label><button type="submit" id="Submit">Submit</button></label>
    </form>

@stop
