@extends('layouts.app')

@section('content')
    <h1>{{$data->name}}</h1>
        <div>
            <table border="2px" width="20%">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td width="15%">{{ $data->name }}</td>
                    <td width="20%">{{ $data->description }}</td>
                    <td><a href="{{ route('datainfo-update', $data->id) }}"><button>Edit</button></a>
                        <a href="{{ route('datainfo-delete', $data->id) }}"><button>Delete</button></td>
                </tr>
            </table>
        </div>
@endsection
