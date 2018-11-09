@extends('layouts.master')

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
    <h1>Homepage</h1>
    <p>Dit is een website over Bayern München.</p>
    <img style="width: 440px; height: 250px;" src="{{asset('img/FCLogo.jpg')}}" alt="Logo">
@endsection

<!--title-->
@section('title')
    Bayern München
@endsection

<!--subkopje-->
@section('page_title')
    Bayern München
@endsection

