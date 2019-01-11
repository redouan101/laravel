@extends('layouts.master')

@section('content')
    <h1>Photo Gallery Form</h1>

    <form action=" {{route('gallery.save_photo')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="from-group">
            <label for="title">Titel</label>
            <input type="text" value=" {{old('title')}} " name="title" placeholder="Vul hier de titel in" class="form-control">
            @if($errors->has('title'))
                <p class="text-danger"> {{$errors->first('title')}} </p>
            @endif
        </div>
        <div class="from-group">
            <label for="description">Omschrijvinng</label>
            <textarea name="description" placeholder="Vul hier de omschrijving in" class="form-control"> {{old('description')}}</textarea>
            @if($errors->has('description'))
                <p class="text-danger"> {{$errors->first('description')}} </p>
            @endif
        </div>
        <div class="from-group">
            <label for="description">Omschrijvinng</label>
            <input type="file" name="photo"/>
            @if($errors->has('photo'))
                <p class="text-danger"> {{$errors->first('photo')}} </p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Opsturen</button>
    </form>
@endsection