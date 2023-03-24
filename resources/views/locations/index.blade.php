@extends('layouts.app')

@section('content')
    <h1>All Locations</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Person in charge</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
                <tr>
                    <td>{{ $location->name }}</td>
                    <td>{{ $location->description }}</td>
                    <td>{{ $location->person_in_charge }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
