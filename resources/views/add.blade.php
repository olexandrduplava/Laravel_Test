@extends('layouts.app')

@section('content')
    <h1>Add page</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error  }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('add-form') }}" method="post">
        @csrf

        <label for="name">Masteries name</label>
        <input type="text" name="name" placeholder="Name" id="name"><br>
        <label for="description">Descriptions</label>
        <textarea name="description" id="description" placeholder="Description"></textarea><br>

        <button type="submit">Submit</button>
    </form>
@endsection
