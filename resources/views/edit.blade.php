@extends('layouts.app')

@section('content')
    <h1>Edit page</h1>

    <form action="{{ route('datainfo-update-submit', $data->id) }}" method="post">
        @csrf

        <label for="name" >Masteries name</label>
        <input type="text" name="name" placeholder="Name" id="name" value="{{$data->name}}"><br>
        <label for="description" >Descriptions</label>
        <textarea name="description" id="description" placeholder="Description">{{$data->description}}</textarea><br>

        <button type="submit">Update</button>
    </form>
@endsection
