@extends('layouts.master')

@section('content')
    <h1>Photo Gallery</h1>

    <a href=" {{ route('gallery.add_photo') }} " class="btn">Upload Image</a>

    @foreach($photos as $photo)
        <h2>{{asset('photos/'.$photo->title)}}</h2>
        <img src="{{ asset('photos/'.$photo->photo)}}"/>
        <p>{{asset('photos/'.$photo->description)}}</p>
    @endforeach



@endsection