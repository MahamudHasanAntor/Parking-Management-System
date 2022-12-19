@extends('slot.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Available Parking Slots</h2>
        </div>
        <br>
        <div class="col-lg-1">
        <a class="btn btn-primary" href="{{ url('dashboard') }}"> Back</a><br><br>
            
        </div>
        <div class="col-lg-2">
            
        <a class="btn btn-success" href="{{ route('slot.create') }}">Add</a>
        </div>
       
    </div> <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Level</th>
            <th>Block</th>
            <th>Capacity</th>
            

            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($slots as $slot)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $slot->level }} </td>
                <td>{{ $slot->block }}</td>
                <td>{{ $slot->capacity }}</td>
                
                <td>
                    <form action="{{ route('slot.destroy',$slot->id) }}" method="POST">
                        
                       
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection