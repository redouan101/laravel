@extends('layouts.master')


    @section('content')
    <h1>PHOTO GALLERY</h1>

        <a href="{{route('gallery.add_photo')}}" class="btn">Foto Toevoegen</a>
    @endsection