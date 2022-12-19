@extends('nuser.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>User Details of {{ $nuser->first_name }} {{ $nuser->last_name }}</h2>
        </div>
        <br>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('nuser') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>First Name:</th>
            <td>{{ $nuser->first_name }}</td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td>{{ $nuser->last_name }}</td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>{{ $nuser->address }}</td>
        </tr>
        <tr>
            <th>Phone Number:</th>
            <td>{{ $nuser->phone }}</td>
        </tr>
        <tr>
            <th>Car Number:</th>
            <td>{{ $nuser->carid }}</td>
        </tr>
        <tr>
            <th>Date:</th>
            <td>{{ $nuser->date }}</td>
        </tr>
        <tr>
            <th>Time:</th>
            <td>{{ $nuser->time }}</td>
        </tr>

    </table>
@endsection