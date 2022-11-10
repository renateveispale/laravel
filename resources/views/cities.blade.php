@extends('layout.main')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country id</th>
        <th>Last update</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($cities as $city)
        <tr>
            <td>{{$city->city_id}}</td>
            <td><a href="/cities/{{$city->country_id}}">{{$city->city}}</a></td>
            <td>{{$city->country_id}}</td>
            <td>{{$city->last_update}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection