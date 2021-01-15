@extends('layouts.app')

@section('content')
    <h1>Data info</h1>
    @foreach($data as $el)
        <div>
            <table border="2px" width="20%">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td width="15%">{{ $el->name }}</td>
                    <td><a href="{{ route('datainfo-id', $el->id) }}"><button>More</button></a>
                    </td>
                </tr>
            </table>
        </div>
    @endforeach
@endsection
