@extends('layout.main')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Last update</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($countries as $city)
        <tr>
            <td>{{$city->country_id}}</td>
            <td>{{$city->country}}</td>
            <td>{{$city->last_update}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection