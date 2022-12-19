@extends('slot.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Parking Slot</h2>
        </div>
        <br>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('slot') }}"> Back</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   
    <form action="{{ route('slot.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="level">Level:</label>
            <input type="text" class="form-control" id="level" placeholder="Enter Level Name" name="level">
        </div>
        <div class="form-group">
            <label for="block">Block:</label>
            <input type="text" class="form-control" id="block" placeholder="Enter Block Name" name="block">
        </div>
        <div class="form-group">
            <label for="capacity">Capacity:</label>
            <input type="number" class="form-control" id="capacity" placeholder="Enter capacity number" name="capacity">
        </div>
        
        
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection